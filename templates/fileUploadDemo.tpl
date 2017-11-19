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
            $('#jqxFileUpload').jqxFileUpload({
                width: 300,
                accept: 'doc/*',
                uploadUrl: '../htdocs/fileUpload.php',
                fileInputName: 'fileToUpload',
            });
            $('#jqxFileUpload').on('uploadEnd', function (event) {
                var args = event.args;
                var fileName = args.file;
                var serverResponse = args.response;
                // Your code here.
                console.log(args);
                console.log(fileName);
                console.log(serverResponse);
            });



        });



    </script>
</head>
<body>
<div id="jqxFileUpload">

</div>
<br />
</body>
</html>
