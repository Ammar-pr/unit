<?php


session_start();

//$mysqli->set_charset("utf8");
require'../lib/smarty-master/setup.php';


$smarty=new Smarty_Unit();

       
      

                               $smarty->display('../templates/cas.tpl');

                
                
                

?>