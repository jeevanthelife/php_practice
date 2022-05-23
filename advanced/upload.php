<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    // var_dump($_FILES);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false){
        // echo "file is an image - ". $check["mime"]. ".<br>";
        $uploadOk=1;
    }
    else{
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
}
//check if file already exists or not
if(file_exists($target_file)){
    echo "Sorry the file already exists.<br>";
    $uploadOk =0;
}
//check file size limit
    // var_dump($_FILES["fileToUpload"]["size"]);

if($_FILES["fileToUpload"]["size"] > 9999999999995883584){
    echo "File is too large.<br>";
    $uploadOk=0;
}
//limit file type or allow certain type of file formats 
if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"){
    echo "Sorry, only JPG, JPEG and PNG files are allowed.<br>";
    $uploadOk =0;
}
if($uploadOk == 0){
    echo "Sorry, your file was not uploaded.<br>";
}
else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    }
    else{
        echo "Sorry there was error uploading the file.";
    }
}
