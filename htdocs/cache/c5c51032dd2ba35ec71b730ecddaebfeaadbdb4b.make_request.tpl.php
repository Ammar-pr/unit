<?php
/* Smarty version 3.1.30, created on 2017-11-12 05:22:56
  from "C:\xampp\htdocs\unit\templates\make_request.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0821004b7e13_79398533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb03fb1ba564bdc965954f908aede5d43415c4d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\make_request.tpl',
      1 => 1510482168,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a0821004b7e13_79398533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>


    <title id='Description'>In this example is demonstrated how to populate the jqxDropDownList with data from MySQL Database. Each item in the list has label and value fields. The label is displayed to the user. When you click on the Submit button, the selected item's value will be displayed.</title> 
    <link rel="stylesheet" href="..scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>	

  <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script> 
	
    <script type="text/javascript">
    
	 <script type="text/javascript">
     
            $(document).ready(function () {
		
		var source =
		{
			datatype : "json",
			datafields: [
			{ name: 'CompanyName'},
			{ name: 'ContactName'},
			{ name: 'ContactTitle'},
			{ name: 'Address'},
			{ name: 'City'},
			],
			url: '../scripts/dropdownlistdata.php',
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
</html><?php }
}
