<?php 
  session_start();

  $val="";
 if (isset($_SESSION["user_id"])){

 
     $val=$_SESSION["user_id"];
 }

$mysqli = new mysqli('localhost', 'dsr_amnatto', 'mVNeKCEG]b@W', 'dsr_amnatto');
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
$from = 0;
$to = 30;
$query = "SELECT title, request_date, attachment_request_link ,attachment_response_link , response_date  , status_id FROM units_requests where id_requester =".$val;
$result = $mysqli->prepare($query);

$result->execute();
$result->bind_result($title, $request_date, $attachment_request_link,$attachment_response_link,$response_date,$status_id);
/* fetch values */
while ($result->fetch())
	{
	$orders[] = array(
		'title' => $title,
		'request_date' => $request_date,
		'attachment_request_link' => "<a href='".$attachment_request_link."'> attachment request link</a>",
            'attachment_response_link' => "<a href='".$attachment_response_link."'> response</a>",
            'response_date' => $response_date,
            'status_id'=>$status_id
            
	);
	}
echo json_encode($orders);
$result->close();
$mysqli->close();


?>
