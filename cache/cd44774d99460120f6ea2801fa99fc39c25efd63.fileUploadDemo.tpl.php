<?php
/* Smarty version 3.1.30, created on 2017-11-15 23:52:46
  from "C:\xampp\htdocs\unit\templates\fileUploadDemo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d199e59fe99_47907505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c5db7fa3b745fd3fb35d5158ef5ae5732cf8958' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\fileUploadDemo.tpl',
      1 => 1510807848,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a0d199e59fe99_47907505 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id="Description">jqxFileUpload with php example.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />		
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

        <link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#jqxFileUpload').jqxFileUpload({
                width: 300,
                accept: 'doc/*',
                uploadUrl: '../htdocs/fileUpload.php',
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



    </script>
</head>
<body>
<div id="jqxFileUpload">

</div>
<br />
</body>
</html>
<?php }
}
