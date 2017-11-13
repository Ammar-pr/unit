
<?php

// load Smarty library

//define('SMARTY_DIR', 'c:/xampp/htdocs/unit/smarty-master/libs/');
require_once'libs/Smarty.class.php';
// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

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

