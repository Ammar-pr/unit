<?php
session_start();
class logout {

function process_logout () {


    date_default_timezone_set('America/New_York');

    require_once'smarty-master/libs/Smarty.class.php';

    $smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
    
    


if (isset($_SESSION["username"]) & isset($_SESSION["password"]))
{
    echo "log out is done";

session_unset();

    $smarty->display('index.tpl');

    
}else if(!isset($_SESSION["username"]) & !isset($_SESSION["password"])){
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