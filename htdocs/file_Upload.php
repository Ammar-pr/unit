<?php
session_start();
date_default_timezone_set('America/New_York');

require_once'smarty-master/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';


class file_Upload {

    public static function GET( $value)
    {
        // $value=htmlspecialchars($value);
        if($value<=0){
            return false ;

        }else {
            if (is_numeric($value)) {

                if( preg_match("@([^0-9])@Ui",$value)==0){
                    return true ;
                }else {
                    return false ;
                }



            }}


    }
   public function  check_file_upload () {
       if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {

           if($_SESSION["authorization"]==22) {
               $status = file_Upload::GET(intval($_GET['id']));
               if ($status) {
                   $_SESSION=intval($_GET['id']);
                   $smarty = new Smarty();
                   $smarty->display('fileUploadDemo.tpl');
               }

           }}
}




}

$file_up=new file_Upload();
$file_up->check_file_upload();