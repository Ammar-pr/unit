<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 31/10/17
 * Time: 03:08 ص
 */

#Include the connect.php file

// Connasdfect to the database
// connection String



    $mysqli = new mysqli('localhost', 'root', 'dwddwddwd', 'unit');
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
// get data and store in a json array
    $from = 0;
    $to = 4;
    $id=1;
    $query = "SELECT title ,request_date , attachment_request_link , id  FROM `units_requests`  where id_responder=".$id;


    $result = $mysqli->prepare($query);
//$result->bind_param('ii', $from, $to);
    $result->execute();
    /* bind result variables */
    $result->bind_result($title, $request_date, $attachment_request_link,$id);
    /* fetch values */
    while ($result->fetch()) {
        $orders[] = array(
            'title' => $title,
            'request_date' => $request_date,
            'attachment_request_link' => "<a href=$attachment_request_link> attachment request link</a>",
            'update' => "<a href=update.php?id=$id> update this </a>",
            'delete' =>  "<a href=delete.php?id=$id> delete  this </a>"
        );
    }
    echo json_encode($orders);
    /* close statement */
    $result->close();
    /* close connection */
    $mysqli->close();
