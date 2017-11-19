<?php
$mysqli = new mysqli('localhost', 'dsr_amnatto', 'mVNeKCEG]b@W', 'dsr_amnatto');
$mysqli->set_charset("utf8");
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
$from = 0;
$to = 30;

$query = "SELECT name,id FROM unit_service_type LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
$result->bind_result($name,$id);
while ($result->fetch())
	{
	$orders[] = array(
		'name' => $name,
		'id' => $id
	);
	}
echo json_encode($orders);
$result->close();
$mysqli->close();

?>
