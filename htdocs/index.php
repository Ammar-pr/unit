<?php
session_start();
require'../lib/smarty-master/setup.php';

// display it



if(isset($_SESSION['username']) & isset($_SESSION['password'])   & isset($_SESSION["authorization"]) ){

    if($_SESSION["authorization"]==1){
             $smarty=new Smarty_Unit();
                  $smarty->display('../templates/indexWithOutLogin.tpl');
}               if( $_SESSION["authorization"]==22){
        $smarty=new Smarty_Unit();
$smarty->display('../templates/indexWithOutLogin_admin.html');
}}else {
    $smarty=new Smarty_Unit();
    $smarty->display('../templates/index.tpl');
}



?>