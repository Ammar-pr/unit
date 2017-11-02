<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 01/11/17
 * Time: 09:30 م
 */
session_start();
date_default_timezone_set('America/New_York');
require_once ('units_requests.php');
require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
class updating
{

    public static function GET($value)
    {
        // $value=htmlspecialchars($value);
        if ($value <= 0) {
            return false;

        } else {
            if (is_numeric($value)) {

                if (preg_match("@([^0-9])@Ui", $value) == 0) {
                    return true;
                } else {
                    return false;
                }


            }
        }
    }

    public function show_update_templates()
    {
        if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {

            if ($_SESSION["authorization"] == 22) {

                $status = updating::GET(intval($_GET['id']));
                if ($status) {

                $unit= new units_requests();
                 $value=   $unit->fetchWithPK(intval($_GET['id']));

              foreach ($value as $v=>$k){
                  echo $v=>$k;
                    }
            //   print_r($value);

                }
            }

        }
    }
}
$up=new updating();
$up->show_update_templates ();