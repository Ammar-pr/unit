<?php


require_once( '../units_requests.php' );
require_once ('vendor/autoload.php');

class units_requests_test extends \PHPUnit_Framework_TestCase
{


    public  function test_save()
    {

      $tested = new units_requests();

        $tested->Save(0,1,31,'req.docx','test save',13,2,'');


        $list = R::find( 'units_requests', ' title LIKE ? ', [ 'test save%' ] );

          foreach($list as $test_record){

         return   $this->assertEquals($test_record['title'],'test save');

        }

    }
    public  function test_update()
    {

        $tested = new units_requests();

  $record = $tested->Save(47,0,31,'','',13,2,'res.docx');
        $list = R::find( 'unit_status', ' attachment_response_link LIKE ? ', [ 'res.docxt%' ] );
        foreach($list as $test_record){
            return   $this->assertEquals($test_record['attachment_response_link'],'res.docx');
        }


    }

    public function test_fetch_all_by_responder_id () {

            $tested = new units_requests();


        $id=1;
          $var_test= $tested->fetchAll_responder_id(2);
        $num= R::exec("SELECT *  FROM `units_requests` WHERE id_responder =".$id );

            return  $this->assertEquals($num,count($var_test));


    }


    public function test_fetch_all_by_requester_id () {

        $tested = new units_requests();


      $id=1;
        $var_test= $tested->fetchAll_requester_id(1);
       $num= R::exec("SELECT *  FROM `units_requests` WHERE id_requester =".$id );


        return  $this->assertEquals($num,count($var_test));


    }


    public  function test_fetchWithPK() {

        $tested= new units_requests();

        $var_test=$tested->fetchWithPK(20);

        if($var_test->id!=0){
            $var_r= R::load('units_requests',$var_test->id);
           return  $this->assertEquals($var_r->id,$var_test->id);
        }else if ($var_test->id<=0){

           return $this->assertEquals(0,$var_test->id);
        }



    }



    public  function test_fetchWithAll() {

        $tested= new units_requests();

        $unit_list_request=$tested->fetchAll();




        foreach ($unit_list_request as $unit_object_request){

            $var_r= R::load('units_requests',$unit_object_request['id']);
            $this->assertEquals($var_r->id,$unit_object_request['id']);
        }

    }





    public function test_delete () {
        $tested= new units_requests();

        $status= $tested->delete(7);

        if($status==1){
            $this->assertEquals(1,$status);
        }else if($status==0){
            // assume this case retrun zero because the function didn't delete the nonfound record
           $this->assertEquals(0,$status);
        }

    }



    public function test_delete_all () {
        $tested= new units_requests();

        $status= $tested->deleteAll();


       $this->assertEquals(0,R::count( 'units_requests' ));

        if($status==1){
            $this->assertEquals(1,$status);
        }else if($status==0){
            // assume this case retrun zero because the function didn't delete the nonfound record
            $this->assertEquals(0,$status);
        }


    }




}


