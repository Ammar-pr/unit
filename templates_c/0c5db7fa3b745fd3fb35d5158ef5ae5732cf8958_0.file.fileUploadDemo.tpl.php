<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-01 20:12:56
  from "C:\xampp\htdocs\unit\templates\fileUploadDemo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59fa6308452c66_12908270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c5db7fa3b745fd3fb35d5158ef5ae5732cf8958' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\fileUploadDemo.tpl',
      1 => 1509581532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa6308452c66_12908270 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id="Description">jqxFileUpload with php example.</title>
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
                width: 300,
                accept: 'doc/*',
                uploadUrl: './fileUpload.php',
                fileInputName: 'fileToUpload',
            });
            $('#jqxFileUpload').on('uploadEnd', function (event) {
                var args = event.args;
                var fileName = args.file;
                var serverResponse = args.response;
                // Your code here.
                console.log(args);
                console.log(fileName);
                console.log(serverResponse);
            });



        });



    <?php echo '</script'; ?>
>
</head>
<body>
<div id="jqxFileUpload">

</div>
<br />
</body>
</html>
<?php }
}
