var APP = APP || {};

APP.Plagins = {};
$(document).ready(function() {

    const _document = $(document);

    // //////////
    // READY - triggered when PJAX DONE
    // //////////


    function pageReady() {
        initSliders();
    }

    pageReady();

    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    if ($("[js-select]").length > 0) {

        $('[js-select]').select2();

    }

    $(window).on(
        "scroll",
        throttle(function() {
            var scroll = $(window).scrollTop();
            var headerHeight = $(".header").height();
            var windowHeight = $(window).height();

            if (scroll > headerHeight / 2) {
                $(".header").addClass("is-fixed-start");
            } else {
                $(".header").removeClass("is-fixed-start");
            }
            if (scroll >= windowHeight - headerHeight / 1) {
                $(".header").addClass("is-fixed");
            } else {
                $(".header").removeClass("is-fixed");
            }
        }, 25)
    );


    // Prevent # behavior
    _document

        .on('click', '[href="#"]', function(e) {
        e.preventDefault();
    })

    .on('click', '[js-open-design-info]', function() {
        $(this).toggleClass("is-active");
        $(this).closest('.int-design__item').find('.int-design__hidden').slideToggle();
    })

    .on('click', '[js-open-articles-row]', function() {

        if ($(this).hasClass('is-active')) {
            $(this).toggleClass("is-active");
            $(this).closest('.main-articles__item').find('.main-articles__hidden').slideToggle();
            setTimeout(() => {
                $(this).closest('.main-articles__item').find('.main-articles__info-container').slideToggle();
            }, 450);
        } else {
            $(this).toggleClass("is-active");
            $(this).closest('.main-articles__item').find('.main-articles__info-container').slideToggle();
            setTimeout(() => {
                $(this).closest('.main-articles__item').find('.main-articles__hidden').slideToggle();
            }, 450);
        }
    })

    .on('click', '[js-hamburger]', function() {
        $(this).toggleClass("is-active");
        $(".header .menu").toggleClass("is-open");
        // $("body").toggleClass("is-fixed");
        // $("html").toggleClass("is-fixed");
    })

    .on('click', '[js-open-process]', function() {
        if ($(this).hasClass('is-active')) {

        } else {
            $('.object-buttons__button').removeClass('is-active');
            $(this).addClass('is-active');
            $('.object-result').css('display', 'none');
            $('.object-process').fadeIn();
        }
    })
    .on('click', '.drop-menu', function() {
        $(this).toggleClass("active");
    })

    .on('click', '[js-open-result]', function() {
        if ($(this).hasClass('is-active')) {

        } else {
            $('.object-buttons__button').removeClass('is-active');
            $(this).addClass('is-active');
            $('.object-process').css('display', 'none');
            $('.object-result').fadeIn();
        }
    });
   

    // // ////////
    // // MASONRY
    // // ////////

    // $('[js-masonry]').masonry({
    //     itemSelector: '.swiper-slide'
    // });

    // ////////
    // SLIDERS
    // ////////

    function initSliders() {

        var swiper4el = new Swiper("[js-4-slider]", {
            breakpoints: {
                1100: {
                    slidesPerView: 4,
                },
                740: {
                    slidesPerView: 3,
                }
            },
            slidesPerView: 1.19,
            navigation: {
                nextEl: '.slider-arrow--next',
                prevEl: '.slider-arrow--prev',
            },
            spaceBetween: 0,
            touchRatio: 1,
            draggable: true,
            loop: true,
        });

        var swiper = new Swiper("[js-3-slider]", {
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 2,
                },
                740: {
                    slidesPerView: 2,
                }
            },
            slidesPerView: 1.19,
            navigation: {
                nextEl: '.object-team__arrow--next',
                prevEl: '.object-team__arrow--prev',
            },
            spaceBetween: 0,
            touchRatio: 1,
            draggable: true,
            loop: false,
            watchSlidesProgress: true,
            slideVisibleClass: 'swiper-slide-visible'
        });

        var swiperBottom = new Swiper("[js-bottom-slider]", {
            breakpoints: {
                740: {
                    slidesPerView: 2,
                    // autoHeight: false,
                }
            },
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-arrow--next',
                prevEl: '.swiper-arrow--prev',
            },
            spaceBetween: 0,
            // autoHeight: true,
            touchRatio: 1,
            draggable: true,
            loop: true,
            watchSlidesProgress: true,
            slideVisibleClass: 'swiper-slide-visible',
        });

        var swiperFull = new Swiper("[js-full-slider]", {
            slidesPerView: 1,
            navigation: {
                nextEl: '.slider-arrow--next',
                prevEl: '.slider-arrow--prev',
            },
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            autoplay: {
                delay: 7500,
                disableOnInteraction: false,
            },
        });

        if ($("[js-mobile-slider]").length > 0) {
            var initSwiperMobile = function initSwiperMobile() {
                var screenWidth = $(window).width();

                if (screenWidth < 760 && swiperMobile == undefined) {
                    swiperMobile = new Swiper('[js-mobile-slider]', {
                        watchSlidesVisibility: true,
                        spaceBetween: 0,
                        loop: true,
                        slidesPerView: 1.19,
                        freeMode: false,
                        pagination: false,
                        watchSlidesProgress: true,
                        slideVisibleClass: 'swiper-slide-visible'
                    });
                } else if (screenWidth > 761 && swiperMobile != undefined) {
                    $("[js-mobile-slider]").each(function() {
                        this.swiper.destroy({
                            deleteInstance: false,
                            cleanStyles: true
                        });
                    });
                    swiperMobile = undefined; // console.log("destroy");
                }
            };

            var swiperMobile = undefined;
            initSwiperMobile();
            $(window).on('resize', function() {
                initSwiperMobile();
            });
        }

    }

});
$(window).on("load", function() {

    if ($("#mapOkskiy").length > 0) {
        if (ymaps !== undefined) {
            ymaps.ready(function() {
                var myMap = new ymaps.Map('mapOkskiy', {
                        center: [55.71429328763644, 37.7543778621127],
                        zoom: 17,
                        controls: ["searchControl", "zoomControl", "fullscreenControl"]
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    myMap2 = new ymaps.Map('mapRumyantsevo', {
                        center: [55.625021, 37.415516],
                        zoom: 15,
                        controls: ["searchControl", "zoomControl", "fullscreenControl"]
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    // Создаём макет содержимого.
                    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                        '<div class="map__info"><span>$[properties.iconContent]</span></div>'
                    ),

                    myPlacemarkWithContent = new ymaps.Placemark([55.71429328763644, 37.7543778621127], {
                        iconContent: 'Окская улица, 3к2'
                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#imageWithContent',
                        // Своё изображение иконки метки.
                        iconImageHref: APP.config.assets.images+'/deco-pin.png',
                        // Размеры метки.
                        iconImageSize: [100, 93],
                        // Смещение левого верхнего угла иконки относительно её "ножки" (точки привязки).
                        iconImageOffset: [-50, -103],
                        // Смещение слоя с содержимым относительно слоя с картинкой.
                        iconContentOffset: [30, 0],
                        // Макет содержимого.
                        iconContentLayout: MyIconContentLayout
                    });

                myPlacemarkWithContent2 = new ymaps.Placemark([55.625021, 37.415516], {
                    iconContent: 'корпус А, офис 08-08а'
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: APP.config.assets.images+'/deco-pin.png',
                    // Размеры метки.
                    iconImageSize: [100, 93],
                    // Смещение левого верхнего угла иконки относительно её "ножки" (точки привязки).
                    iconImageOffset: [-50, -103],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [30, 0],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });

                myMap.behaviors.disable('scrollZoom');
                myMap2.behaviors.disable('scrollZoom');

                myMap.geoObjects
                    .add(myPlacemarkWithContent);
                myMap2.geoObjects
                    .add(myPlacemarkWithContent2);
            });

        }
    }

});