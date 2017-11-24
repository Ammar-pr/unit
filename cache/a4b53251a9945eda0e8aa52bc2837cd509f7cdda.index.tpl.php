<?php
/* Smarty version 3.1.30, created on 2017-11-24 08:50:53
  from "C:\xampp\htdocs\unit\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1823bd6df241_98843323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb607665b92a19d3593f2e9a82daad8d38e1707f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\index.tpl',
      1 => 1510555974,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a1823bd6df241_98843323 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="templates/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxmaskedinput.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script>

    <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxnumberinput.js"></script>

    <style type="text/css">
        .demo-iframe {
            border: none;
            width: 600px;
            height: 400px;
            clear: both;
            display: none;
        }
        .text-input
        {
            height: 23px;
            width: 150px;
        }
        .register-table
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .register-table td,
        .register-table tr
        {
            border-spacing: 0px;
            border-collapse: collapse;
            font-family: Verdana;
            font-size: 12px;
        }
        h3
        {
            display: inline-block;
            margin: 0px;
        }
        .prompt {
            margin-top: 10px; font-size: 10px;
        }
    </style>
</head>
<body>
<script type="text/javascript">
    $(document).ready(function () {

        // $("#numericInput").jqxNumberInput({ width: '250px', height: '25px' });


        $('.text-input').addClass('jqx-input');
        $('.text-input').addClass('jqx-rc-all');
        if (theme.length > 0) {
            $('.text-input').addClass('jqx-input-' + theme);
            $('.text-input').addClass('jqx-widget-content-' + theme);
            $('.text-input').addClass('jqx-rc-all-' + theme);
        }


    });
</script>
<div style="height: 219px;">
    <form class="form" id="form" target="form-iframe"  method="post" action="registration.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
        <div>
            <h2>index main page </h2>
        </div>
        <table class="register-table">
            <tr>
                <td><a href="user_registration_form.php">registration</a>
            </tr>
            <tr>
                <td><a href="./login.php">login</a>
            </tr>





        </table>
    </form>
    <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
</div>
</body>
</html>

<?php }
}
