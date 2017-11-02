<?php
session_start();

/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 31/10/17
 * Time: 03:08 ص
 */

#Include the connect.php file

// Connasdfect to the database
// connection String


if(isset($_SESSION["username"]) & isset($_SESSION["password"]) & isset($_SESSION["authorization"]) ) {
  if($_SESSION["authorization"]==22){
    $mysqli = new mysqli('localhost', 'root', 'dwddwddwd', 'unit');
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
// get data and store in a json array

    $id = 1;
    $query = "SELECT title ,request_date , attachment_request_link , id  FROM `units_requests`   where id_responder IS NOT NULL";


    $result = $mysqli->prepare($query);
    $result->execute();
    $result->bind_result($title, $request_date, $attachment_request_link, $id);
    /* fetch values */
    while ($result->fetch()) {
        $orders[] = array(
            'title' => $title,
            'request_date' => $request_date,
            'attachment_request_link' => "<a href=$attachment_request_link> attachment request link</a>",
            'update' => "<a href=../update.php?id=$id> update this </a>",
            'delete' => "<a href=../deleting.php?id=$id> delete  this </a>",
            'reply'=>"<a href=../file_Upload.php?id=$id> reply  this </a>",
// file_Upload
        );
    }
    echo json_encode($orders);
    $result->close();
    $mysqli->close();
      }}else {

    echo "dont have access to this page ....";
}