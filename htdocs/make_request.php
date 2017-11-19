<?php
session_start();
require'../lib/smarty-master/setup.php';
require 'users.php';

class make_request
{


    public function validate_page_access (){
     if (isset($_SESSION["username"]) & isset($_SESSION["password"])) {
           $user_object = new users();
         if ($user_object->login($_SESSION["username"], $_SESSION["password"], '')) {


        $smarty=new Smarty_Unit();
        
      
        $smarty->display('../templates/make_request.tpl');
            } else {


               $smarty=new Smarty_Unit();
                $smarty->display('../templates/Admin_Warning.tpl');
            }
        }else {
            echo "cannot access this page , please login or sign up";

        }

    }

}

$request_firt_step = new make_request();
$request_firt_step->validate_page_access();
?>