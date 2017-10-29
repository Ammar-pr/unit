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


    $_POST['user_job_number']=111;
   $errorMassage= $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));


   if(strlen($errorMassage)>0){
       echo $errorMassage;
   }else {

       $col= new colleges();

       $college_name=htmlspecialchars($_POST['college_name']);
       $col->Save(0,"$college_name");


       $ob = R::find( 'colleges', ' name LIKE ? ', ["$college_name%" ] );

       echo var_dump($ob);

   }
}
