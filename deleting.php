<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 31/10/17
 * Time: 11:13 م
 */
session_start();

require_once ('units_requests.php');
class deleting
{

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

    public function check_before_delete()
    {

        if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {

            if ($_SESSION["authorization"] == 22) {


  if(isset($_GET['id'])) {
      $status = deleting::GET(intval($_GET['id']));
      if ($status) {
          $unit_request_del = new units_requests();
          if ($unit_request_del->delete(intval($_GET['id'])) == 1) {
              echo "delete is done";
              header('Location: templates/controlPanel.html');
          }
      }

  }            }


        }

    }
}

$del=new deleting();
 $del->check_before_delete ();