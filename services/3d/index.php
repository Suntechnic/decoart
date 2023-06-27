<?
//define('APPLICATION_ENV', 'dev');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("3D визуализация - DecoArt");
$APPLICATION->SetPageProperty('description',"3D визуализация интерьера вашего будущего дома — дизайн интерьера глазами дизайнера");

$asset = \Bitrix\Main\Page\Asset::getInstance();

$asset->addJs('/services/3d/js/roundslider.min.js');
?>
<link href="/services/3d/css/style34.css" type="text/css" rel="stylesheet">
<link href="/services/3d/css/roundslider.min.css" type="text/css" rel="stylesheet">

<section class="service_super_heder">
    <div class="img">
        <img src="img/img373.jpg" alt="">
    </div>
    <div class="container">
        <div class="box">
            <div class="left">
                <h1 class="title">3d-визуализация</h1>
                <div class="sub-title">вашей квартиры</div>
                <div class="text">
                    <p>3D – визуализация помогает увидеть в объеме ваш будущий интерьер с разных ракурсов, понять, как будут сочетаться мебель, оборудование, материалы. Позволяет смоделировать разные типы освещения.</p>
                    <p>Ценность данной услуги состоит в том, что можно своевременно внести корректировки на этапе создания  дизайн-проекта, до его воплощения, чем потом вносить изменения в уже сделанный ремонт.</p>
                    <p>По итогам работ, вы получите набор изображений вашего интерьера или экстерьера в фотографическом качестве.</p>
                </div>
            </div>
            <div class="right">
                <div vue="app-vue-components-form2" data-service="3D визуализации"></div>
            </div>
        </div>
    </div>
</section>

<section class="vibor-nas">
    <div class="container">
        <h2>зачем нужна 3d-визуализация?</h2>
        <div class="spisok">
            <div class="item">
                <div class="icon"><img src="img/icon42.svg" alt=""></div>
                <div class="text">Показывает все детали <br>вашего интерьера</div>
            </div>
            <div class="item">
                <div class="icon"><img src="img/icon43.svg" alt=""></div>
                <div class="text">Моделирует освещение объекта, <br>учитывая все источники света</div>
            </div>
            <div class="item">
                <div class="icon"><img src="img/icon44.svg" alt=""></div>
                <div class="text">Учитывает все пропорции <br>и размеры</div>
            </div>
            <div class="item">
                <div class="icon"><img src="img/icon45.svg" alt=""></div>
                <div class="text">Отображает цвета и текстуру <br>материалов</div>
            </div>
            <div class="item">
                <div class="icon"><img src="img/icon46.svg" alt=""></div>
                <div class="text">Позволяет увидеть интерьер <br>до окончания ремонта</div>
            </div>
            <div class="item">
                <div class="icon"><img src="img/icon47.svg" alt=""></div>
                <div class="text">Даёт возможность вовремя внести <br>изменения в проект</div>
            </div>
        </div>
    </div>
</section>

<section class="calculation">
    <div class="container">
        <h2>стоимость 3d-визуализации</h2>
        <div class="text">Посчитайте стоимость визуализации с помощью калькулятора, выбрав общую площадь помещения в м<sup>2</sup></div>
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
                        <input type="text" name="sum-1" value="84 000 ₽" size="40" id="sum-1">
                    </div>
                    <div class="price" id="num1" data-value="800">800 <span>₽/m<sup>2</sup></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects">
    <div class="container">
        <h2>Примеры 3d-визуализации</h2>
    </div>
    
    <div class="container container--small">
    <?$APPLICATION->IncludeComponent(
            'x:ib.list',
            'projects',
            Array(
                    'SORT' => ['SORT'=>'ASC'],
                    
                    'FILTER' => [
                            'IBLOCK_ID' => IDIB_PROJECTS,
                            'ACTIVE'=>'Y',
                            'ACTIVE_DATE'=>'Y',
                            'ID' => [123,13,22,17],
                        ],
                    'SELECT' => [
                            'NAME',
                            'DETAIL_PAGE_URL',
                            'PREVIEW_PICTURE',
                            'DETAIL_PICTURE',
                        ],
                        
                    'TEMPLATE' => ['HIDE_FILTER' => 'Y'],
                    'CACHE_TYPE' => 'N', //APPLICATION_ENV=='dev'?'N':'A',
                    'CACHE_TIME' => 3600,
                    'CACHE_FILTER' => 'Y',
                    'CACHE_GROUPS' => 'Y',
                    
                )
        );?>
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
                            'SECTION_ID' => 35
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>