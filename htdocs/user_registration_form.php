<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxvalidator.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxmaskedinput.js"></script>
    
   


    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxnumberinput.js"></script>
    
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script>
        <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>	

    
     <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"></script>
     <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcombobox.js"></script>

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
        
        
                        var source = [
                    "Which phone number do you remember most from your childhood?",
                    "What was your favorite place to visit as a child?",
                    "In what city were you born?",
                    "What high school did you attend?",
                    "What is the name of your first school?",
                    "What is your mother's maiden name?",
                    "What street did you grow up on?",
                    "What was the make of your first car?",
                    "What is your father's middle name?",
                    "What is the name of your first grade teacher?",
                    "Which is your favorite web browser?"
                
		        ];
                // Create a jqxDropDownList
                $("#jqxWidgetList_question_list").jqxDropDownList({
                    source: source
                    ,
                    promptText: "Please Select secret question...",
                   displayMember: 'source',
                   valueMember: 'source',
                     width: '200',
                    height: '25'});

        
        
        
        
        
        
        
        
        
        
        
        
        
        
                		var collegeSource =
		{
			datatype: "json",
			datafields: [
				{ name: 'name'},
				{ name: 'id'}
			],
			url: '../scripts/cascadingcombobox_data.php',
			cache: false,
            async: false
		};
		var customersAdapter = new $.jqx.dataAdapter(collegeSource);
		$("#colleges").jqxDropDownList(
		{
			source: customersAdapter,
			
			width: 200,
			height: 25,
			promptText: "Select college...",
			displayMember: 'name',
			valueMember: 'id'
		});    
		var ordersSource =
		{
			datatype: "json",
			datafields: [
				{ name: 'id_col_dep'},
                                { name: 'department_name'}
                                
				
				
			],
			url: '../scripts/cascadingcombobox_data.php',
			cache: false,
			async: false
		};
		var ordersAdapter = new $.jqx.dataAdapter(ordersSource);
		
		$("#deps").jqxDropDownList(
		{
			
			width: 200,
			height: 25,
			disabled: true,
			promptText: "Select department name...",
			displayMember: 'department_name',
			valueMember: 'id_col_dep',
			autoDropDownHeight: true
		});   
		
		$("#colleges").bind('select', function(event)
		{
			if (event.args)
			{
				$("#deps").jqxDropDownList({ disabled: false, selectedIndex: -1});		
				var value = event.args.item.value;
				ordersSource.data = {id: value};
				ordersAdapter = new $.jqx.dataAdapter(ordersSource);
				$("#deps").jqxDropDownList({source: ordersAdapter});
			}
		});   
        $('#sendButton').jqxButton({ width: 60, height: 25});
        $("#phoneInput").jqxMaskedInput({ mask: '(###)###-####', width: 150, height: 22});
  $("#numericInput").jqxMaskedInput({ width: '250px', height: '25px'});
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
                { input: '#userInput', message: 'Your name must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=3,12' },
              
                            { input: '#secret_answer', message: 'secret answer is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#secret_answer', message: 'Your secret answer must be between 3 and 40 characters!', action: 'keyup, blur', rule: 'length=3,40' },

            { input: '#passwordInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#passwordInput', message: 'Your password must be between 4 and 12 characters!', action: 'keyup, blur', rule: 'length=4,12' },
                { input: '#passwordConfirmInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#passwordConfirmInput', message: 'Passwords doesn\'t match!', action: 'keyup, focus', rule: function (input, commit) {
                    // call commit with false, when you are doing server validation and you want to display a validation error on this field.
                    if (input.val() === $('#passwordInput').val()) {
                        
                      
                        return true;
                    }else {  return false;}
                    
                }
                },
                { input: '#emailInput', message: 'E-mail is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#captcha', message: 'Captcah is required!', action: 'keyup, blur', rule: 'required' },
       
                { input: '#emailInput', message: 'Invalid e-mail!', action: 'keyup', rule: 'email' },
         { input: '#deps', message: 'You must select a deparment name ', action: 'change', rule: function () {
                    var selectedIndexSection = $('#deps').text();
                
              
                    if (selectedIndexSection == "Select department name...") {
                     
                       return false ;
                    }else {
                        return true ;
                    } 
                }},
            
            
              { input: '#jqxWidgetList_question_list', message: 'You must select a secret question ', action: 'change', rule: function () {
                    var selectedIndexSection = $('#jqxWidgetList_question_list').text();
                
              
                    if (selectedIndexSection == "Please Select secret question...") {
                     
                       return false ;
                    }else {
                        return true ;
                    } 
                }},
          
               { input: '#colleges', message: 'You must select a colleges', action: 'change', rule: function () {
                    var selectedIndexSection = $('#colleges').text();
                
              
                    if (selectedIndexSection == "Select college...") {
                  
                       return false ;
                    }else {
                        return true ;
                    } 
                }},
            
            
            
            
            
            
            
            
            
            
            
            
            
            
               { input: '#numericInput', message: 'employee number is required!', action: 'valuechanged, blur', rule: 'number' },
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
    <form class="form" id="form"   method="post" action="registration.php" style="font-size: 13px; font-family: Verdana; width: 650px;">
        <div>
            <h2>Register</h2>
        </div>
        <table class="register-table">
            <tr>
                <td>name:</td>
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
                <td>Secret question</td>
                <td>              
                    
                     
    <div name="jqxWidgetList_question_list" id="jqxWidgetList_question_list"></div>

                    
</td>
            </tr>
            
            
            <tr>
                <td> secret question answer :</td>
                <td><input name="secret_answer" type="text" id="secret_answer" class="text-input" /></td>
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
                <td>
	
  <div>
    <div  name="college_id" id="colleges"></div>
	<div style='clear: both;'></div>
   <br />
   </div>
    
                    
                    
                </td>
                
            </tr>

            <tr>
                <td>department name:</td>
                <td>              
                    
                     
    <div name="dep_id" id="deps"></div>

                    
</td>
            </tr>
            <tr> <td> employee number   </td>
                <td>
                    <div name="user_job_number" id='numericInput'>
                    </div> </td>


</tr>
<tr>
    
    
    <td>
        captcha :
    </td>
    <td>
        <img src="../ca/captcha.php" id="capImage"/>
<br/>Can't read the image? click here to  <a href="javascript:void(0);" onclick="javascript:$('#capImage').attr('src','../ca/captcha.php');">refresh</a>.
           Enter the code: <input class="text-input" name="captcha_code" type="text" id="captcha"  value="">
      
    <td>
    </td>
    
</tr>


            <tr>
                <td colspan="2" style="text-align: center;"><input type="button" value="Send" id="sendButton" /></td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
        </table>
        
   
    </form>
           <iframe id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>

</div>
</body>
</html>
