<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
    <title>Document</title>
</head>
<style>
    td{
        margin-left:20px;
        float:left;
    }
</style>
<body>
    <div class="container">
        <div class="row">
        <div class="collection">
        <?php
function http_digest_parse($txt) {
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}
$realm = 'Restricted area';
$users = array('admin' => 'admin');

if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.'",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
    die('Unauthorized.');
}

if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) || !isset($users[$data['username']]))
    die('Wrong Credentials!');

$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

if ($data['response'] != $valid_response)
    die('Wrong Credentials!');
?>
<li class="collection-header center"><h4><?php echo 'Loggined as:&nbsp;&nbsp;&nbsp;'.$data['username'] ?></h4></li>
<?php

if(isset($_GET['ref'])) {
    $g = $_GET['ref'];
    $f = file_get_contents("$g/data.json");
    $f = json_decode($f);
    foreach($f as $k => $s) {
        echo '<table><tbody><tr><td style="font-weight:bold;">'.$k.':</td><td style="padding-left:20px;">'.$s.'</td></tbody></table>';
    }
} else {
    $dirs = array_filter(glob('*'), 'is_dir');
?>
<?php
    foreach($dirs as $k) {
        echo "<a style='font-size:20px;' href='?ref=$k' class='collection-item'>$k</a>";
    }
?>
</div>
<?php
}
?>
        </div>
    </div>
</body>
<script type="text/javascript" src="../assets/js/materialize.js"></script>
</html>