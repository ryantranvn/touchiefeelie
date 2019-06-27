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

    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;
    //$('body').append('<div class="resolution">'+screenWidth+'-'+screenHeight+'</div>');

    set_banner_height();
/* window resize */
    $(window).resize( function() {
        screenWidth = window.innerWidth;
        screenHeight = window.innerHeight;
        //$('.resolution').remove();
        //$('body').append('<div class="resolution">'+screenWidth+'-'+screenHeight+'</div>');

        set_banner_height();
        if ($('.home-page').length>0) {
            set_bg_home();
        }
        if ($('.aboutus-page').length>0) {
            set_bg_about();
        }
        if ($('.booking-page').length>0) {
            set_bg_booking();
        }
    });
    
    // number format
    number_format = function (number, decimals, dec_point, thousands_sep) {
        number = number.toString().replace('.','');
        number = parseFloat(number).toFixed(decimals);

        var nstr = number.toString();
        nstr += '';
        x = nstr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? dec_point + x[1] : '';
        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

        return x1 + x2;
    }
    function format_currency(number) {
        
        return number_format(number, 0, ',', '.');
    }
    // nav_collapse
    function show_nav_collapse() {
        $('.navbar-collapse').fadeIn(500, function() {
        });
        $('body').addClass('scroll-fixed');
    }
    function hide_nav_collapse() {
        $('.navbar-collapse').fadeOut();
        $('body').removeClass('scroll-fixed');
    }
    // hamburger button
    $('body').on('click', '.navbar .menu-button', function() {

        show_nav_collapse();
    });
    $('body').on('click', '.navbar-collapse .menu-button', function() {
        
        hide_nav_collapse();
    });
    
    // $('.flexslider').flexslider({
    //     animation: "slide",
    //     controlNav: false,
    //     directionNav: false
    // });
/* banner */
    function set_banner_height() {
        var bannerHeight = screenWidth*0.3;
        $('.banner-img').css({
            'height' : bannerHeight+'px'
        });
        if (screenWidth<=600) {
            $('#subnav').css({
                'top' : (bannerHeight+69)+'px',
                'height' : 'auto'
            });
        }
    }
/* tabs */
    $('body').on('click', '.tab-wrap .tab-item', function() {
        var tab_id = $(this).attr('data-id');
        // active tab-item
        var tab_items_wrap = $(this).parent('ul').parent('.tab-items-wrap');
        tab_items_wrap.find('.tab-item.active').removeClass('active');
        $(this).addClass('active');
        // show content
        $('.tab-content-wrap').find('.tab-content.active').removeClass('active');
        $('.tab-content-wrap').find('.tab-content#'+tab_id).addClass('active');
    });
/* placeholder process */
    /*
    if ($('.placeholder').length>0) {
        $('body').on('focus', 'input[type="text"]', function() {
            $(this).parent('form-group').find('.placeholder').addClass('hidden');
        });
        $('body').on('click', 'input[type="text"], textarea', function() {
            var currentVal = $(this).val();
            if (currentVal == "") {
                $(this).next('.placeholder').addClass('hidden');
            }
        });
        $('body').on('blur', 'input[type="text"], textarea', function() {
            var currentVal = $(this).val();
            if (currentVal == "") {
                $(this).next('.placeholder').removeClass('hidden');
            }
        });
        $('body').on('click', '.placeholder', function() {
            $(this).addClass('hidden');
            $(this).parent().find('input[type="text"], textarea').focus();
        });
    }
    */
/* date picker */
    if ($('input.birthday').length>0) {
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
    }
/* positive-number */
    $(".positive-number").on("keypress keyup blur",function (event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });    
/* subscribe */
    $('#frmSubscribe').validate({
        rules : {
            email : {
                required : true,
                email : true
            }
        },
        messages: {
            email : {
                required : 'Trường bắt buộc',
                email : 'Nhập email chưa đúng định dạng'
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: baseUrl + '/ajax_subscribe',
                type: "POST",
                dataType: 'json',
                data:  {
                    email : $('#frmSubscribe').find('input[name="email"]').val()
                },
                beforeSend: function() {
                    $('.page-loader-wrapper').fadeIn();
                },
                success: function(data){
                    $('.page-loader-wrapper').fadeOut();
                    if (data.status == 'error') {
                        Swal({
                            title: 'Error!',
                            text: data.msg,
                            type: 'error',
                            confirmButtonText: 'Close'
                        });
                    }
                    else {
                        Swal({
                            title: 'Success!',
                            text: data.msg,
                            type: 'success',
                            confirmButtonText: 'Close'
                        });
                    }
                },
                error: function() {
                    Swal({
                        title: 'Error!',
                        text: 'Rất tiếc không thể kết nối cơ sở dữ liệu',
                        type: 'error',
                        confirmButtonText: 'Close'
                    });
                }
            });
            return false;
        }
    });
/* home */
    function set_bg_home() {
        if (screenWidth>600) {
            var pHomeBlock = 0.67;
            if (screenWidth <= 576) { // xs
                pHomeBlock = 1.4;
            }
            else if (screenWidth <= 768) { // sm
                pHomeBlock = 1;
            }
            else if (screenWidth <= 960) {
                console.log(screenWidth)
                pHomeBlock = 0.8;
            }

            $('.home-block').css({
                'height' : (screenWidth*pHomeBlock)+'px'        
            });
            $('.customer-block .bg-top').css({
                'height' : (screenWidth*0.2)+'px'
            });
            $('.customer-block .bg-bottom').css({
                'height' : (screenWidth*0.2)+'px'
            });
        }
    }
    if ($('.home-page').length>0) {
        set_bg_home();

        $('#frmReceiveBook').validate({
            rules : {
                email : {
                    require_from_group: [1, ".receive-book"],
                    email : true
                },
                phone : {
                    require_from_group: [1, ".receive-book"],
                    maxlength : 10
                }
            },
            messages: {
                email : {
                    require_from_group : 'Vui lòng nhập số điện thoại hoặc email',
                    email : 'Nhập email chưa đúng định dạng'
                },
                phone : {
                    require_from_group: 'Vui lòng nhập số điện thoại hoặc email',
                    maxlength : 'Số điện thoại tối đa 10 số'
                }
            },
            groups: {
                inputGroup: "email phone",
            },
            errorPlacement: function(error, element) {
                $('.receive-book-error').fadeIn();
                error.appendTo(".receive-book-error");
            },
            submitHandler: function (form) {
                $.ajax({
                    url: baseUrl + '/ajax_subscribe',
                    type: "POST",
                    dataType: 'json',
                    data:  {
                        email : $('#frmReceiveBook').find('input[name="email"]').val(),
                        phone : $('#frmReceiveBook').find('input[name="phone"]').val(),
                        type : 'receive_book'
                    },
                    beforeSend: function() {
                        $('.page-loader-wrapper').fadeIn();
                    },
                    success: function(data){
                        $('.page-loader-wrapper').fadeOut();
                        if (data.status == 'error') {
                            Swal({
                                title: 'Error!',
                                text: data.msg,
                                type: 'error',
                                confirmButtonText: 'Close'
                            });
                        }
                        else {
                            Swal({
                                title: 'Success!',
                                text: data.msg,
                                type: 'success',
                                confirmButtonText: 'Close'
                            });
                        }
                    },
                    error: function() {
                        Swal({
                            title: 'Error!',
                            text: 'Rất tiếc không thể kết nối cơ sở dữ liệu',
                            type: 'error',
                            confirmButtonText: 'Close'
                        });
                    }
                });
                return false;
            }
        });

        $('#frmBooking').validate({
            rules : {
                fullname : {
                    required : true,
                    maxlength : 255
                },
                phone: {
                    required : true,
                    maxlength : 10
                }
            },
            messages: {
                fullname : {
                    required : 'Trường bắt buộc',
                    maxlength : 'Vượt quá chiều dài cho phép'
                },
                phone: {
                    required : 'Trường bắt buộc',
                    maxlength : 'Số điện thoại tối đa 10 số'
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    url: baseUrl + '/ajax_booking',
                    type: "POST",
                    dataType: 'json',
                    data:  {
                        gender : $('select[name="gender"]').val(),
                        fullname : $('input[name="fullname"]').val(),
                        phone : $('input[name="phone"]').val()
                    },
                    beforeSend: function() {
                        $('.page-loader-wrapper').fadeIn();
                    },
                    success: function(data){
                        $('.page-loader-wrapper').fadeOut();
                        if (data.status == 'error') {
                            Swal({
                                title: 'Error!',
                                text: data.msg,
                                type: 'error',
                                confirmButtonText: 'Close'
                            });
                        }
                        else {
                            Swal({
                                title: 'Success!',
                                text: data.msg,
                                type: 'success',
                                confirmButtonText: 'Close'
                            });
                        }
                    },
                    error: function() {
                        Swal({
                            title: 'Error!',
                            text: 'Rất tiếc không thể kết nối cơ sở dữ liệu',
                            type: 'error',
                            confirmButtonText: 'Close'
                        });
                    }
                });
                return false;
            }
        });
    }
/* touchiefeelieclass */
    if ($('.touchiefeelieclass-page').length>0) {
    // product
        if ($('.product').length>0) {
            $('body').on('click', '.select-wrap span.selected-item', function() {
                $(this).parent().children('.select-list').slideToggle(500);
            });
            
            var product_list = [];
            product_list['dau_dua'] = '40000';
            product_list['dau_huong_duong'] = '48000';
            product_list['dau_nho'] = '55000';
            $('body').on('click', '.product-type-wrap ul.select-list li', function() {
                var product_wrap = $(this).parent('ul.select-list').parent('.product-capacity-wrap').parent('.product-wrap');
                var selected_text = $(this).html();
                // set text to view
                var selected_item = product_wrap.find('.selected-item');
                selected_item.html(selected_text);
                // get quantity
                var quantity = parseInt(product_wrap.find('.quantity').html());
                // get prize per unit
                var prize_per_unit = parseInt(product_list[$(this).attr('data-value')])
                product_wrap.find('.prize-per-unit').html(prize_per_unit);
                // set prize
                product_wrap.find('.prize').html(format_currency(prize_per_unit*quantity));
                $(this).parent('ul.select-list').slideToggle(500);
            });
            $('body').on('click', '.product-quatity-wrap .btn-up', function() {
                var product_wrap = $(this).parent('.product-quatity-wrap').parent('.product-wrap');
                // get prize per unit
                var prize_per_unit = parseInt(product_wrap.find('.prize-per-unit').html().replace('.',''));
                // get current quantity
                var current_quantity = parseInt(product_wrap.find('.quantity').html());
                // set quantity
                var quantity = current_quantity + 1;
                product_wrap.find('.quantity').html(quantity);
                // set prize
                product_wrap.find('.prize').html(format_currency(prize_per_unit * quantity));
            });
            $('body').on('click', '.product-quatity-wrap .btn-down', function() {
                var product_wrap = $(this).parent('.product-quatity-wrap').parent('.product-wrap');
                // get prize per unit
                var prize_per_unit = parseInt(product_wrap.find('.prize-per-unit').html().replace('.',''));
                // get current quantity
                var current_quantity = parseInt(product_wrap.find('.quantity').html());
                if (current_quantity > 1) {
                    // set quantity
                    var quantity = current_quantity - 1;
                    product_wrap.find('.quantity').html(quantity);
                    // set prize
                    product_wrap.find('.prize').html(format_currency(prize_per_unit * quantity));
                }
            });
        }
    // library
    }
/* about us*/
    function set_bg_about() {
        var pAboutChamCaBauTroi = 0.41;
        $('.ve-chung-toi .right-col').css({
            'height' : ($('.ve-chung-toi .left-col').height())+'px',
        });
        $('.cham-ca-bau-troi').css({
            'height' : (screenWidth*pAboutChamCaBauTroi)+'px',
        });
        $('.co-so-vat-chat .right-col').css({
            'height' : ($('.co-so-vat-chat .left-col').height())+'px',
        });
        $('.hiep-hoi .right-col').css({
            'height' : ($('.hiep-hoi .left-col').height())+'px',
        });
        $('.hiep-hoi-2 .left-col').css({
            'height' : ($('.hiep-hoi-2 .right-col').outerHeight())+'px',
        });
        $('.su-mang .right-col').css({
            'height' : ($('.su-mang .left-col').outerHeight())+'px',
        });
        $('.su-mang .quotation-content').css({
            'height' : ($('.su-mang .left-col').width()*0.15)+'px',
        });
        $('.khoanh-khac .text-khoanh-khac').css({
            'height' : ($('.khoanh-khac .text-khoanh-khac').width()*0.62)+'px',
        });
        $('.khoanh-khac .right-col').css({
            'height' : ($('.khoanh-khac .left-col').outerHeight())+'px',
        });
        $('.tham-kham .left-col').css({
            'height' : ($('.tham-kham .right-col').outerHeight())+'px',
        });
        $('.bs-col').css({
            'padding-top' : ($('.bs-col').outerWidth())+'px',
        });
    }
    if ($('.about-page').length>0) {
        set_bg_about();
    }
/* booking-page */
    function set_bg_booking() {
        var pAboutChamCaBauTroi = 0.41;
        $('.dat-hen-1 .left-col').css({
            'height' : ($('.dat-hen-1 .right-col').outerHeight())+'px',
        });
    }
    if ($('.booking-page').length>0) {
        set_bg_booking();
    
    // select branch
        $('body').on('click', '.btn-select-wrap .btn-select', function() {
            var wrap = $(this).parent('.btn-select-wrap');
            wrap.find('.btn-select.active').removeClass('active');
            $(this).addClass('active');
            wrap.find('.btn-select-value').val($(this).attr('data-value'));
        });

        $('#frmBooking').validate({
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
        if ($('.dat-hen-thanh-cong').length>0) {
            $('.banner').hide();
        }
    // prevent tab
        // $('input[name="child_name"]').on( 'keydown', function( event ) {
        //     if ( event.which == 9 ) {
        //         event.preventDefault();
                
        //         $(this).focus();
        //     }
        // });
    }
    
    setTimeout(function () {
        $("html, body").animate({ scrollTop: 0 }, 600, function() {
            $('.page-loader-wrapper').fadeOut();
        });
    }, 50);
/* on mobile */
    
});

