<?php
/* Smarty version 3.1.30, created on 2017-11-21 03:36:35
  from "C:\xampp\htdocs\unit\templates\make_request.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a13e593736da1_30895255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ffa2313d5ea789abaf457c29c6f58f5a6affaff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\make_request.tpl',
      1 => 1511253390,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a13e593736da1_30895255 (Smarty_Internal_Template $_smarty_tpl) {
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
   
    
    
    
    
        <link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    
    
    
    
    
    
    
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxfileupload.js"></script>
        <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>	

  <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script> 

       <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxvalidator.js"></script> 
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/globalization/globalize.js"></script> 
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxfileupload.js"></script>
 
    
     
    
    <script type="text/javascript">
        $(document).ready(function () {
     

           

$('#sendButton').jqxButton({ width: 60, height: 25});
		$('.text-input').addClass('jqx-input');
		$('.text-input').addClass('jqx-rc-all');
 
   
    
     		if (theme.length > 0) {
			$('.text-input').addClass('jqx-input-' + theme);
			$('.text-input').addClass('jqx-widget-content-' + theme);
			$('.text-input').addClass('jqx-rc-all-' + theme);
		}
		// initialize validator.
		$('#form').jqxValidator({
			rules: [
			{ input: '#userInput', message: 'العنوان !', action: 'keyup, blur', rule: 'required' },
                          { input: '#dropdownlist', message: 'الرجاء اختيار الوحدة', action: 'change', rule: function () {
                    var selectedIndexSection = $('#dropdownlist').text();
                
              
                    if (selectedIndexSection == "الرجاء اختيار وحدة") {
                     
                       return false ;
                    }else {
                        return true ;
                    } 
                }},
			{ input: '#userInput', message: 'يجب ان يكون العنوان من   اربعة احرف الى  أربعين حرف!', action: 'keyup, blur', rule: 'length=3,40' },
			
			
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
		var source =
		{
			datatype : "json",
			datafields: [
			{ name: 'name'},
                        { name: 'id'}
                    ],
			url: '../scripts/dropdownlistdata.php',
			async: false
		};
		var dataAdapter = new $.jqx.dataAdapter(source);
			
		$("#dropdownlist").jqxDropDownList(
		{
			source: dataAdapter,
			
			width: 250,
			height: 25,
			
                        promptText: "الرجاء اختيار وحدة",
			displayMember: 'name',
			valueMember: 'id'
		});        
     




        });



    </script>
    
    
    
    
    
    
    
    
    
    
    
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
    
           <div style="height: 219px;">
        <form class="form" id="form" target="form-iframe"  method="post" action="../htdocs/file_up.php"   enctype="multipart/form-data" style="font-size: 13px; font-family: Verdana; width: 650px;">
            <div>
                <h2>تسجيل طلب جديد</h2>
            </div>
	      <table class="register-table">
                
                     <tr>
               <td>اختر الوحدة  ?</td>
               <td><div name="list" id="dropdownlist"></div></td>
         </tr>
                  
                  
                  <tr>
                        <td>عنوان الطلب </td>
                        <td><input type="text"  name="title" type="text" id="userInput" class="text-input" /></td>
                    </tr>
                
                  
                   
                 
                    <tr>
                    <td> ارفق الرسالة البحثية</td>
                    <td>

    <input type="file" name="file" id="fileToUpload">

                    </td>
                    <td>

                    </td>
                    
                    
               
                    </tr>
                    
                       <tr>
                        <td colspan="2" style="text-align: center;"><input name="submit" type="submit" value="Send" id="sendButton" /></td>
                    </tr>
              

        </form>
              
                    
                      </table>
        <iframe  id="form-iframe" name="form-iframe" class="demo-iframe" frameborder="0"></iframe>
    </div>

<br />
</body>
</html>
<?php }
}
