$(document).ready(function () {
    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            subject: {
                required: true,
            },
            phone: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        messages: {
            name: {
                required: 'Please Enter Your Name',
            },
            email: {
                required: 'Please Enter Your Email',
            },
            subject: {
                required: 'Please Enter Your Subject',
            },
            phone: {
                required: 'Please Enter Your Phone',
            },
            message: {
                required: 'Please Enter Your Message',
            },

        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').prepend(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })
})
