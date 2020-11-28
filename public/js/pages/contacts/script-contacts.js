(function ($) {
    "use strict";
    //  alert(action);
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var subject = $('.validate-input input[name="subject"]');
    var message = $('.validate-input textarea[name="message"]');

    //get the form
    var form = $('#contact-form');

    $(form).submit(function (event) {
        if (!checkdata()) {
            return false;
        }
        // stop browser from submitting the form
        event.preventDefault();
        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: {
                formData: formData,
                _token: window.Laravel.csrfToken
            },
            dataType: 'json',

            success: function (response) {
                alert("Done! It was succesfully deleted! success");
                location.reload();
            },
            error: function (e) {
                alert("Erreur Le serveur ne repond pas");
            }
        })

    });

    function checkdata() {
        var check = true;

        if ($(name).val().trim() == '') {
            showValidate(name);
            check = false;
        }

        if ($(subject).val().trim() == '') {
            showValidate(subject);
            check = false;
        }


        if ($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check = false;
        }

        if ($(message).val().trim() == '') {
            showValidate(message);
            check = false;
        }

        return check;
    }


    $('.validate-form .input1').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);
