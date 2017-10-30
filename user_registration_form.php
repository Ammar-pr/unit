<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="templates/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="templates/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxmaskedinput.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/scripts/demos.js"></script>

    <script type="text/javascript" src="templates/jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="templates/jqwidgets/jqwidgets/jqxnumberinput.js"></script>

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

        $('#sendButton').jqxButton({ width: 60, height: 25});

        $("#phoneInput").jqxMaskedInput({ mask: '(###)###-####', width: 150, height: 22});

        $("#numericInput").jqxNumberInput({ width: '250px', height: '25px', spinButtons: false, inputMode: 'simple', theme: theme });

       // $("#numericInput").jqxNumberInput({ width: '250px', height: '25px' });


    $('.text-input').addClass('jqx-input');
        $('.text-input').addClass('jqx-rc-all');
        if (theme.length > 0) {
            $('.text-input').addClass('jqx-input-' + theme);
            $('.text-input').addClass('jqx-widget-content-' + theme);
            $('.text-input').addClass('jqx-rc-all-' + theme);
        }
        var date = new Date();
        date.setFullYear(1985, 0, 1);
        // initialize validator.
        $('#form').jqxValidator({
            rules: [
                { input: '#userInput', message: 'name is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#userInput', message: 'Your username must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=3,12' },
                { input: '#college_Input', message: 'Your college name  must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=3,12' },
                { input: '#college_Input', message: 'Your department nameInput name  must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=3,12' },

//employee_number

                { input: '#passwordInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#passwordInput', message: 'Your password must be between 4 and 12 characters!', action: 'keyup, blur', rule: 'length=4,12' },
                { input: '#passwordConfirmInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#passwordConfirmInput', message: 'Passwords doesn\'t match!', action: 'keyup, focus', rule: function (input, commit) {
                    // call commit with false, when you are doing server validation and you want to display a validation error on this field.
                    if (input.val() === $('#passwordInput').val()) {
                        return true;
                    }
                    return false;
                }
                },
                { input: '#emailInput', message: 'E-mail is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#emailInput', message: 'Invalid e-mail!', action: 'keyup', rule: 'email' },

                { input: '#phoneInput', message: 'Invalid phone number!', action: 'valuechanged, blur', rule: 'phone' }
              ]
        });
        // validate form.
        $("#sendButton").click(function () {
            var validationResult = function (isValid) {
                if (isValid) {
                    $("#form").submit();
                }
            }
            $('#form').jqxValidator('validate', validationResult);
        });
        $("#form").on('validationSuccess', function () {
            $("#form-iframe").fadeIn('fast');
        });
    });
</script>
<div style="height: 219px;">
    <form class="form" id="form" target="form-iframe"  method="post" action="registration.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
        <div>
            <h2>Register</h2>
        </div>
        <table class="register-table">
            <tr>
                <td>Username:</td>
                <td><input name="name" type="text" id="userInput" class="text-input" /></td>
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
                <td>E-mail:</td>
                <td><input name="email" type="text" id="emailInput" class="text-input" /></td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td><div name="phonenumber_number" id="phoneInput" ></div></td>
            </tr>


            <tr>
                <td>college name:</td>
                <td><input name="college_name" type="text" id="college_Input" class="text-input" /></td>
            </tr>

            <tr>
                <td>department name:</td>
                <td><input name="department_name" type="text" id="department_nameInput" class="text-input" /></td>
            </tr>
            <tr> <td> num  </td>
                <td>
                    <div name="user_job_number" id='numericInput'>
                    </div> </td>


</tr>



            <tr>
                <td colspan="2" style="text-align: center;"><input type="button" value="Send" id="sendButton" /></td>
            </tr>
        </table>
    </form>
    <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
</div>
</body>
</html>
