<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 08:28 م
 */

date_default_timezone_set('America/New_York');

require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

// display it
$smarty->display('index.tpl');


?>