<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 10:33 م
 */
session_start();
date_default_timezone_set('America/New_York');

require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

class login
{

    function check () {

        $user_name=htmlspecialchars($_POST['username']);

       if( isse($user_name) & isset ($_POST['password'])){

           $user_object=new users();


           if( $user_object->login($user_name,$_POST['password'])){
               // dissplay logout
           }else {
              // user name and password not correct

               echo "user name and password not correct ";
           }

        }else {


       }



    }

}

$log= new login();
$log->check();

?>