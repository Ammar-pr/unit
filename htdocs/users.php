<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 21/10/17
 * Time: 09:18 م
 */
require_once ('../scripts/RedBeanPHP/rb.php');
require_once ('colleges.php');
require_once ('colleges_departments.php');
class users
{
    public function __construct()
    {
        if( !R::testConnection()) {
            R::setup('mysql:host=localhost;dbname=dsr_amnatto',
                'dsr_amnatto', 'mVNeKCEG]b@W');


        }
    }



    public function Save($id,$email,$user_job_number,$role_id,$department_num,$name,$password,$phonenumber_number,$college_num)
    {




        if ($id > 0) {
            $hashed_password= password_hash("$password", PASSWORD_DEFAULT);

return R::exec(" UPDATE `users` SET `user_job_number` =$user_job_number, `role_id` = $role_id ,`department_num` =$department_num, `name` = '$name', `password` = '$password', `phonenumber_number` = '$phonenumber_number',   `college_num` = $college_num , `email` = '$email' WHERE `users`.`id` =" .$id);

        } else {

          

             
                $hashed_password= password_hash($password, PASSWORD_BCRYPT);


            R::exec("INSERT INTO `users` ( `user_job_number`, `role_id`, `department_num`, `name`, `password`, `phonenumber_number`, `email`, `college_num`) VALUES ( $user_job_number, $role_id, $department_num, '$name', '$hashed_password', '$phonenumber_number', '$email',$college_num)");
        }
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


    
    public function get_user_id($email){
         $userdata = R::getAll("SELECT * FROM users where email='$email' ");
            $id = 0;
            foreach ($userdata as $elm) {
                $id = $elm['id'];
            }
            
            
            if($id>0){
                return $id;
            }else {
                return 0;
            }
    }
    
    
       public function get_user_role($email){
         $userdata = R::getAll("SELECT * FROM users where email='$email' ");
            $id = 0;
            foreach ($userdata as $elm) {
                $role_id = $elm['role_id'];
            }
            
            
            if($role_id>0){
                return $role_id;
            }else {
                return 0;
            }
    }
    
    
    
    
    
    
    
    public function login($email,$password ,$authorization) {


        if(strlen($authorization)==0) {
            $userdata = R::getAll("SELECT * FROM users where email='$email' ");
            $password_encrypted = "";
            foreach ($userdata as $elm) {
                $password_encrypted = $elm['password'];
            }


            if (count($userdata) > 0) {
                if (password_verify($password, $password_encrypted)) {
                    return true;
                }
            } else {
                return false;
            }

        } else {

            $userdata = R::getAll("SELECT * FROM users where `email`='$email'  and role_id=$authorization");
            $password_encrypted = "";
            foreach ($userdata as $elm) {
                $password_encrypted = $elm['password'];
            }

            if (count($userdata) > 0) {
                if (password_verify($password, $password_encrypted)) {
                    return true;
                }
            } else {
                return false;
            }

        }

    }

    //   echo $user->check_user_input(htmlspecialchars($_POST['email']),htmlspecialchars($_POST['user_job_number'])
//,htmlspecialchars($_POST['department_name']),htmlspecialchars($_POST['name']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['phonenumber_number']),htmlspecialchars($_POST['college_name']));


    public function check_user_input($email,$user_job_number,$dep_num,$name,$password,$phonenumber_number,$college_num){
        $name=htmlspecialchars($name);
        $name=trim($name);

        $user_job_num=(int)$user_job_number;

        $error_massage ="";
        if(!is_string($name)  & strlen($name)<3 || strlen($name)>12 ) {

            $error_massage.="اسم المستخدم يجب ان يكون كلمة وليس رقم "."\n";
        }


        if($college_num==0) {

            $error_massage   ="الرجاء اختيار  الكلية"."\n";
        }


        if($dep_num==0) {

 $error_massage   ="الرجاء اختيار   القسم"."\n";        }

        if(!is_numeric($user_job_num)){
            $error_massage.="ادخل رقمك الوظيفي   "."\n";
        } else if($user_job_num<=0){
            $error_massage.="ادخل رقمك الوظيفي   "."\n";
        }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_massage.= "البريد الالكتروني غير صحيح"."\n";
        } else if(count (R::getAll( "SELECT * FROM users where email='$email' "  ))==1 ) {
                $error_massage.=  "الايميل موجود بالفعل حاول ان تدخل ايميل اخر  ";
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


$us=new users();
//$us->Save(0,'xrtetxf@hotmail.com',15444,2,27,'amdf',503448951,'drdfevd');
//$id,$email,$user_job_number,$role_id,$department_name,$name,$password,$phonenumber_number,$college_name)

//$us->Save(0,'qqq@hotmail.com',84545,1,'fdghsdf','nmoia','123456','05487588','rgfhbsdf');

//$us->check();