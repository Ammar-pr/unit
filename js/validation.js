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
                { input: '#realNameInput', message: 'title  is required!', action: 'keyup, blur', rule: 'required' },
                { input: '#realNameInput', message: 'title contain only letters!', action: 'keyup', rule: 'notNumber' },
                { input: '#realNameInput', message: 'Your title must be between 3 and 12 characters!', action: 'keyup', rule: 'length=3,12' }]
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