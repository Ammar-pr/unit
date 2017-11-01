<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-11-01 03:11:10
  from "C:\xampp\htdocs\unit\templates\controlPanel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59f9738e7bf6f1_96030185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85406f2d4dd8d1a2b4d3f8ae5660f280f4558fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\unit\\templates\\controlPanel.html',
      1 => 1509520154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9738e7bf6f1_96030185 (Smarty_Internal_Template $_smarty_tpl) {
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
                        { name: 'title'},
                        { name: 'request_date'},
                        { name: 'attachment_request_link'},
                        { name: 'update'},
                        { name: 'delete'},
                        { name: 'reply'}

                    ],
                    url: '../grid_data.php',
                    cache: false
                };
            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
                {
                    source: source,

                    columns: [
                        { text: 'Title ', datafield: 'title', width: 250},
                        { text: 'date ', datafield: 'request_date', width: 150 },
                        { text: 'link ', datafield: 'attachment_request_link', width: 180 },
                        { text: 'update ', datafield: 'update', width: 180 },
                        { text: 'delete ', datafield: 'delete', width: 180 },
                        { text: 'replay ', datafield: 'reply', width: 180 }
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
