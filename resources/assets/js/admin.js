// @include('ckfinder::setup')

$(document).ready( function() {
	var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;

/* window resize */
    $(window).resize( function() {
        screenWidth = window.innerWidth;
        screenHeight = window.innerHeight;
        if (screenWidth > 1100) {
        	$('#navigation').fadeIn().removeClass('fadeOutLeft').addClass('fadeInLeft');
        }
    });

/* ajax init */
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

/* validation init */
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
    $.validator.addMethod('atLeastOneSeat', function(value, element, params) {
        var seats = $('.group-required').filter(function() {
            return $(this).val() != '0';
        });
        return seats.length > 0;
    }, 'Please select at least one seat');
    $.validator.addClassRules('group-required', { atLeastOneSeat: true });

/* navigation */
    var hamburger = $(".hamburger");
  	hamburger.on("click", function() {
	    hamburger.toggleClass("is-active");
	    if ($('#navigation').hasClass('fadeInLeft')) {
	    	$('#navigation').removeClass('fadeInLeft').addClass('fadeOutLeft');
	    }
	    else {
	    	$('#navigation').fadeIn().removeClass('fadeOutLeft').addClass('fadeInLeft');
	    }
	    
  	});

/* positive-number */
    $(".positive-number").on("keypress keyup blur",function (event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

// ckeditor
    if ($('#editor').length>0) {
        CKEDITOR.replace( 'editor', {
            customConfig: '../adminbsb/js/ckeditor-config-min.js'
        });
    }

/* thumbnail */
    $('body').on('click', 'a.thumbnail-frame', function(e) {
        e.preventDefault();
        selectFileWithCKFinder($(this));
    });
    function selectFileWithCKFinder(el) {
        var el_input = el.find('input.thumbnail-url');
        var el_img = el.find('.thumbnail');
        var el_del = el.next('.thumbnail-del');
        CKFinder.modal({
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    el_input.val(file.getUrl());
                    el_img.attr('src', file.getUrl());
                    el_del.removeClass('hide');
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    el_input.val(evt.data.resizedUrl);
                    el_img.attr('src', evt.data.resizedUrl)
                } );
            }
        });
    }
    $('body').on('click', '.thumbnail-del', function(e) {
        e.preventDefault();
        var frame = $(this).prev('.thumbnail-frame');
        var el_input = frame.find('input.thumbnail-url');
        var el_img = frame.find('.thumbnail');
        el_input.val('');
        el_img.attr('src', baseUrl + '/adminbsb/images/default.jpg');
        $(this).addClass('hide');
    })

/* Delete inline */
    $('body').on('click', '.btn-delete', function (e) {
        e.preventDefault();
        var deleteLink = $(this).attr('data-action');
        console.log(deleteLink);
        swal({
            title: trans.swal_delete_title,
            text: trans.swal_delete_text,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: trans.swal_delete_btn_confirm,
            closeOnConfirm: false
        }, function () {
            $('#frm-delete').attr('action', deleteLink).submit();
        });
    });

/* DatePicker & Time Picker */
    if ($('body').find('.date-picker').length > 0) {
        $('.date-picker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
        });
    }

    if ($('body').find('.time-picker').length > 0) {
        $('.time-picker').bootstrapMaterialDatePicker({
            date: false,
            time: true,
            shortTime: false,
            format: 'HH:mm'
        });
    }

/* PAGEs */
    // Library
    if ($('#frmLibrary').length > 0) {
        $('#frmLibrary').validate({
            rules : {
                title : {
                    required : true,
                    maxlength : 255
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }
    // Blog
    if ($('#frmBlog').length > 0) {
        $('#frmBlog').validate({
            rules : {
                title : {
                    required : true,
                    maxlength : 255
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }
    // News 
    if ($('#frmNews').length > 0) {
        $('#frmNews').validate({
            rules : {
                title : {
                    required : true,
                    maxlength : 255
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }
    // Calendar
    if ($('#frmCalendar').length > 0) {

        $('body').on('click', '.btn-select-wrap .btn-select', function() {
            var wrap = $(this).parent('.btn-select-wrap');
            wrap.find('.btn-select.active').removeClass('active');
            $(this).addClass('active');
            wrap.find('.btn-select-value').val($(this).attr('data-value'));
        });

        $('body').on('click', '.btn-multi-select-wrap .btn-select', function(e) {
            e.preventDefault();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                $(this).next('input').val('');
            }
            else {
                $(this).addClass('active');    
                $(this).next('input').val($(this).attr('data-value'));
            }
        });

        $('#frmCalendar').validate({
            rules : {
                date : {
                    required : true
                },
                number_days : {
                    required : true,
                    min : 0,
                    max : 28
                },
                'days[]' :  {
                    require_from_group : [1, '.days-group']
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }
    // Calendar
    if ($('#frmCustomer').length > 0) {
        $('.birthday').dateDropdowns({
            displayFormat: 'dmy',
            dropdownClass: 'form-control date_picker',
            yearLabel : 'Năm',
            monthLabel : 'Tháng',
            dayLabel : 'Ngày',
            monthFormat: 'numeric',
            daySuffixes: false,
            monthSuffixes: false
        });
        // select branch and time
        $('body').on('click', '.btn-select-wrap .btn-select', function() {
            var wrap = $(this).parent('.btn-select-wrap');
            wrap.find('.btn-select.active').removeClass('active');
            $(this).addClass('active');
            wrap.find('.btn-select-value').val($(this).attr('data-value'));
        });
         $('#frmCustomer').validate({
            ignore: [],
            rules: {
                'child_name': {
                    required: true
                },
                'child_birthday': {
                    required: true
                },
                'child_month': {
                    required: true
                },
                'child_weight': {
                    required: true
                },
                'address': {
                    required: true
                },
                'pathological': {
                    required: true
                },
                'know_from': {
                    required: true
                }
            },
            messages: {
                'child_name': {
                    required: "Trường bắt buộc"
                },
                'child_birthday': {
                    required: "Trường bắt buộc"
                },
                'child_month': {
                    required: "Trường bắt buộc"
                },
                'child_weight': {
                    required: "Trường bắt buộc"
                },
                'address': {
                    required: "Trường bắt buộc"
                },
                'pathological': {
                    required: "Trường bắt buộc"
                },
                'know_from': {
                    required: "Trường bắt buộc"
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }

/* page loader */
    setTimeout(function () {
        $("html, body").animate({ scrollTop: 0 }, 600, function() {
            $('.page-loader-wrapper').fadeOut();
        });
    }, 50);
});