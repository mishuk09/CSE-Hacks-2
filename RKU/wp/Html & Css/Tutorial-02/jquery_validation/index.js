// Wait for the DOM to be ready
alert "djhfgkhasdkf";
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({

        rules: {

            firstname: "required",
            lastname: "required",
            email: {
                required: true,

                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
        },

        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },

        submitHandler: function(form) {
            form.submit();
        },
    });
});