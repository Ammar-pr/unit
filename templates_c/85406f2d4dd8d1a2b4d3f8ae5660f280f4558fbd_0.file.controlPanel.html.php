<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-10-31 07:44:27
  from "C:\xampp\htdocs\unit\templates\controlPanel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59f8621b5fc211_27618966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85406f2d4dd8d1a2b4d3f8ae5660f280f4558fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\controlPanel.html',
      1 => 1509449324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8621b5fc211_27618966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>In this example is demonstrated how to bind jqxGrid to MySQL Database.</title>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxmenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.selection.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxgrid.filter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxlistbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/jqwidgets/jqxdropdownlist.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jqwidgets/scripts/demos.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {


            var source =
                {
                    datatype: "json",
                    datafields: [
                        { name: 'CompanyName'},
                        { name: 'ContactName'},
                        { name: 'ContactTitle'},
                        { name: 'Address'},
                        { name: 'City'}
                    ],
                    url: 'grid_data.php',
                    cache: false
                };
            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
                {
                    source: source,

                    columns: [
                        { text: 'Company Name', datafield: 'CompanyName', width: 250},
                        { text: 'ContactName', datafield: 'ContactName', width: 150 },
                        { text: 'Contact Title', datafield: 'ContactTitle', width: 180 },
                        { text: 'Address', datafield: 'Address', width: 200 },
                        { text: 'City', datafield: 'City', width: 120 }
                    ]
                });
        });
    <?php echo '</script'; ?>
>
</head>
<body class='default'>
<div id="jqxgrid"></div>
</body>
</html>
<?php }
}
