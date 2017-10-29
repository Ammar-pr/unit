<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 21/10/17
 * Time: 09:18 م
 */
require_once ('scripts\RedBeanPHP\rb.php');
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

return R::exec(" UPDATE `users` SET `user_job_number` =$user_job_number, `role_id` = $role_id ,`department_name` ='$department_name', `name` = '$name', `password` = '$password', `phonenumber_number` = $phonenumber_number,   `college_name` = '$college_name' , `email` = '$email' WHERE `users`.`id` =" .$id);

        } else {

            if(count (R::getAll( "SELECT * FROM users where email='$email' "  ))==1 ) {
                echo "الايميل موجود بالفعل حاول ان تدخل ايميل اخر او نسيان كلمة المرور للمساعدة ";
            }
            else {

                $hashed_password= password_hash("$password", PASSWORD_DEFAULT);
            R::exec("INSERT INTO `users` ( `user_job_number`, `role_id`, `department_name`, `name`, `password`, `phonenumber_number`, `email`, `college_name`) VALUES ( $user_job_number, $role_id, '$department_name', '$name', '$hashed_password', $phonenumber_number, '$email','$college_name')");
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

        $hashed_password= password_hash("$password", PASSWORD_DEFAULT);
        $userdata=R::getAll( "SELECT * FROM users where email='$email' and  pssword='$hashed_password' " );
      if(count($userdata)>0){
        return true ;
      }else{
          return false ;
      }
    }

    public function check_user_input($email,$user_job_number,$role_id,$department_name,$name,$password,$phonenumber_number,$college_name){
        $name=htmlspecialchars($name);
        $name=trim($name);
        $department_name=htmlspecialchars($department_name);
        $department_name=trim($department_name);
        $college_name=htmlspecialchars($college_name);
        $college_name=trim($college_name);




        $error_massage ="";
        if(!is_string($name)  & strlen($name)>3 ) {

            $error_massage.="اسم المستخدم يجب ان يكون كلمة وليس رقم ";
        }else if(strlen($name)>3){
            $error_massage.="اسم المستخدم اسم المستخدم يجب ان يكون اكبر من ثلاثة وأصفر من 12  ";
        }else if(strlen($name)<12){
            $error_massage.="اسم المستخدم اسم المستخدم يجب ان يكون  أصفر من 12  ";
        }


        if(!is_string($college_name)  & strlen($college_name)>3 ) {

            $error_massage.="اسم المستخدم يجب ان يكون كلمة وليس رقم "."\n";
        }else if(strlen($college_name)>3){
            $error_massage.="اسم المستخدم اسم الكلية يجب ان يكون اكبر من ثلاثة وأصفر من 12  "."\n";
        }else if(strlen($college_name)<12){
            $error_massage.="اسم الكلية  يجب ان يكون  أصفر من 12  "."\n";
        }


        if(!is_string($department_name)  & strlen($department_name)>3 ) {

            $error_massage.="اسم القسم يجب ان يكون كلمة وليس رقم  "."\n";
        }else if(strlen($department_name)>3){
            $error_massage.="اسم المستخدم اسم القسم يجب ان يكون اكبر من ثلاثة وأصفر من 12  "."\n";
        }else if(strlen($department_name)<12){
            $error_massage.="اسم القسم  يجب ان يكون  أصفر من 12  "."\n";
        }

        if(!is_numeric($user_job_number)){
            $error_massage.="ادخل رقمك الوظيفي   "."\n";
        }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_massage.= "البريد الالكتروني غير صحيح"."\n";
        }


        return $error_massage;


    }







}


//$us=new users();
//$us->Save(0,'xrtetxf@hotmail.com',15444,2,27,'amdf',503448951,'drdfevd');
//$id,$user_name,$user_job_number,$role_id,$department_id,$name,$password,$phonenumber_number,$department_id

//$us->check();