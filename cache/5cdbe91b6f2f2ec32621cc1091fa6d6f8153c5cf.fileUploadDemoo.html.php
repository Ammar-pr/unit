<?php
/* Smarty version 3.1.30, created on 2017-11-22 13:24:07
  from "C:\xampp\htdocs\unit\templates\fileUploadDemoo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a15c0c78cd437_26375667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ee3b08d015be40845875521cb9209afdadf2b1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\fileUploadDemoo.html',
      1 => 1511375043,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a15c0c78cd437_26375667 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title id="Description">jqxFileUpload with php example.</title>
    <link type="text/css" rel="Stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxfileupload.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#jqxFileUpload').jqxFileUpload({
                width: 300,
                accept: 'docx/*',
                uploadUrl: 'fileUpload.php',
                fileInputName: 'fileToUpload'
            });
            $('#jqxFileUpload').on('uploadEnd', function (event) {
                var args = event.args;
                var fileName = args.file;
                var serverResponse = args.response;
                // Your code here.
                console.log(args);
                console.log(fileName);
                console.log(serverResponse);
                alert(serverResponse);
            });
        });
    </script>
</head>
<body>     
    <div >
        <h2>الرجاء رفع ملف لرد على الطلب</h2>
    </div>
    <div id="jqxFileUpload">
    </div>
    <br />
</body>
</html>
<?php }
}
