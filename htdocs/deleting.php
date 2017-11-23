<?php
session_start();
 require'../lib/smarty-master/setup.php';
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 31/10/17
 * Time: 11:13 م
 */


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


public function check_submit()
{
  //  echo $_POST['id'];
     echo "ff";
    if(isset($_POST['submit'])){
               echo "ff111";
   
    }
//    if( $_POST['submit']=='delete' & isset($_POST['id'])){
//        $id =$_POST['id'];
//         if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {
//
//            if ($_SESSION["authorization"] == 22) {
//        
//         
//          if ($unit_request_del->delete($id)) {
//         //     echo "delete is done";
//              require'../lib/smarty-master/setup.php';
//                $smarty=new Smarty_Unit();
//                   $smarty->display('../templates/controlPanel.html');
//             
//          }
//         }
//      }
//    }
  }


    public function check_before_delete()
    {

        if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {

            if ($_SESSION["authorization"] == 22) {

  if(isset($_GET['id'])) {
      $status = deleting::GET(intval($_GET['id']));
      if ($status) {
      
   $smarty=new Smarty_Unit();
   $id=intval($_GET['id']);
 $smarty->assign('id',$id);

   $smarty->display('../templates/del.tpl');

          
          $unit_request_del = new units_requests();
         
          
        
      }

  }            }


        }

    }
}

$del=new deleting();
$del->check_before_delete ();
$del->check_submit();