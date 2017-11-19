<?php
session_start();
require_once ('users.php');

class login
{

    public function check () {


       if(   isset($_POST['username']) &  isset ($_POST['password'])  ){



           $user_object=new users();


           if($user_object->login(htmlspecialchars($_POST['username']),$_POST['password'],'')){
            $authorization= $user_object->get_user_role($_POST['username']);
               $_SESSION['username']=htmlspecialchars($_POST['username']);
              $_SESSION['password']=$_POST['password'];
              $_SESSION['user_id']=$user_object->get_user_id($_SESSION['username']);
              $_SESSION['authorization']=$authorization;
      
               header('Location: index.php');

              echo "login successful";
           }else {
              // user name and password not correct

               echo "user name and password not correct ";
           }

        }else {
            require'../lib/smarty-master/setup.php';

          $smarty=new Smarty_Unit();
           $smarty->display('../templates/login.tpl');

       }



    } 

}

$log= new login();
$log->check();

?>