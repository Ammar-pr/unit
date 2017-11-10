<?php

// Connect to the database
// connection String
$mysqli = new mysqli('localhost', 'root', 'mVNeKCEG]b@W', 'dsr_amnatto');


ini_set('default_charset','UTF-8');
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}











// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT name,id  FROM unit_service_type LIMIT ?,?";

//$sSQL= 'SET CHARACTER SET utf8';

$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
//$result->set_charset("SET NAMES  utf8");
$mysqli->set_charset("utf8");
$result->execute();

/* bind result variables */
$result->bind_result($name, $id);
/* fetch values */
while ($result->fetch())
	{
	$orders[] = array(
		'name' => $name,
		'id' => $id,
	);
	}
echo json_encode($orders);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
//echo $_POST["list"];
?>