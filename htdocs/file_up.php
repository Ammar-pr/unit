<?php

class uplad_file {
protected $path  = "../attachments/";

function upload_file () {

    if(isset($_FILES['file']))
    {
        
        $target_file = $this->path . basename($_FILES["file"]["name"]);
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $error=$file['error'];
        $size=$file['size'];
        $file_ext=  explode('.',$name);
        $file_ext=  strtolower(end($file_ext));
        $allowed=array('docx','pdf','doc','rtf');
        $massage="";
        $pass=0;
         if($size==0){
           $massage.= "please uplaod the file \n ";
            
//            echo " <meta http-equiv='refresh'
//   content='1; url=make_request.php'>";
         }if($size>600000){
                $massage.= "the file is to big"; 
         }
        
        if(in_array($file_ext, $allowed))
        {

          $massage.=  "you can only uplad docx , pdf , doc ,rtf \n";
             $pass=1;
        
             
        } if (file_exists($target_file)) {
     $massage.= "Sorry, file already exists. \n";
    $pass=1;
   
}if($massage!=""){
    
    echo $massage;
    
    
}else {
            if($error==0){
               
            }else {
                 if($pass==0){
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
                
                echo "Information successfully stored ";
                 }
                
            }
        }
        
    }
    
    
}



}

$fi= new uplad_file();
$fi->upload_file();

?>
