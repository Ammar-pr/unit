<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 30/10/17
 * Time: 10:24 م
 */

class controlPanel
{

    public function validate_page_access () {


        if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & $_SESSION["authorization"]==22 )

        {
             // open control panel // dissplay login

        }else {

            // cannot access the login page
        }
}



}

$control = new controlPanel();
$control->validate_page_access();