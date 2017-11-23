<?php
/* Smarty version 3.1.30, created on 2017-11-23 03:48:47
  from "C:\xampp\htdocs\unit\templates\del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a168b6f9fad28_29743046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b662719bc6ca4c97edae5e48e6aea5038909aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\del.tpl',
      1 => 1511426648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a168b6f9fad28_29743046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '264615a168b6f942d05_06264109';
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
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <!-- add the jQWidgets framework -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <!-- add one or more widgets -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
</head>
<body>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("#myButton").jqxButton(
       { width: '120px', height: '35px', theme: 'darkblue' });
       
       
            $("#jqxButton").jqxLinkButton({ width: '120', height: '35px' , theme: 'HighContrast'});
    });
 <?php echo '</script'; ?>
>
    <h2>please confirm deleting  your id is <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h2>
            <form class="form" id="form" target="_parent"  method="post" action="../htdocs/deleting.php" style="font-size: 13px; font-family: Verdana; width: 650px;">

         <a style='margin-left: 25px;' target="_blank" href="../htdocs/index.php" id='jqxButton'>go  back </a>      
         <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 > 

    <input type="submit" name="submit" value="delete" id='myButton' >

            </form>

</body>
</html><?php }
}
