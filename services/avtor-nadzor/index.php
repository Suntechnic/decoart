<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


$APPLICATION->SetTitle("Авторский надзор");
$APPLICATION->SetPageProperty('description',"Авторский надзор");

$asset = \Bitrix\Main\Page\Asset::getInstance();
$asset->addJs('/services/avtor-nadzor/js/main.js');
$asset->addJs('/services/avtor-nadzor/js/roundslider.min.js');
$asset->addJs('/services/avtor-nadzor/css/slick/slick.min.js');

$asset->addCss('/services/avtor-nadzor/css/roundslider.min.css');
$asset->addCss('/services/avtor-nadzor/css/style36.css');
?>
<main>
        <section class="service_super_heder">
            <div class="img">
                <img src="img/img381.jpg" alt="">
            </div>
            <div class="container">
                <div class="box">
                    <div class="left">
                        <h1 class="title">авторский надзор</h1>
                        <div class="text">
                            <p style="color:#fff;">Услуга, осуществляемая архитектором- дизайнером с целью контроля максимального соответствия итогов ремонтно-строительных работ на объекте разработанному дизайн-проекту.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div vue="app-vue-components-form2" data-service="Авторский надзор"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vibor-nas">
            <div class="container">
                <h3>авторский надзор включает следующие условия</h3>
                <div class="spisok slider-mobile">
                    <div class="item">
                        <div class="icon"><img src="img/icon48.svg" alt=""></div>
                        <div class="text">Плановое, не реже 3-х раз <br>в месяц посещение объекта</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon49.svg" alt=""></div>
                        <div class="text">Необходимую <br>корректировку и дополнение <br>рабочей документации</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon50.svg" alt=""></div>
                        <div class="text">Подбор, закупка и контроль <br>поставки отделочных <br>и декоративных материалов <br>на объекте</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon51.svg" alt=""></div>
                        <div class="text">Консультации заказчиков <br>по любым вопросам, <br>связанным с ремонтом</div>
                    </div>
                </div>
                <h3>контроль хода работ позволяет избежать</h3>
                <div class="spisok slider-mobile">
                    <div class="item">
                        <div class="icon"><img src="img/icon52.svg" alt=""></div>
                        <div class="text">Простоев</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon53.svg" alt=""></div>
                        <div class="text">Некачественного <br>исполнения <br>ответственных этапов</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon54.svg" alt=""></div>
                        <div class="text">Перерасхода <br>строительных и <br>отделочных материалов</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon55.svg" alt=""></div>
                        <div class="text">Удорожания <br>всего объекта</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon56.svg" alt=""></div>
                        <div class="text">Ошибок в процессе <br>воплощения проекта</div>
                    </div>
                </div>
                <h3>ЧТО НЕ ВХОДИТ В АВТОРСКИЙ НАДЗОР?</h3>
                <div class="text">
                    <ul>
                        <li>Корректировка и дополнения 3D-визуализаций</li>
                        <li>Закупка и контроль поставки, приемка материалов, мебели, декора. Дизайнер может лишь присутствовать с заказчиком (или представителем заказчика), сможет дать рекомендации и советы по качеству, цвету и соответствию товара дизайн-проекту</li>
                        <li>Внесение за заказчика денежных сумм третьим лицам</li>
                        <li>Ответственность за недобросовестное отношение к работе и исполнение договоров третьими лицами</li>
                        <li>Прием скрытых работ, а также контроль соблюдения строительных технологий (это ответственность прораба и тех. надзора)</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="calculation">
            <div class="container">
                <h2>стоимость авторского надзора</h2>
                <div class="text">Посчитайте стоимость авторского надзора с помощью калькулятора, выбрав общую площадь помещения в м<sup>2</sup></div>
                <div class="box">
                    <div class="item">до 120 м<sup>2</sup> — <strong>1 000 ₽/м<sup>2</sup></strong></div>
                    <div class="item">120-250 м<sup>2</sup> — <strong>950 ₽/м<sup>2</sup></strong></div>
                    <div class="item">от 250 м<sup>2</sup> — <strong>900 ₽/м<sup>2</sup></strong></div>
                </div>
                <div class="box">
                    <div class="left">
                        <div class="zag">Выберите площадь визуализации</div>
                        <div id="range"></div>
                        <input type="hidden" id="num" min="50" max="400" value="100" class="rs-input rs-tooltip-text" />
                        <div class="metr">M<sup>2</sup></div>
                    </div>
                    <div class="right">
                        <div class="bg">
                            <div class="text">Стоимость 3D-визуализации</div>
                            <div class="itog">
                                <input type="text" name="sum-1" value="95 000 ₽" size="40" id="sum-1">
                            </div>
                            <div class="price" id="num1" data-value="950">950 <span>₽/m<sup>2</sup></span></div>
                        </div>
                    </div>
                </div>
                <div class="viezd">Разовый выезд на объект — <strong>от 5 000 ₽</strong></div>
                <div class="info">За один выезд признаётся выезд дизайнера по одному адресу. Продолжительность одного выезда — не более 3 (трёх) часов. Превышение времени более чем на 15 минут тарифицируется как следующий выезд. Указанная стоимость предполагает поездки архитектора на объект, расположенный в пределах МКАД.</div>
            </div>
        </section>
        <?$APPLICATION->IncludeComponent(
                'x:ib.list',
                'faq',
                Array(
                        'AJAX_MODE' => 'N',
                        'ELEMENTS_COUNT' => 100,
                        'SORT' => ['SORT'=>'ASC'],
                        'FILTER' => [
                                'IBLOCK_ID' => IDIB_FAQ,
                                'ACTIVE' => 'Y',
                                'ACTIVE_DATE' =>'Y',
                                'SECTION_ID' => 36
                            ],
                        'SELECT' => [
                                'PREVIEW_TEXT',
                                'DETAIL_TEXT'
                            ],
                        
                        'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                        'CACHE_TIME' => 3600,
                        'CACHE_FILTER' => 'Y',
                        'CACHE_GROUPS' => 'Y',
                        
                    )
            );?>
        <?$APPLICATION->IncludeComponent(
                'x:ib.list',
                'reviews',
                Array(
                        'AJAX_MODE' => 'N',
                        'ELEMENTS_COUNT' => 100,
                        'SORT' => ['SORT'=>'ASC'],
                        'FILTER' => [
                                'IBLOCK_ID' => IDIB_REVIEWS,
                                'ACTIVE' => 'Y',
                                'ACTIVE_DATE' =>'Y'
                            ],
                        'SELECT' => [
                                'NAME',
                                'PREVIEW_TEXT',
                                'PROPERTY_NOTE',
                                'PROPERTY_PDF',
                                'PROPERTY_PROJECT'
                            ],
                        
                        'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                        'CACHE_TIME' => 3600,
                        'CACHE_FILTER' => 'Y',
                        'CACHE_GROUPS' => 'Y',
                        
                    )
            );?>
        <script>
            function updateToolTip() {
                $("#num").val($("#range").roundSlider("option", "value"));
            }
            $(function() {
                $("#range").roundSlider({
                    sliderType: "min-range",
                    value: 100,
                    min : 50,
                    max: 400,
                    step : 1,
                    width: 40,
                    radius : 165,
                    showTooltip: true,
                    editableTooltip: true,
                    drag: updateToolTip,
                    change: updateToolTip
                });
                $("#num").val($("#range").roundSlider("option", "value"));
                $("#num").change(function() {
                    $("#range").roundSlider("option", "value", $(this).val());
                });
                jQuery("#range,#num,#num1").on("change", function (e) {
                    var item1 = jQuery("#num").val();
                    var item2 = jQuery("#num1").attr('data-value');
                    var col = Number(item1) * Number(item2);
                    var total = col;
                    totalnumber = jQuery("#sum-1");
                    var countTo = total;
                    if (isNaN(total)) {
                        alert("Необходимо вводить только числа");
                        jQuery("#sum-1").val("0");
                    } else {
                        if(Number(item1) < '58') {
                            jQuery({countNum: totalnumber.val()}).animate(
                                {
                                    countNum: countTo
                                },
                                {
                                    duration: 1000,
                                    easing: "linear",
                                    step: function () {
                                        totalnumber.val('40 000 ₽');
                                    },
                                    complete: function () {
                                        totalnumber.val('40 000 ₽');
                                    }
                                }
                            );
                        }else{
                            jQuery({countNum: totalnumber.val()}).animate(
                                {
                                    countNum: countTo
                                },
                                {
                                    duration: 1000,
                                    easing: "linear",
                                    step: function () {
                                        totalnumber.val(Math.ceil(this.countNum) + ' ₽');
                                    },
                                    complete: function () {
                                        totalnumber.val((this.countNum).toLocaleString('ru') + ' ₽');
                                    }
                                }
                            );
                        }
                    };
                });
            });
        </script>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>