<?php 
 $mysqli = new mysqli('localhost', 'dsr_amnatto', 'mVNeKCEG]b@W', 'dsr_amnatto');
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
$from = 0;
$to = 30;
$query = "SELECT title, request_date, attachment_request_link ,attachment_response_link, id FROM units_requests where id_responder IS NOT NULL";
$result = $mysqli->prepare($query);

$result->execute();
$result->bind_result($title, $request_date, $attachment_request_link,$attachment_response_link,$id);
/* fetch values */
while ($result->fetch())
	
    {
        $attachment=  "<a href='".$attachment_response_link."'> attachment response</a>";

    if(strlen($attachment_response_link)==0){
     $attachment="emtpy";
    }
	$orders[] = array(
		'title' => $title,
		'request_date' => $request_date,
		'attachment_request_link' => "<a href='".$attachment_request_link."'> attachment request link</a>",
            'attachment_response_link' => $attachment,
            'id'=>"<a href=../htdocs/file_Upload.php?id=".$id."> reply  this </a>",
             'delete' => "<a href=../htdocs/deleting.php?id=".$id."> delete  this </a>"
            
	);
	}
echo json_encode($orders);
$result->close();
$mysqli->close();


?>
