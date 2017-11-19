<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>In this example is demonstrated how to bind jqxGrid to MySQL Database.</title>
    <link rel="stylesheet" href="../scripts/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../scripts/jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript">
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
    </script>
</head>
<body class='default'>
<div id="jqxgrid"></div>
</body>
</html>
