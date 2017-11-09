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

class make_request
{







    public function validate_page_access ()
    {


        if (isset($_SESSION["username"]) & isset($_SESSION["password"])) {
            $user_object = new users();
            if ($user_object->login($_SESSION["username"], $_SESSION["password"], '')) {


                header('Location: templates/make_request.tpl');

            } else {


                $smarty = new Smarty();
                $smarty->display('templates/Admin_Warning.tpl');
            }
        }else {
            echo "cannot access this page , please login or sign up";

        }

    }

}

$request_firt_step = new make_request();
$request_firt_step->validate_page_access();
?>