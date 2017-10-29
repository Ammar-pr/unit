<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 01:20 ص
 */


require_once ('users.php');

 echo "sdfsdf";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new users();


    $_POST['user_job_number']=1111;

   echo $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),intval(htmlspecialchars($_POST['phonenumber_number'])),htmlspecialchars($_POST['college_name']));

}
