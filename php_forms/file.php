<?php
if($_FILES['fileUpload']){
    $path=$_FILES['fileUpload']['name'];
    // echo $path;
    $upload_path="./uploads/".$path;
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$upload_path)){
        echo "file uploaded";
    }
    else{
        die("failed to upload");
    }
}
else{
    die("no file found");
}
// print_r($_FILES);
?>