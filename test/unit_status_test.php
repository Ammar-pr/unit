<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 23/10/17
 * Time: 09:56 ص
 */


require_once( '../unit_status.php' );
require_once ('vendor/autoload.php');

class unit_status_test extends \PHPUnit_Framework_TestCase
{


    public  function test_save() {

        $tested= new unit_status();

        $tested->Save(0,'test','test dis');


        $list = R::find( 'unit_status', ' status_name LIKE ? ', [ 'test%' ] );
          foreach($list as $test_record){
             echo $test_record['status_name'];
            return   $this->assertEquals($test_record['status_name'],'test');
          }
        }


    public  function test_update() {

        $tested= new unit_status();

       $record= $tested->Save(9,'test update','update');


        if(count($record)==1){
            echo $record;
            return  $this->assertEquals(1,count($record));
        }else if(count($record)==0)
      return   $this->assertEquals(0,count($record));
    }




    public  function test_fetchWithPK() {

        $tested= new unit_status();

        $var_test=$tested->fetchWithPK(20);
        if($var_test->id!=0){
            $var_r= R::load('unit_status',$var_test->id);
              return  $this->assertEquals($var_r->id,$var_test->id);
        }else if ($var_test->id<=0){

              return $this->assertEquals(0,$var_test->id);
        }



    }



    public  function test_fetchWithAll() {

        $tested= new unit_status();

        $unit_list=$tested->fetchAll();




        foreach ($unit_list as $unit_object){

            $var_r= R::load('unit_status',$unit_object['id']);
            $this->assertEquals($var_r->id,$unit_object['id']);
        }

    }






    public function test_delete () {
        $tested= new unit_status();

       $status= $tested->delete(7);

     if($status==1){
        $this->assertEquals(1,$status);
         }else if($status==0){
         $this->assertEquals(0,$status);
     }

    }



    public function test_delete_all () {
        $tested= new unit_status();

        $tested->deleteAll();


        $this->assertEquals(0,R::count( 'unit_status' ));

    }






}

$u= new unit_status_test();
$u->test_update();

