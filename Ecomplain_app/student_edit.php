<?php

if(isset($_FILES['myfile']['name']))
{
    $file=$_FILES['myfile']['name'];
    $filename = basename($_FILES['myfile']['name']);
    echo $filename;

    $target = "uploads/".$file;

    $TargetFilePath = $target.$filename;
    $fileType= pathinfo($TargetFilePath,PATHINFO_EXTENSION);
    echo "<br>";
    echo $fileType;

    $allowdext = array('jpg','png','jpeg','gif');

    if(in_array($fileType,$allowdext)){
        echo "<br>"."File OK";

        if(move_uploaded_file($_FILES['myfile']['name'],$TargetFilePath))
        {
            echo "File uploaded Successfully";
        }
    }
}

?>