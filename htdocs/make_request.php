<?php


session_start();


require'../lib/smarty-master/setup.php';


$smarty=new Smarty_Unit();

       
                
                
                
                //require_once $smarty->_get_plugin_filepath('function', 'html_options');
                $smarty->auto_literal = false;

                               $smarty->display('../templates/make_request.tpl');

                
                
                
                
                
          //      $smarty->debugging = TRUE;

  

//class make_request
//{
//
//
//
//
//
//
//
//    public function validate_page_access ()
//    {
//
//
//        if (isset($_SESSION["username"]) & isset($_SESSION["password"])) {
//            $user_object = new users();
//            if ($user_object->login($_SESSION["username"], $_SESSION["password"], '')) {
//
//                $smarty = new Smarty();
//                $smarty->template_dir = 'templates/';
//                $smarty->compile_dir = 'templates_c/';
//                $smarty->config_dir = 'configs/';
//                $smarty->cache_dir = 'cache/';
//                $smarty->debugging = TRUE;
//
//
//
//                $smarty->display('make_request.tpl');
//
//            } else {
//
//
//                $smarty = new Smarty();
//                $smarty->display('templates/Admin_Warning.tpl');
//            }
//        }else {
//            echo "cannot access this page , please login or sign up";
//
//        }
//
//    }
//
//}
//
//$request_firt_step = new make_request();
//$request_firt_step->validate_page_access();
?>