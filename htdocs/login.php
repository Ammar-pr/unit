<?php
session_start();
require_once ('users.php');
require'../lib/smarty-master/setup.php';

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
           $smarty->display('../templates/login.tpl');

       }



    }

}

$log= new login();
$log->check();

?>