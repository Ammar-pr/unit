<?php
require_once 'units_requests.php';
require_once 'users.php';
class uplad_file {
protected   $path   = "../attachments/";



public function save_post_values($title,$unit_num,$file_path_name){
    // make new object form class units_reqest 
    // save a  new request with assgin values 
    // finsh saveing 
    // send confriming save massage ...
    
    
    if($this->check_post_values()==""){
    $new_request= new units_requests();
    if(isset($_SESSION['username'])){
        $user_info=new users();
        $user_info->get_user_id($_SESSION['username']);
        
        if($user_info!=0){
                $new_request->SaveRequest(0, $user_info, 33, $file_path_name, $title, $unit_num, 0, '');

        }
    }
    
    } else {
        return $this->check_post_values();
    }
    
}




public function check_post_values (){
    
   $massage=""; 
   $title=trim( $_POST['title']);
   $single_unit_object_number=(int)$_POST['list'];
   
   
   if(strlen($title)>3  || strlen($title)<40){
       $massage.="the title lenght should be btween 3,40 \n";
   }else if(strlen($title) ==0){
       $massage.="please insert the title  \n";
   }if($single_unit_object_number==0){
       $massage.="please choose unit from the list apove ..";
   }
   
   return $massage;
    
}

public function upload_file () {

    
     
    
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
        
        if(in_array($file_ext, $allowed)==false)
        {
           if (file_exists($target_file)) {
      $massage.= "Sorry, file already exists. \n";
         $pass=1;
   
        }
          $massage.=  "you can only uplad docx , pdf , doc ,rtf \n";
             $pass=1;
        
             
        } if($massage!=""){
    
    echo $massage;
    
    
}else {
            if($error==0){
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
