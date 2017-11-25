<?php
session_start();
require_once ('users.php');
require_once ('colleges.php');
require_once ('colleges_departments.php');
class registration {
public function check_captcha () {
    $errMsg="";

        if(!empty($_POST['captcha_code'])){
        
        //get captcha code from session
        $captchaCode = $_SESSION['captchaCode'];
        
        //get captcha code from input field
        $enteredcaptchaCode = $_POST['captcha_code'];
        
        //verify the captcha code
        if($enteredcaptchaCode !== $captchaCode){
            $errMsg = ' كلمة التحقق لاتساوي الكلمة التي بالصورة .<br>';
        }
        return  $errMsg;
}}


public function  process_registration(){
if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $user = new users();

$var =(int)htmlspecialchars($_POST['user_job_number']);
$dep=(int)$_POST['dep_id'];
$col_id=(int)$_POST['college_id'];
   $errorMassage= $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,$dep,htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),$col_id);
   
  $errorMassage.= $this->check_captcha();
 if(strlen($errorMassage)>0){
       echo $errorMassage;
       
       echo " <br><a href='user_registration_form.php'>رجوع للخلف لاستكمال عملية تسجيل المستخدم</a>";
   }else {
 header('Location: index.php');
      
 $var =(int)htmlspecialchars($_POST['user_job_number']);
$dep=(int)$_POST['dep_id'];
$col_id=(int)$_POST['college_id'];
 $us=new users();
 echo "save ";
   $us->Save(0,htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number']),1,$dep,htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),$col_id);

   
   //     public function Save($id,$email,$user_job_number,$role_id,$department_num,$name,$password,$phonenumber_number,$college_name)

   }
}
}

}

$rg= new registration();
$rg->process_registration();


?>
