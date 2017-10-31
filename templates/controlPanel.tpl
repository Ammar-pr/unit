<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>In this example is demonstrated how to bind jqxGrid to MySQL Database.</title>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {


            var source =
                {
                    datatype: "json",
                    datafields: [
                        { name: 'CompanyName'},
                        { name: 'ContactName'},
                        { name: 'ContactTitle'},
                        { name: 'Address'},
                        { name: 'City'}
                    ],
                    url: 'grid_data.php',
                    cache: false
                };
            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
                {
                    source: source,

                    columns: [
                        { text: 'Company Name', datafield: 'CompanyName', width: 250},
                        { text: 'ContactName', datafield: 'ContactName', width: 150 },
                        { text: 'Contact Title', datafield: 'ContactTitle', width: 180 },
                        { text: 'Address', datafield: 'Address', width: 200 },
                        { text: 'City', datafield: 'City', width: 120 }
                    ]
                });
        });
    </script>
</head>
<body class='default'>
<div id="jqxgrid"></div>
</body>
</html>
<!--grid_data.php
	#Include the connect.php file
	include ('connect.php');
// Connect to the database
// connection String
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT CompanyName, ContactName, ContactTitle, Address, City FROM customers LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($CompanyName, $ContactName, $ContactTitle, $Address, $City);
/* fetch values */
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
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
-->
