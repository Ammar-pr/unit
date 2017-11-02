<?php
session_start();
date_default_timezone_set('America/New_York');
require_once ('users.php');
require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';


class login
{

    public function check () {


       if(   isset($_POST['username']) &  isset ($_POST['password'])  ){



           $user_object=new users();


           if($user_object->login(htmlspecialchars($_POST['username']),$_POST['password'],'')){
             $_SESSION['username']=htmlspecialchars($_POST['username']);
              $_SESSION['password']=$_POST['password'];
               header('Location: index.php');

              echo "login successful";
           }else {
              // user name and password not correct

               echo "user name and password not correct ";
           }

        }else {
           $smarty = new Smarty();
           $smarty->display('templates/login.tpl');

       }



    }

}

$log= new login();
$log->check();

?>