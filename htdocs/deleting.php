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
   
   if ($_SERVER["REQUEST_METHOD"] == "POST"){

     
} echo "1";

         if (isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"])) {
  echo "1";
            if ($_SESSION["authorization"] == 22 & isset($_POST['id']) & $_POST['id']!=0) {
             echo "1";
         $id=$_POST['id'];
         echo "the id is ".$id;
         $unit_request_del = new units_requests();
          if ($unit_request_del->delete($id)) {
              //   echo "2";
              echo "delete is done";
              $_POST['id']=0;
                echo '<meta http-equiv="Refresh" content="3; url=../htdocs/controlPanel.php/>';
             
          }
         }
      }
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
  
    //echo $id;
   // echo $id=39;
    $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);

    

$smarty->clearCache('../templates/del.tpl');

     $id=$_GET['id'];
    // fetch $obj from db and assign...
    $smarty->assign('id', $id);
       $smarty->display('../templates/del.tpl');

}



          
         
          
        
      }

  }        
  
  
  
      }
    }

}


$del=new deleting();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $del->check_submit();
}else if($_SERVER["REQUEST_METHOD"] == "GET"){

$del->check_before_delete ();
}
