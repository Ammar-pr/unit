<?php

require_once( '../users.php' );
require_once ('vendor/autoload.php');

class users_test extends \PHPUnit_Framework_TestCase
{


    public  function test_save() {

        $tested= new users();

        $tested->Save(0,'gfhgsdf@hotmail.com',134,2,27,'amdf',503448871,'drdfevd','colloge test');
        $list = R::find( 'users', ' email LIKE ? ', [ 'xxf@hotmail.com%' ] );
        //echo $authors->status_name;
        foreach($list as $test_record){

            return   $this->assertEquals($test_record['email'],'xxf@hotmail.com');
        }


    }
    public  function test_update() {

        $tested= new users();

        $record= $tested->Save(4,'test@hotmail.com',134,2,27,'amdf',503448651,'drdfevd');

        if(count($record)==1){
            $this->assertEquals(1,count($record));
        }else if(count($record)==0)

           $this->assertEquals(0,count($record));
    }


    public function test_login () {
        $tested= new users();
        $status =$tested->login('eef@hotmail.com','ffffff');
        if($status==true){
            return  $this->assertEquals(true,$status);
        }else if($status==false){
            return  $this->assertEquals(false,$status);

        }
    }




    public  function test_fetchWithPK() {

        $tested= new users();
        $var_test=$tested->fetchWithPK(20);
        if($var_test->id!=0){
            $var_r= R::load('users',$var_test->id);
            return  $this->assertEquals($var_r->id,$var_test->id);
        }else if ($var_test->id<=0){

            return $this->assertEquals(0,$var_test->id);
        }

    }


    public  function test_fetch_All() {

        $tested= new users();

        $users_list=$tested->fetchAll();


        foreach ($users_list as $user){

            $var_r= R::load('users',$user['id']);
            $this->assertEquals($var_r->id,$user['id']);
        }

    }





    public function test_delete () {
        $tested= new users();

        $status= $tested->delete(2);

        if($status==1){
            $this->assertEquals(1,$status);
        }else if($status==0){
            $this->assertEquals(0,$status);
        }

    }



    public function test_delete_all () {
        $tested= new users();

        $tested->deleteAll();


        $this->assertEquals(0,R::count( 'users' ));

    }




}

$u=new  users_test();
$u->test_update();
