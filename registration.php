<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 01:20 ص
 */


require_once ('users.php');
require_once ('colleges.php');
require_once ('colleges_departments.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new users();
$var =(int)htmlspecialchars($_POST['user_job_number']);


   $errorMassage= $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));


   if(strlen($errorMassage)>0){
       echo $errorMassage;
   }else {

       $us=new users();

      $us->Save(0,htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number']),1,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));



   }
}
