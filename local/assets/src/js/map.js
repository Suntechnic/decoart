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