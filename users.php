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


    public function Save($id,$email,$user_job_number,$role_id,$department_id,$name,$password,$phonenumber_number)
    {



        if ($id > 0) {
            $hashed_password= password_hash("$password", PASSWORD_DEFAULT);

return R::exec(" UPDATE `users` SET `user_job_number` =$user_job_number, `role_id` = $role_id ,`department_id` =$department_id, `name` = '$name', `password` = '$password', `phonenumber_number` = $phonenumber_number, `email` = '$email' WHERE `users`.`id` =" .$id);

        } else {

            if(count (R::getAll( "SELECT * FROM users where email='$email' "  ))==1 ) {
                echo "الايميل موجود بالفعل حاول ان تدخل ايميل اخر او نسيان كلمة المرور للمساعدة ";
            }
            else {

                $hashed_password= password_hash("$password", PASSWORD_DEFAULT);
            R::exec("INSERT INTO `users` ( `user_job_number`, `role_id`, `department_id`, `name`, `password`, `phonenumber_number`, `email`) VALUES ( $user_job_number, $role_id, $department_id, '$name', '$hashed_password', $phonenumber_number, '$email')");
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
        $userdata=R::getAll( "SELECT * FROM users where email='$email' & pssword='$hashed_password' " );
      if(count($userdata)>0){
        return true ;
      }else{
          return false ;
      }
    }




}


//$us=new users();
//$us->Save(0,'xrtetxf@hotmail.com',15444,2,27,'amdf',503448951,'drdfevd');
//$id,$user_name,$user_job_number,$role_id,$department_id,$name,$password,$phonenumber_number,$department_id

//$us->check();