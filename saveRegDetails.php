<?php
if(isset($_POST['issubmit'])) {
    $target_path = "./regstore/".$_POST['cpaperid']."-".time()."/";
    $dstore = $target_path."data.json";
    mkdir($target_path);
      
    if(file_put_contents($dstore, json_encode($_POST))) {  
        header("location: /OnlineRegistrations.php?ok=1", 302);
    } else{
        header("location: /OnlineRegistrations.php?ok=0", 302);
    } 
    die();
}
header("location: /OnlineRegistrations.php?ok=999", 302);