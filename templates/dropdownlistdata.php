<?php 

if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
$from = 0;
$to = 30;
$query = "SELECT CompanyName, ContactName, ContactTitle, Address, City FROM customers LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
$result->bind_result($CompanyName, $ContactName, $ContactTitle, $Address, $City);
while ($result->fetch())
	{
	$orders[] = array(
		'CompanyName' => $CompanyName,
		'ContactName' => $ContactName,
		'ContactTitle' => $ContactTitle,
		'Address' => $Address,
		'City' => $City
	);
	}
echo json_encode($orders);
$result->close();
$mysqli->close();


















?>