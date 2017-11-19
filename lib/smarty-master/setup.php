<?php
require_once'libs/Smarty.class.php';
class Smarty_Unit extends Smarty {

   function __construct()
   {
date_default_timezone_set('America/New_York');
        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('../templates/');
        $this->setCompileDir('../templates_c/');
        $this->setConfigDir('../configs/');
        $this->setCacheDir('../cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'UNIT');
   }

}
?>

