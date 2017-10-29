<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 01:20 ص
 */


require_once ('users.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new users();

    // check retturn
    // save


    $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST[''])
        ,htmlspecialchars($_POST['']),htmlspecialchars($_POST['']),htmlspecialchars($_POST['']),htmlspecialchars($_POST['']));


//check_user_input($email,$user_job_number,$department_name,$name,$password,$phonenumber_number,$college_name)
}
