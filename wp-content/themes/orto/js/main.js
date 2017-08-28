jQuery(document).ready(function($) {
    bookFormOneClick();
    slider();
    mobileMenu();
    tabs();
    youtube();
    shares();
    magnificPopup();
    bxSliderHotel();
    bxSliderHostel();
    contactForm();
    magnificPopupRoomsLink();
    datePicker();
    mask();
    hiddenValInput();

    function hiddenValInput() {
        $("#main_slider .slider .book_form").hover(function(event) {
            var hidden = $(this).closest('.slide').find('.slide_text h2').text();
            $(this).find('input[name=hidden-theme-on-slider]').val(hidden);
        });
    }

    function mask() {
        $("input[type='tel']").mask("+7(999)9999999");
    }


    function datePicker() {
        $("input[name='date-in']").datepicker({
            inline: true,
            minDate: new Date(),
        });

        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
            ],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
            ],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    }


    function bookFormOneClick() {
        $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true,
        });
    }

    function contactForm() {
        $("form input").focus(function(event) {
            var invalid = $(this).attr('aria-invalid');
            if (invalid == "true") {
                $(this).attr('aria-invalid', 'false');
            }
        });
        $("form textarea").focusin(function(event) {
            var invalid = $(this).attr('aria-invalid');
            if (invalid == "true") {
                $(this).attr('aria-invalid', 'false');
            }
        });
    }
    //Гостиница
    var gallerySliderSingleRoom;
    var gallerySliderDoubleRoom;
    var gallerySliderJuniorRoom;

    function bxSliderHotel() {
        gallerySliderSingleRoom = $('.bx_slider_single_room').bxSlider({
            pagerCustom: '.bx_slider_nav_single_room',
            controls: false,
        });


        gallerySliderDoubleRoom = $('.bx_slider_double_room').bxSlider({
            pagerCustom: '.bx_slider_nav_double_room',
            controls: false,
        });

        gallerySliderJuniorRoom = $('.bx_slider_junior_room').bxSlider({
            pagerCustom: '.bx_slider_nav_junior_room',
            controls: false,
        });

    }
    //Хостел
    var gallerySliderDoubleRoomHostel;
    var gallerySliderTripleRoomHostel;
    var gallerySliderQuadrupleRoom;

    function bxSliderHostel() {




        gallerySliderDoubleRoomHostel = $('.bx_slider_double_room_hostel').bxSlider({
            pagerCustom: '.bx_slider_nav_double_room_hostel',
            controls: false,
        });


        gallerySliderTripleRoomHostel = $('.bx_slider_triple_room_hostel').bxSlider({
            pagerCustom: '.bx_slider_nav_triple_room_hostel',
            controls: false,
        });


        gallerySliderQuadrupleRoom = $('.bx_slider_quadruple_room_hostel').bxSlider({
            pagerCustom: '.bx_slider_nav_quadruple_room_hostel',
            controls: false,
        });


    }


    function magnificPopupRoomsLink() {
        $('.open_popup_link_hotel').magnificPopup({
            type: 'inline',
            midClick: true,
            callbacks: {
                open: function() {
                    gallerySliderSingleRoom.reloadSlider();
                    gallerySliderDoubleRoom.reloadSlider();
                    gallerySliderJuniorRoom.reloadSlider();

                }
            }
        });

        $('.open_popup_link_hostel').magnificPopup({
            type: 'inline',
            midClick: true,
            callbacks: {
                open: function() {
                    gallerySliderDoubleRoomHostel.reloadSlider();
                    gallerySliderTripleRoomHostel.reloadSlider();
                    gallerySliderQuadrupleRoom.reloadSlider();
                }
            }
        });
    }




    function magnificPopup() {
        $(".load_all_photo_slider_hotel").click(function(event) {
            event.preventDefault();
            $(".gallery_slider_hotel .image a").first().trigger('click');
        });

        $(".load_all_photo_slider_hostel").click(function(event) {
            event.preventDefault();
            $(".gallery_slider_hostel .image a").first().trigger('click');
        });
        $(".load_all_photo_slider_sauna").click(function(event) {
            event.preventDefault();
            $(".gallery_slider_sauna .image a").first().trigger('click');
        });
        $(".load_all_photo_slider_arenda_konferents_zala").click(function(event) {
            event.preventDefault();
            $(".gallery_slider_arenda_konferents_zala .image a").first().trigger('click');
        });

        $('.gallery_slider_hotel').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tPrev: 'Преведуший',
                tNext: 'Следуйший',
                tCounter: '%curr% из %total%'
            },
            image: {
                tError: '<a href="%url%">Фотография</a> не доступна.'
            },
            ajax: {
                tError: '<a href="%url%">Запрос</a>получить не удалось.'
            }
        });


        $('.gallery_slider_hostel').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tPrev: 'Преведуший',
                tNext: 'Следуйший',
                tCounter: '%curr% из %total%'
            },
            image: {
                tError: '<a href="%url%">Фотография</a> не доступна.'
            },
            ajax: {
                tError: '<a href="%url%">Запрос</a>получить не удалось.'
            }
        });
        $('.gallery_slider_sauna').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tPrev: 'Преведуший',
                tNext: 'Следуйший',
                tCounter: '%curr% из %total%'
            },
            image: {
                tError: '<a href="%url%">Фотография</a> не доступна.'
            },
            ajax: {
                tError: '<a href="%url%">Запрос</a>получить не удалось.'
            }
        });

        $('.gallery_slider_arenda_konferents_zala').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                tPrev: 'Преведуший',
                tNext: 'Следуйший',
                tCounter: '%curr% из %total%'
            },
            image: {
                tError: '<a href="%url%">Фотография</a> не доступна.'
            },
            ajax: {
                tError: '<a href="%url%">Запрос</a>получить не удалось.'
            }
        });

        $('.awards').magnificPopup({
            delegate: 'a',
            type: 'image',
            image: {
                tError: '<a href="%url%">Фотография</a> не доступна.'
            },
            ajax: {
                tError: '<a href="%url%">Запрос</a>получить не удалось.'
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
            }
        });

    }



    function shares() {
        $("#shares_page .current_past .current").change(function(event) {
            $.cookie('order', 'DESC', {
                expires: 5,
                path: '/',
            });
            location.reload();
        });

        $("#shares_page .current_past .past").change(function(event) {
            $.cookie('order', 'ASC', {
                expires: 5,
                path: '/',
            });
            location.reload();
        });
    }


    function youtube() {
        (function() {

            var youtube = document.querySelectorAll(".youtube");

            for (var i = 0; i < youtube.length; i++) {

                var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";

                var image = new Image();
                image.src = source;
                image.addEventListener("load", function() {
                    youtube[i].appendChild(image);
                }(i));

                youtube[i].addEventListener("click", function() {
                    var iframe = document.createElement("iframe");

                    iframe.setAttribute("frameborder", "0");
                    iframe.setAttribute("allowfullscreen", "");
                    iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1");

                    this.innerHTML = "";
                    this.appendChild(iframe);
                });
            };

        })();
    }

    function slider() {
        var slider = $("#main_slider .slider").slick({
            dots: true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 10000,
            autoplay: true,
            arrows: true,
            appendDots: $("#navigation_slick .nav_dots_arrow"),
            appendArrows: $("#navigation_slick .nav_dots_arrow"),
            prevArrow: '<div class="prev_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            nextArrow: '<div class="next_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            adaptiveHeight: true,
            focusOnSelect: true,
            pauseOnFocus: true,
            pauseOnHover: true,
            swipe: false,
             responsive: [{
                breakpoint: 768,
                settings: {
                    swipe: true,
                }
            }]
        });



        $("#reviews .slider").slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplaySpeed: 10000,
            autoplay: true,
            arrows: true,
            prevArrow: '<div class="prev_arrow"></div>',
            nextArrow: '<div class="next_arrow"></div>',
            focusOnSelect: true,
            pauseOnFocus: true,
            pauseOnHover: true,
            swipe: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                         slidesToShow: 1,
            slidesToScroll: 1,
               arrows: false,
                 swipe: true,
                }
            }]
        });
    }

    function mobileMenu() {
        $(".mobile_menu").click(function(event) {
            $(".header_menu").toggleClass('open');
        });
    }

    function tabs() {
        $(".tab_content .tab_panel").hide().filter(':first').show()
        $(".tabs .tab a").click(function(event) {
            event.preventDefault();
            $(".tab_content .tab_panel").hide();
            $(".tab_content .tab_panel").eq($(this).parent().parent().index()).fadeIn("slow");
            $('.tabs .tab a').removeClass('selected');
            $(this).addClass('selected');

        });

    }

});
