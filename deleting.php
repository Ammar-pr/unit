<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 31/10/17
 * Time: 11:13 م
 */

require_once ('units_requests.php');
class deleting
{


    public function check_before_delete()
    {

        if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {
            if ($_SESSION["authorization"] == 22) {

                intval($_GET['id']);

                $unit_request_del = new units_requests();
                $unit_request_del->delete(0);


            }


        }

    }
}

$del=new deleting();
$del->check_before_delete ();