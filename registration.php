<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 01:20 ص
 */


require_once ('users.php');
require_once ('colleges.php');
require_once ('colleges_departments.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new users();
$var =(int)htmlspecialchars($_POST['user_job_number']);
echo $var ;

   $errorMassage= $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
        ,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));


   if(strlen($errorMassage)>0){
       echo $errorMassage;
   }else {

       $col= new colleges();

       $college_name=htmlspecialchars($_POST['college_name']);


    //      $col->Save(0,"$college_name");

      //     $ob = R::find( 'colleges', ' name LIKE ? ', ["$college_name%" ] );
     //     $id=0;
    //      foreach($ob as $recotrd){
   //       $id= $recotrd['id'];
    //         }
       //       $coleges_departement=new colleges_departments ();
     //        $college_departement_name=htmlspecialchars($_POST['department_name']);

          //      $coleges_departement->Save(0,"$college_departement_name",$id);

   }
}
