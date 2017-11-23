<?php
session_start();
 require'../lib/smarty-master/setup.php';
class delete {
  public function delete (){
    if(isset($_POST['submit']))
    {
        echo "fff";
    }
    if(isset($_POST['id'])){
               echo "ff";
   
    }
}}

$del= new delete();
$del->delete ();
 
 ?>