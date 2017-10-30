<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 21/10/17
 * Time: 09:18 م
 */
require_once ('scripts/RedBeanPHP/rb.php');
class users
{
    public function __construct()
    {
        if( !R::testConnection()) {
            R::setup('mysql:host=localhost;dbname=unit',
                'root', 'dwddwddwd');


        }
    }


    public function Save($id,$email,$user_job_number,$role_id,$department_name,$name,$password,$phonenumber_number,$college_name)
    {




        if ($id > 0) {
            $hashed_password= password_hash("$password", PASSWORD_DEFAULT);

return R::exec(" UPDATE `users` SET `user_job_number` =$user_job_number, `role_id` = $role_id ,`department_name` ='$department_name', `name` = '$name', `password` = '$password', `phonenumber_number` = '$phonenumber_number',   `college_name` = '$college_name' , `email` = '$email' WHERE `users`.`id` =" .$id);

        } else {

            if(count (R::getAll( "SELECT * FROM users where email='$email' "  ))==1 ) {
                echo "الايميل موجود بالفعل حاول ان تدخل ايميل اخر او نسيان كلمة المرور للمساعدة ";
            }
            else {
                $col= new colleges();
                $col->Save(0,"$college_name");
                $ob = R::find( 'colleges', ' name LIKE ? ', ["$college_name%" ] );
                $college_id=0;
                foreach($ob as $recotrd){
                    $college_id= $recotrd['id'];
                }
                $coleges_departement=new colleges_departments ();

                $coleges_departement->Save(0,"$department_name",$college_id);
                $hashed_password= password_hash($password, PASSWORD_BCRYPT);


            R::exec("INSERT INTO `users` ( `user_job_number`, `role_id`, `department_name`, `name`, `password`, `phonenumber_number`, `email`, `college_name`) VALUES ( $user_job_number, $role_id, '$department_name', '$name', '$hashed_password', '$phonenumber_number', '$email','$college_name')");
        }}
    }
    public function fetchWithPK($id)
    {
        if ($id > 0) {
            return R::load('users',$id);
        }else {
            echo "the id is empty";
        }
    }
    public function fetchAll()
    {
        return R::getAll( 'SELECT * FROM users' );
    }



    public function delete($id)
    {
        if ($id > 0) {
            return R::exec("DELETE FROM `users` WHERE id =".$id );
        }
    }
    public function deleteAll()
    {
        return R::exec("DELETE FROM `users` ");
    }


    public function login($email,$password) {



        $userdata=R::getAll( "SELECT * FROM users where email='$email' " );
        $password_encrypted="";
        foreach($userdata as $elm){
            $password_encrypted=$elm['password'];
        }


      if(count($userdata)>0){
          if(password_verify($password, $password_encrypted)) {
              return true;
          }
      }else{
          return false ;
      }
    }

    //   echo $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
//,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));


    public function check_user_input($email,$user_job_number,$department_name,$name,$password,$phonenumber_number,$college_name){
        $name=htmlspecialchars($name);
        $name=trim($name);
        $department_name=htmlspecialchars($department_name);
        $department_name=trim($department_name);
        $college_name=htmlspecialchars($college_name);
        $college_name=trim($college_name);





        $error_massage ="";
        if(!is_string($name)  & strlen($name)<3 || strlen($name)>12 ) {

            $error_massage.="اسم المستخدم يجب ان يكون كلمة وليس رقم "."\n";
        }


        if(!is_string($college_name)  & strlen($college_name)<3 || strlen($college_name)>12) {

            $error_massage.="اسم الكلية يجب ان يكون كلمة وليس رقم ,طول الكلمة أكبر من 3 ,12 "."\n";
        }


        if(!is_string($department_name)  & strlen($department_name)<3  || strlen($department_name)>12) {

            $error_massage.="اسم القسم يجب ان يكون كلمة وليس رقم ,عدد الحروف اكبر من 3 "."\n";
        }

        if(!is_numeric($user_job_number)){
            $error_massage.="ادخل رقمك الوظيفي   "."\n";
        }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_massage.= "البريد الالكتروني غير صحيح"."\n";
        }

       if(strlen($password)>12 || strlen($password)<3) {
            $error_massage.="كلمة المرور يجب أن تكون أقل من 12 خانة ,لاتكون أصغر من 3  ";
        }
         if(strlen($phonenumber_number)>13){
      echo strlen($phonenumber_number);
             $error_massage.="يجب ان يكون رقم الهاتف 10 أرقام"."\n";
         }

        return $error_massage;


    }







}


//$us=new users();
//$us->Save(0,'xrtetxf@hotmail.com',15444,2,27,'amdf',503448951,'drdfevd');
//$id,$user_name,$user_job_number,$role_id,$department_id,$name,$password,$phonenumber_number,$department_id

//$us->check();