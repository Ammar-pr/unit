<?php
session_start();
require_once 'units_requests.php';
require_once 'users.php';
class uplad_file {
protected   $path   = "../attachments/";



public function check_captcha () {
     if(!empty($_POST['captcha_code'])){
        
        //get captcha code from session
        $captchaCode = $_SESSION['captchaCode'];
        
        //get captcha code from input field
        $enteredcaptchaCode = $_POST['captcha_code'];
        
        //verify the captcha code
        if($enteredcaptchaCode === $captchaCode){
            $succMsg = 'Entered captcha code has matched.';
        }else{
            $errMsg = 'Captcha code not matched, please try again.';
        }
        
    }else{
        $errMsg = 'Please enter the captcha code.';
    }
    
    
   return $errMsg;
    
}


public function save_post_values($file_path_name){
    // make new object form class units_reqest 
    // save a  new request with assgin values 
    // finsh saveing 
    // send confriming save massage ...
   
  $title=trim( htmlspecialchars($_POST['title']));
   $unit_num=(int)$_POST['list'];
   
      

    if($this->check_post_values()==""){
          
    $new_request= new units_requests();
    if(isset($_SESSION['username'])){
        $user_info=new users();
        
        
        $user_id_requester=$user_info->get_user_id($_SESSION['username']);
        
        if($user_id_requester!=0){
            
        
                $new_request->SaveRequest(0, $user_id_requester, 33, $file_path_name, $title, $unit_num, 0, '');
                return "";

        }
    }
    
    } else {
        return $this->check_post_values();
    }
    
}




public function check_post_values (){
    
   $massage=""; 
   $title=trim(htmlspecialchars($_POST['title']));
   $single_unit_object_number=(int)$_POST['list'];
  echo $title;
  echo $single_unit_object_number;
                            $request_info_title_status= new units_requests();
      $status=  $request_info_title_status->check_title($title);
   
   if(strlen($title)<3  || strlen($title)>40){
       $massage.="the title lenght should be btween 3,40 \n";
   }else if(strlen($title) ==0){
       $massage.="please insert the title  \n";
   }else if($single_unit_object_number==0){
       $massage.="please choose unit from the list apove ...";
   }else  if($status==false){
           $massage.= "title    allready   exist \n ";
           
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
if ($this->check_post_values()!=""){
    $massage.= $this->check_post_values();
}
         
    else if($size=="0" ){
    echo "please uplaod the file \n";
   $massage.= "please uplaod the file \n ";
                     }else if($size>600000){
                $massage.= "the file is to big"; 
         }
        
         else if(in_array($file_ext, $allowed)==false)
        {
           $massage.=  "you can only uplad docx , pdf , doc ,rtf \n";

  
          $pass=1;
        
             
        }      else if (file_exists($target_file)) {
       $massage.= "Sorry, file already exists. \n";
         $pass=1;
   
        } else {
    
    echo $massage;
    
    
} if($massage==!"") {
    echo $massage;
    
}else{
            if($error==0){
                 if($pass==0){
                     
              
              if( move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)==true){
                   echo "upload is done \n";
                   $this->save_post_values($target_file);
                  
               }else {
                   echo "fild upload";
                     }
        
                
             
                
                 }else {
                     echo "fild upload \n ";
                    echo $massage;
                      
                 } 
            
        }
        
    }}
    
   
}



}

$fi= new uplad_file();
$fi->upload_file();

?>
