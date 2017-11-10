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

    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdropdownlist.js"></script>


    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">




    <link rel="stylesheet" href="./css/styles.css" />

    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/dropdownlist.js"></script>

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


            <div name="list" id="dropdownlist"></div>

        <div>
            <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
        </div>

        <div class="prompt">*For successful registration, username=admin, password=admin123</div>
    </form>
    <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
</div>
</body>
</html>