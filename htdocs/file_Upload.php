<?php
session_start();
require'../lib/smarty-master/setup.php';
require 'users.php';

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
                 
                   $_SESSION['id']=intval($_GET['id']);
           
                     $smarty=new Smarty_Unit();
                $smarty->display('../templates/fileUploadDemoo.html');
               
               }

           }}
}




}

$file_up=new file_Upload();
$file_up->check_file_upload();


?>