<?php
session_start();
date_default_timezone_set('America/New_York');

require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';


// display it



if(isset($_SESSION['username']) & isset($_SESSION['password'])){

    $smarty->display('indexWithOutLogin.tpl');
}else {
    $smarty->display('index.tpl');
}



?>