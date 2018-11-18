$(document).ready( function() {
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ajaxStart(function () {
        $('.page-loader-wrapper').fadeIn();
    });
    $(document).ajaxStop(function () {
        $('.page-loader-wrapper').fadeOut();
    });

    // validation
    $.validator.setDefaults({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });



    setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
});