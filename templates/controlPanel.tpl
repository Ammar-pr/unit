<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="jQuery DockPanel, Layout, Layout Panel" />
    <meta name="description" content="The jqxDockPanel widget represents a container for other widgets
        or elements. It arranges its inner elements depending on the value of the 'dock' attribute."/>
    <title id='Description'>The jqxDockPanel widget represents a container for other widgets
        or elements. It arranges its inner elements depending on the value of the 'dock'
        attribute.</title>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdockpanel.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Create jqxDockPanel
            $("#jqxDockPanel").jqxDockPanel({ width: 500, height: 320});
            $("#jqxDockPanel2 > div").css({ width: '500px', height: '500px' });
            $("#jqxDockPanel2").jqxDockPanel({ width: 300, height: 210, lastchildfill: false});
            $("#jqxDockPanel div").css('color', 'red');
            $("#jqxDockPanel2 div").css('color', '#fff');
            // Apply custom layout depending on the user's choice.
            $("#layout").click(function (event) {
                var position = parseInt(event.clientX) - parseInt($(event.target).offset().left);
                $("#jqxDockPanel > div > div").css({ width: 'auto', height: 'auto' });
                if (position < 55) {
                    $('#first').attr('dock', 'bottom');
                    $('#first').height('300px');
                    $('#second').attr('dock', 'left');
                    $('#second').width('100px');
                    $('#third').attr('dock', 'left');
                    $('#third').width('100px');
                    $('#fourth').attr('dock', 'left');
                    $('#fourth').width('100px');
                } else
                if (position < 115) {
                    $("#jqxDockPanel > div > div").css({ width: '100px' });
                    $('#first').attr('dock', 'left');
                    $('#second').attr('dock', 'right');
                    $('#third').attr('dock', 'bottom');
                    $('#third').height('140px');
                    $('#fourth').attr('dock', 'top');
                    $('#fourth').height('70px');
                } else if (position < 175) {
                    $("#jqxDockPanel > div > div").css({ width: '150px' });
                    $('#first').attr('dock', 'left');
                    $('#second').attr('dock', 'left');
                    $('#third').attr('dock', 'left');
                    $('#fourth').attr('dock', 'left');
                } else if (position < 235) {
                    $("#jqxDockPanel > div > div").css({ height: '70px' });
                    $('#first').attr('dock', 'top');
                    $('#second').attr('dock', 'top');
                    $('#third').attr('dock', 'top');
                    $('#fourth').attr('dock', 'top');
                }
                else {
                    $("#jqxDockPanel > div > div").css({ width: '100px' });
                    $('#first').attr('dock', 'left');
                    $('#second').attr('dock', 'left');
                    $('#third').attr('dock', 'left');
                    $('#fourth').attr('dock', 'left');
                }
                $('#jqxDockPanel').jqxDockPanel('render');
            });
        });
    </script>
</head>
<body class='default'>
<div id='jqxWidget' style="width: 300px; height: 600px; font-size: 13px; font-family: Verdana;">
    <div id='jqxDockPanel'>
        <div id='first' dock='left' style='background: #486974;'>
            welcome to admin control panel </div>
        <div id='second' dock='top' style='height: 100px; background: #368ba7;'>
            Second Div</div>
        <div id='third' dock='right' style='background: #df7169;'>
            Third Div</div>
        <div id='fourth' style='background: #a73654;'>
            Fourth Div</div>
    </div>
    <br />
    <div>Layout Types:</div>
    <div id='layout'>
        <img title='click to apply a new layout' alt='layout types' src='../../images/LayoutTypes.png' />
    </div>
    <br />
    <div>Spiral:</div>
    <div id='jqxDockPanel2'>
        <div id='Div1' dock='left' style='background: #486974;'>
            1</div>
        <div id='Div2' dock='top' style='background: #368ba7;'>
            2</div>
        <div id='Div3' dock='right' style='background: #df7169;'>
            3</div>
        <div id='Div4' dock='bottom' style='background: #a73654;'>
            4</div>
    </div>
</div>
</body>
</html>
