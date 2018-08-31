$(document).ready(function () {
    $('#login').validate({ // initialize the plugin
        rules: {
            login: {
                required: true,
            },
            password: {
                required: true,
            },
        }
    });
    var isChecked = $('#rdSelect:checked').val()?true:false;
    

});