<?php
/* Smarty version 3.1.30, created on 2017-11-23 02:17:04
  from "C:\xampp\htdocs\unit\templates\del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1675f0594bd5_39610699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b662719bc6ca4c97edae5e48e6aea5038909aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\del.tpl',
      1 => 1511421407,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a1675f0594bd5_39610699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Getting Started</title>
    <!-- add one of the jQWidgets styles -->
    <link rel="stylesheet" 
    href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" 
    href="../scripts/jqwidgets/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
    <!-- add the jQuery script -->
    <script type="text/javascript" src="../scripts/scripts/jquery-1.11.1.min.js"></script>
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <!-- add one or more widgets -->
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
</head>
<body>
  <script type="text/javascript">
    $(document).ready(function () {
        $("#myButton").jqxButton(
       { width: '120px', height: '35px', theme: 'darkblue' });
       
       
    });
 </script>
    <h2>please confirm deleting </h2>
            <form class="form" id="form" target="_parent"  method="post" action="../htdocs/delete.php" style="font-size: 13px; font-family: Verdana; width: 650px;">

       <inpt type="hidden" value="1111" name="id">
    <input type="submit" value="delete" id='myButton' >

            </form>

</body>
</html><?php }
}
