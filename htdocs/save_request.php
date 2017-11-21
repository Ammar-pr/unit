<?php
session_start();
require_once 'units_requests.php';
require_once 'users.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of save_request
 *
 
 * 
 */
class save_request {
   public function __construct()
    {
       
       $this->check_data_send_by_user();
       
   }
   public  function check_data_send_by_user(){
 
    if(isset($_POST['list']) & isset ($_SESSION['username']) & isset ($_SESSION['password']) ){
      // get_user_id
      
        $us=new users();
        if(isset($_SESSION['attachment_request_link']) & $_SESSION['attachment_request_link']!="")
      {
        
       if( $us->get_user_id($_SESSION['username'])>0){
  
      
       $title= htmlspecialchars($_POST['title']);
     // session_unset($_SESSION['attachment_request_link']);
      $id=$us->get_user_id($_SESSION['username']);
      $var =(int)htmlspecialchars($_POST['list']);
      $unit = new units_requests();
   $unit->SaveRequest(0,$id, 32,$_SESSION['attachment_request_link'],$title,$var,1,'');
//     public function SaveRequest($id,$id_requester, $status_id,$attachment_request_link,$title,$unit_id,$id_responder,$attachment_response_link)
         
       }else {
           
           echo "cannot save the request ";
       }
      }else{
          echo"الرجاء رفع ملف";
          return "need to uplode the attachment ";
      }
     
    }
    
   }

}
$sv= new save_request();
?>