<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>

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

<script type="text/javascript">
    $(document).ready(function () {
        // Create Link Button.
        $("#jqxButton").jqxLinkButton({ width: '150', height: '25' });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#username, #password").addClass('jqx-input');
        if (theme != '') {
            $("#username, #password").addClass('jqx-input-' + theme);
        }
        // add validation rules.
        $('#form').jqxValidator({
            rules: [
                { input: '#username', message: 'Username is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#username', message: 'Your username must start with a letter!', action: 'keyup, blur', rule: 'startWithLetter' },
                { input: '#username', message: 'Your username must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=1,12' },
                { input: '#password', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#password', message: 'Your password must be between 4 and 12 characters!', action: 'keyup, blur', rule: 'length=1,12' }
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
</script>
<div style="height: 219px; display: block; font-size: 13px; font-family: Verdana;">
    <form class="form" id="form" target="form-iframe" method="post" action="login.php" style="width: 650px;">
        <div>
            <h2>Login Demo</h2>
        </div>
        <label>Username:</label>
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
