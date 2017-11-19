<?php
session_start();

class controlPanel
{

    public function validate_page_access () {


        if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & $_SESSION["authorization"]==22 )

        {


           header('Location: ../templates/controlPanel.html');

        }else {

            // cannot access the login page
       require'../lib/smarty-master/setup.php';

          $smarty=new Smarty_Unit();
            $smarty->display('../templates/Admin_Warning.tpl');
        }
}



}

$control = new controlPanel();
$control->validate_page_access();

?>