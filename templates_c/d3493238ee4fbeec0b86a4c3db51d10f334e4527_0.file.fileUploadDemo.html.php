<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-01 06:33:06
  from "C:\xampp\htdocs\unit\templates\fileUploadDemo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59f9a2e20f3832_35948663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3493238ee4fbeec0b86a4c3db51d10f334e4527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\fileUploadDemo.html',
      1 => 1509519260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9a2e20f3832_35948663 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>jQuery File Upload Sample</title>
    <link type="text/css" rel="Stylesheet" href="jqwidgets/styles/jqx.base.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxfileupload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#jqxFileUpload').jqxFileUpload({
                theme: 'energyblue',
                width: 300,
                uploadUrl: '../fileUpload.php',
                fileInputName: 'fileToUpload'
            });

            $('#jqxButton').jqxButton({
                theme: 'energyblue',
                height: '30px'
            });

            $('#jqxButton').on('click', function () {
                $('#jqxFileUpload').jqxFileUpload('uploadFile', 0);
            }); });
    <?php echo '</script'; ?>
>
</head>
<body>
<div id="jqxFileUpload">


</div>
<input style="margin-top: 20px;" type="button" id="jqxButton" value="Upload a file" />

</body>
</html><?php }
}
