<?php 
  session_start();
  $val="";
 if (isset($_SESSION["username"])){

     $val=16;
 }

$mysqli = new mysqli('localhost', 'dsr_amnatto', 'mVNeKCEG]b@W', 'dsr_amnatto');
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
$from = 0;
$to = 30;
$query = "SELECT title, request_date, attachment_request_link , id FROM units_requests where id_requester =".$val;
$result = $mysqli->prepare($query);

$result->execute();
$result->bind_result($title, $request_date, $attachment_request_link,$id);
/* fetch values */
while ($result->fetch())
	{
	$orders[] = array(
		'title' => $title,
		'request_date' => $request_date,
		'attachment_request_link' => "<a href=".$attachment_request_link."> attachment request link</a>",
            'attachment_request_link' => "<a href=".$attachment_request_link."> response</a>",
            'id'=>"<a href=../htdocs/file_Upload.php?id=".$id."> reply  this </a>",
             'delete' => "<a href=../htdocs/deleting.php?id=".$id."> delete  this </a>"
            
	);
	}
echo json_encode($orders);
$result->close();
$mysqli->close();


?>
