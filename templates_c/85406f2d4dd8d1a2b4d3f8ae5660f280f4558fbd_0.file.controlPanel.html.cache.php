<?php
/* Smarty version 3.1.30, created on 2017-11-15 20:02:03
  from "C:\xampp\htdocs\unit\templates\controlPanel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ce38b8c0304_06870625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85406f2d4dd8d1a2b4d3f8ae5660f280f4558fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\controlPanel.html',
      1 => 1510790251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0ce38b8c0304_06870625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '201865a0ce38b7dec98_86724374';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<title id='Description'>In this example is demonstrated how to bind jqxGrid to MySQL Database.</title>
<link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxscrollbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxmenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.selection.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.filter.js"><?php echo '</script'; ?>
>		
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdropdownlist.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {
	   
         
		var source =
		{
			datatype: "json",
			datafields: [
				{ name: 'title'},
				{ name: 'request_date'},
				{ name: 'attachment_request_link'},
                                { name: 'id'},
                                { name: 'delete'}
			],
			url: '../htdocs/grid_data.php',
			cache: false
		};
		var dataAdapter = new $.jqx.dataAdapter(source);
			
		$("#jqxgrid").jqxGrid(
		{
		source: source,
		
		columns: [
			{ text: 'title', datafield: 'title', width: 250},
			{ text: 'request_date', datafield: 'request_date', width: 150 },
			{ text: 'attachment_request_link', datafield: 'attachment_request_link', width: 180 },
                        { text: 'id', datafield: 'id', width: 180 },
                        { text: 'delete', datafield: 'delete', width: 180 }
		]
		});        
	});
<?php echo '</script'; ?>
>
</head>
	<body class='default'>
		<div id="jqxgrid"></div>
	</body>
</html>
<?php }
}
