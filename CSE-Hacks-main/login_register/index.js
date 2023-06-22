$("#formValidation").validate({

    rules: {
        email: {
            email: true
        },
        password: {
            password: true
        },

    },
    messages: {
        email: {
            required: "Please enter valid email ",
        },
        password: "Minimum 8 character",
    },

    submitHandler: function(form) {
        form.submit();
    }
});