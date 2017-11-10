$(document).ready(function () {

    // prepare the data
    var source =
        {
            datatype: "json",
            datafields: [
                { name: 'name'},
                { name: 'id'}
            ],
            url: 'dropdownlistdata.php',
            async: false
        };
    var dataAdapter = new $.jqx.dataAdapter(source);

    $("#dropdownlist").jqxDropDownList(
        {
            source: dataAdapter,

            width: 250,
            height: 25,
            selectedIndex: 0,
            displayMember: 'name',
            valueMember: 'id'
        });
    $('#sendButton').jqxButton({ width: 70});
});