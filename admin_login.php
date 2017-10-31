<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 30/10/17
 * Time: 10:16 م
 */
session_start();
date_default_timezone_set('America/New_York');
require_once ('users.php');
require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

class admin_login {




    public function check_admin_login () {



        if(   isset($_POST['username']) &  isset ($_POST['password']) & isset ($_POST['authorization']) ){


            $user_object=new users();


            if($user_object->login(htmlspecialchars($_POST['username']),$_POST['password'],$_POST['authorization'])){
                $_SESSION['username']=htmlspecialchars($_POST['username']);
                $_SESSION['password']=$_POST['password'];
                $_SESSION['authorization']=$_POST['authorization'];

                header('Location: controlPanel.php');

                echo "login  admin successful";
            }else {
                // user name and password not correct

                echo "user name and password not correct for admin ";
            }

        }else {
            $smarty = new Smarty();
            $smarty->display('templates/admin_login.tpl');

        }



    }

}

$log= new admin_login();
$log->check_admin_login();
