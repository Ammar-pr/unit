<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 01/11/17
 * Time: 09:30 م
 */
session_start();
require'../lib/smarty-master/setup.php';
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
                    $arr=   $unit->fetchWithPK(4);
                    if (count($arr)>1){
                    echo $arr['id'];
            //   print_r($value);

                }
            }

        }
    }}
}
$up=new updating();
$up->show_update_templates ();