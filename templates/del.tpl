<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <title>Getting Started</title>
    <!-- add one of the jQWidgets styles -->
    <link rel="stylesheet" 
    href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" 
    href="../scripts/jqwidgets/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
    <!-- add the jQuery script -->
    <script type="text/javascript" src="../scripts/scripts/jquery-1.11.1.min.js"></script>
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <!-- add one or more widgets -->
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
</head>
<body>
  <script type="text/javascript">
    $(document).ready(function () {
        $("#myButton").jqxButton(
       { width: '120px', height: '35px', theme: 'darkblue' });
       
       
    });
 </script>
    <h2>please confirm deleting </h2>
            <form class="form" id="form" target="_parent"  method="post" action="../htdocs/delete.php" style="font-size: 13px; font-family: Verdana; width: 650px;">

       <inpt type="hidden" value="1111" name="id">
    <input type="submit" name="sumbit" value="submit" id='myButton' >

            </form>

</body>
</html>