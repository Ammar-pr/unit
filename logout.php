<?php

class logout {

function process_logout () {
    session_start();

//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');
require 'helpFunction.php';
$help = new helpFunction;
$help->path_activate_smarty();
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
    
    


if (isset($_SESSION["username"]) & isset($_SESSION["password"]))
{
    echo "log out is done";

session_unset();

    $smarty->display('indexWithOutLogin.tpl');

    
}else if(!isset($_SESSION["username"])& !isset($_SESSION["password"])==false){
    echo  "you didn't login can not make log out !";
    
                                   echo "
<meta http-equiv='refresh' content='0.22; url=index.php'>
";
}



}
}


$lo = new logout;

$lo->process_logout ();
?>