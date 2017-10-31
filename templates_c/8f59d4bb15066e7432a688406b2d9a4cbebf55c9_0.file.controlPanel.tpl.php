<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-31 06:59:49
  from "C:\xampp\htdocs\unit\templates\controlPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59f857a53381a8_51554589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f59d4bb15066e7432a688406b2d9a4cbebf55c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\controlPanel.tpl',
      1 => 1509447585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f857a53381a8_51554589 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/demos.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxdockpanel.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            // Create jqxDockPanel
            $("#jqxDockPanel").jqxDockPanel({ width: 500, height: 320});
            $("#jqxDockPanel2 > div").css({ width: '500px', height: '500px' });
            $("#jqxDockPanel2").jqxDockPanel({ width: 500, height: 500, lastchildfill: false});
            $("#jqxDockPanel div").css('color', 'red');
            $("#jqxDockPanel2 div").css('color', '#fff');
            // Apply custom layout depending on the user's choice.
            $("#layout").click(function (event) {
                var position = parseInt(event.clientX) - parseInt($(event.target).offset().left);
                $("#jqxDockPanel > div > div").css({ width: 'auto', height: 'auto' });
                if (position < 55) {
                    $('#first').attr('dock', 'bottom');
                    $('#first').height('500px');
                    $('#second').attr('dock', 'left');
                    $('#second').width('500px');
                    $('#third').attr('dock', 'left');
                    $('#third').width('500px');
                    $('#fourth').attr('dock', 'left');
                    $('#fourth').width('500px');
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
    <?php echo '</script'; ?>
>
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
        <img title='click to apply a new layout' alt='layout types' src='png.png' />
    </div>
    <br />
    <div>Spiral:</div>
    <div id='jqxDockPanel2'>
        <div id='Div1' dock='left' style='background: #486974;'>
            dsdfff</div>
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
<?php }
}
