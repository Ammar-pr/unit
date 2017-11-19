<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 21/10/17
 * Time: 09:18 م
 */
require_once ('../scripts/RedBeanPHP/rb.php');
class units_requests
{
    public function __construct()
    {
        if( !R::testConnection()) {
            R::setup('mysql:host=localhost;dbname=dsr_amnatto',
                'dsr_amnatto', 'mVNeKCEG]b@W');


        }
    }
    public function SaveRequest($id,$id_requester, $status_id,$attachment_request_link,$title,$unit_id,$id_responder,$attachment_response_link)
    {
        if(strlen($attachment_request_link)>0){
            $md5file = md5_file($attachment_request_link);
        }else if(strlen($attachment_response_link)>0){
            $md5file = md5_file($attachment_response_link);
        }

        if ($id > 0) {
            R::exec("UPDATE `units_requests` SET `id_responder` = $id_responder, `response_date` = Now(), `attachment_response_link` = '$attachment_response_link', `file_hash_response` = '$md5file' WHERE `units_requests`.`id` =".$id );
        } else {
            if(count (R::getAll( "SELECT * FROM units_requests where title='$title' "  ))==1 ){
                echo "عنوان الطلب متكرر بالرجاء كتابة عنوان اخر";
                return false ;
            }  else {
                            R::exec("INSERT INTO `units_requests` ( `id_requester`, `request_date`, `status_id`, `unit_id`, `attachment_request_link` , `title` , `file_hash_request`, `id_responder`) VALUES ( $id_requester,  Now(),$status_id , $unit_id, '$attachment_request_link', '$title','$md5file',$id_responder)");
                            echo "تم تسجيل طلبك بنجاح";
                            return true;
            }
            
        }
    }

    public  function reply_request($id,$attachment_response_link,$request_status_id) {
        if ($id > 0) {

        $path=$attachment_response_link;
            $md5file = md5_file($path);
            return R::exec("UPDATE `units_requests` SET  `response_date` = Now(), `attachment_response_link` = '$attachment_response_link',`status_id`=33 ,`file_hash_response` = '$md5file' WHERE `units_requests`.`id` =".$id );

        }else {
            echo "id is zero , cannot update with id like this , no request number ! .....";
        }

    }


    public function fetchWithPK($id)
    {
        if ($id > 0) {
            return R::load('units_requests',$id);
        }else {
            echo "the id is empty";
        }
    }
    public function fetchAll()
    {
        return R::getAll( 'SELECT * FROM units_requests' );
    }
    public function fetchAll_requester_id($id_requester)
    {
        return R::getAll( 'SELECT * FROM units_requests WHERE id_requester ='.$id_requester  );
    }
    public function fetchAll_responder_id($id_responder)
    {
        return R::getAll( 'SELECT * FROM units_requests WHERE id_responder ='.$id_responder  );
}



    public function delete($id)
    {
        if ($id > 0) {
            return R::exec("DELETE FROM `units_requests` WHERE id =".$id );
        }
    }
    public function deleteAll()
    {
        return R::exec("DELETE FROM `units_requests` ");
    }
}
