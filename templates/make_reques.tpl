<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>In this example is demonstrated how to populate the jqxDropDownList with data from MySQL Database. Each item in the list has label and value fields. The label is displayed to the user. When you click on the Submit button, the selected item's value will be displayed.</title> 
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
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
			{ name: 'City'},
			],
			url: 'dropdownlistdata.php',
			async: false
		};
		var dataAdapter = new $.jqx.dataAdapter(source);
			
		$("#dropdownlist").jqxDropDownList(
		{
			source: dataAdapter,
			
			width: 250,
			height: 25,
			selectedIndex: 0,
			displayMember: 'CompanyName',
			valueMember: 'ContactName'
		});        
        $('#sendButton').jqxButton({ width: 70});
	});
      

    </script>
</head>
<body class='default'>
   <form class="form" id="form" target="form-iframe"  method="post" action="dropdownlist.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
     <div name="list" id="dropdownlist"></div>
   	 <input style="margin-top: 10px;" type="submit" value="Submit" id="sendButton" />
   </form>
   <div>
     <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
   </div>
</body>
</html>