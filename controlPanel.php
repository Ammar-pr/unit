<?php
session_start();
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 30/10/17
 * Time: 10:24 م
 */

date_default_timezone_set('America/New_York');
require_once ('users.php');
require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
class controlPanel
{

    public function validate_page_access () {


        if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & $_SESSION["authorization"]==22 )

        {


           header('Location: templates/controlPanel.html');

        }else {

            // cannot access the login page

            $smarty = new Smarty();
            $smarty->display('templates/Admin_Warning.tpl');
        }
}



}

$control = new controlPanel();
$control->validate_page_access();