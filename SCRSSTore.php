<?php
if(isset($_POST['issubmit'])) {
    // print_r($_POST);
    // print_r($_FILES);

    $target_path = "./store/".$_POST['paperID']."/";
    $dstore = $target_path."data.json";
    mkdir($target_path);
    $target_path = $target_path.basename($_FILES['file']['name']);   
      
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
        file_put_contents($dstore, json_encode($_POST));
        header("location: /SCRSRegistrationFees.php?ok=1", 302);
    } else{
        header("location: /SCRSRegistrationFees.php?ok=0", 302);
    } 
    die();
}
header("location: /SCRSRegistrationFees.php?ok=999", 302);