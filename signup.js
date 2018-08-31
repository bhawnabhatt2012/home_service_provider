$(document).ready(function () {
    $('#signup').validate({ // initialize the plugin
        rules: {
            firstname: {
                required: true,
            },
            lastname: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
            },
            password: {
                required: true,
                minlength: 8
            },
            mobile: {
                required: true,
            },
            houseno: {
                required: true,
            },
            street: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            }
        }
    });

});