<?php
require_once ('users.php');
require_once ('colleges.php');
require_once ('colleges_departments.php');


if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $user = new users();

$var =(int)htmlspecialchars($_POST['user_job_number']);
$dep=(int)$_POST['dep_id'];
$col_id=(int)$_POST['college_id'];
   $errorMassage= $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,$dep,htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),$col_id);
 if(strlen($errorMassage)>0){
       echo $errorMassage;
   }else {
 header('Location: index.php');
      
 $var =(int)htmlspecialchars($_POST['user_job_number']);
$dep=(int)$_POST['dep_id'];
$col_id=(int)$_POST['college_id'];
 $us=new users();
   $us->Save(0,htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number']),1,$dep,htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),$col_id);

   
   //     public function Save($id,$email,$user_job_number,$role_id,$department_num,$name,$password,$phonenumber_number,$college_name)

   }
}
