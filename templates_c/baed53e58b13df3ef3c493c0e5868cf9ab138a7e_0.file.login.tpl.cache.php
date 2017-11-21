<?php
/* Smarty version 3.1.30, created on 2017-11-21 05:42:49
  from "C:\xampp\htdocs\unit\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a140329235845_81030616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baed53e58b13df3ef3c493c0e5868cf9ab138a7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\login.tpl',
      1 => 1510571431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a140329235845_81030616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '238885a1403290a3082_51959375';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcheckbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxvalidator.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>

    <style type="text/css">
        .demo-iframe {
            border: none;
            width: 600px;
            height: 200px;
            clear: both;
            display: none;
        }
        .form #password, .form #username {
            height: 24px;
            margin-top: 5px;
            width: 150px;
        }
        .form #rememberme {
            margin-top: 5px;
            margin-bottom: 8px;
        }
        .prompt {
            margin-top: 10px; font-size: 10px;
        }
    </style>
</head>
<body>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        // Create Link Button.
        $("#jqxButton").jqxLinkButton({ width: '150', height: '25' });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        $("#username, #password").addClass('jqx-input');
        if (theme != '') {
            $("#username, #password").addClass('jqx-input-' + theme);
        }
        // add validation rules.
        $('#form').jqxValidator({
            rules: [
                { input: '#username', message: 'Username is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#username', message: 'Your email must start with a letter!', action: 'keyup, blur', rule: 'startWithLetter' },
                { input: '#username', message: 'Your email  must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=1,20' },
                { input: '#password', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#password', message: 'Your password must be between 4 and 12 characters!', action: 'keyup, blur', rule: 'length=1,20' }
            ]

        });
        // validate form.
        $("#loginButton").click(function () {
            $('#form').jqxValidator('validate');
        });
        $("#form").on('validationSuccess', function () {
            $("#form-iframe").fadeIn('fast');
        });
    });
<?php echo '</script'; ?>
>
<div style="height: 219px; display: block; font-size: 13px; font-family: Verdana;">
    <form class="form" id="form" target="_self" method="post" action="login.php" style="width: 650px;">
        <div>
            <h2>Login Demo</h2>
        </div>
        <label>email:</label>
        <div>
            <input type="text" id="username" name="username" />
        </div>
        <label>Password:</label>
        <div>
            <input type="password" id="password" name="password" />
        </div>

        <div>
            <input id="loginButton" type="submit" value="Login" /><br><br>
        </div>

        <div>
            <a style='margin-left: 25px;' target="_blank" href="index.php" id='jqxButton'>go to main page</a>

        </div>


    </form>

</div>
</body>
<?php }
}