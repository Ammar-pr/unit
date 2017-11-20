<?php
session_start();
$target_dir = "../attachments/";
//$filename = iconv("utf-8", "cp936",  basename($_FILES["fileToUpload"]["name"]));


try {
    if(basename($_FILES["fileToUpload"]["tmp_name"])!=null ){
       $target_dir = "../attachments/";

        $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$target_file=trim($target_file);
$uploadOk = 1;
$document_FileType = pathinfo($target_file,PATHINFO_EXTENSION);

    }else {
        echo "it is null index \n";
    }
// Check if image file is a actual image or fake image


}catch  (Exception $e ){
    $e->getMessage();
}


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 600000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($document_FileType == "docx"  || $document_FileType == "doc"  || $document_FileType == "rtf" || $document_FileType == "pdf") 

    
   
    {


}else {
   
     echo "Sorry, only docx, doc, rtf  files are allowed.  ".$document_FileType;
       
    $uploadOk = 0;
   
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $v=basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // echo "The file ". $_FILES["fileToUpload"]["tmp_name"]. " has been uploaded.";
       // echo "".$target_file;
        $_SESSION['attachment_request_link']=$target_file;
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
