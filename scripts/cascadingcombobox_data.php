<?php

// Connect to the database
// connection String
$mysqli = new mysqli('localhost', 'dsr_amnatto', 'mVNeKCEG]b@W', 'dsr_amnatto');
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
if (isset($_GET['id']))
	{
	// get data and store in a json array
	$query = "SELECT  department_name FROM colleges_departments where college_id=?";
	$result = $mysqli->prepare($query);
	$result->bind_param('s', $_GET['id']);
	$result->execute();
	/* bind result variables */
	$result->bind_result($department_name);
	/* fetch values */
	while ($result->fetch())
		{
		$orders[] = array(
			
			'department_name' => $department_name
		
		);
		}
	echo json_encode($orders);
	/* close statement */
	$result->close();
	return;
	}
// get data and store in a json array
$query = "SELECT id from  colleges";
$result = $mysqli->prepare($query);
$result->execute();
/* bind result variables */
$result->bind_result($id);
/* fetch values */
while ($result->fetch())
	{
	$customers[] = array(
		'id' => $id
                
	);
	}
echo json_encode($customers);
$result->close();
/* close connection */
$mysqli->close();
?>