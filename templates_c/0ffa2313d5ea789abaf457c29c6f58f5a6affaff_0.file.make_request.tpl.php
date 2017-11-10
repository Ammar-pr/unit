<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-09 18:57:05
  from "C:\xampp\htdocs\unit\templates\make_request.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_5a04eb517fa648_40568033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ffa2313d5ea789abaf457c29c6f58f5a6affaff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\make_request.tpl',
      1 => 1510271821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04eb517fa648_40568033 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxvalidator.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcheckbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/globalization/globalize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcalendar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxdatetimeinput.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxmaskedinput.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/demos.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="./css/styles.css" />

    <?php echo '<script'; ?>
 type="text/javascript" src="js/validation.js"><?php echo '</script'; ?>
>


</head>
<body>
<div style="height: 219px;">
    <form class="form" id="form" target="form-iframe"  method="post" action="registration.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
        <div>
            <h2>Register</h2>
        </div>
        <table class="register-table">



            <tr>
                <td>title:</td>
                <td><input name="realname" type="text" id="realNameInput" class="text-input" /></td>
            </tr>

            <tr>
                <td>unit name :</td>
                <td><input name="realname" type="text" id="realNameInput" class="text-input" /></td>
            </tr>

            <tr>
                <td>attachment  </td>
                <td><input name="realname" type="text" id="realNameInput" class="text-input" /></td>
            </tr>


            <tr>
                <td colspan="2" style="padding: 5px;"><div name="acceptterms" id="acceptInput" style="margin-left: 50px;">I accept terms</div></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="button" value="Send" id="sendButton" /></td>
            </tr>
        </table>
        <div class="prompt">*For successful registration, username=admin, password=admin123</div>
    </form>
    <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
</div>
</body>
</html><?php }
}
