<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxmaskedinput.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>

    <script type="scripts/thumbnails.js" type="text/javascript" ></script>
    <link rel="stylesheet" href="css/default.css" />

</head>
<body>
<div style="height: 219px;">
    <form class="form" id="form" target="form-iframe"  method="post" action="registration.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
        <div>
            <h2>Register</h2>
        </div>
        <table class="register-table">
            <tr>
                <td>Username:</td>
                <td><input name="username" type="text" id="userInput" class="text-input" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input name="password" type="password" id="passwordInput" class="text-input" /></td>
            </tr>
            <tr>
                <td>Confirm password:</td>
                <td><input type="password" id="passwordConfirmInput" class="text-input" /></td>
            </tr>
            <tr>
                <td>Real name:</td>
                <td><input name="realname" type="text" id="realNameInput" class="text-input" /></td>
            </tr>
            <tr>
                <td>Birth date:</td>
                <td><div name="birthdate" id="birthInput"></div></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email" type="text" id="emailInput" class="text-input" /></td>
            </tr>
            <tr>
                <td>SSN:</td>
                <td><div name="ssn" id="ssnInput"></div></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><div name="phone" id="phoneInput"></div></td>
            </tr>
            <tr>
                <td>Zip code:</td>
                <td><div name="zip" id="zipInput"></div></td>
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
</html>