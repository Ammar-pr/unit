<?php
session_start();

require_once ('units_requests.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$document_FileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"]))  {



if (file_exists($target_file)) {
    echo "Sorry, file already exists.";

    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats rtf
if($document_FileType != "docx"  & $document_FileType != "doc"  & $document_FileType != "rtf") {
    echo "Sorry, only docx files are allowed.";
    $uploadOk = 0;

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       echo "<br>";
       echo "the file was uplod it on this path /".$target_file;
         if(isset($_SESSION['id'])) {
             // to update metho , pass the id and update with the attachment link and time , and change the status of the request to closed

             $upd=new units_requests();
            $upd->reply_request($_SESSION['id'],$target_file,32,basename( $_FILES["fileToUpload"]["name"]));
         }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}else {
        echo "dont have access to upload file ";
    }
?>
