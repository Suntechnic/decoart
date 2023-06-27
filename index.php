<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ДекоАрт — дизайн и ремонт квартир в Москве, элитная студия дизайна интерьера");
$APPLICATION->SetPageProperty('description',"Компания ДекоАрт оказывает профессиональные услуги по проектированию и дизайну помещений, а также проводит строительные и ремонтные работы под ключ. Гарантия качества!");
?>

<?$APPLICATION->IncludeComponent(
        'x:ib.list',
        'hero2',
        Array(
                'AJAX_MODE' => 'N',
                'ELEMENTS_COUNT' => 10,
                'SORT' => ['SORT'=>'ASC'],
                'FILTER' => [
                        'IBLOCK_ID' => IDIB_BANERS,
                        'SECTION_ID' => 26,
                        'ACTIVE' => 'Y'
                    ],
                'SELECT' => [
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DETAIL_PICTURE',
                        'PREVIEW_TEXT',
                        'DETAIL_TEXT',
                        'PROPERTY_URL'
                    ],
                
                'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                'CACHE_TIME' => 3680,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                
                'AJAX_OPTION_SHADOW' => 'Y',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'Y',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                
            )
    );?>




        <!-- BEGIN SECTION :: GALLERY-->
        <section class="gallery">
          <div class="container">
            <h2>галерея работ</h2>
            <div class="gallery__slider" js-mobile-slider>
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="gallery__item" href="/projects/?TYPE=Квартиры"> 
                    <div class="gallery__image"><img src="<?=P_IMAGES?>/gallery-1.jpg" alt=""></div>
                    <div class="gallery__info">
                      <p class="large">квартиры</p>
                      <p>смотреть</p>
                    </div></a></div>
                <div class="swiper-slide"><a class="gallery__item" href="/projects/?TYPE=Коттеджи"> 
                    <div class="gallery__image"><img src="<?=P_IMAGES?>/gallery-2.jpg" alt=""></div>
                    <div class="gallery__info">
                      <p class="large">коттеджи</p>
                      <p>смотреть</p>
                    </div></a></div>
                <div class="swiper-slide"><a class="gallery__item" href="/projects/?TYPE=Офисы"> 
                    <div class="gallery__image"><img src="<?=P_IMAGES?>/gallery-3.jpg" alt=""></div>
                    <div class="gallery__info">
                      <p class="large">офисы</p>
                      <p>смотреть</p>
                    </div></a></div>
                <div class="swiper-slide"><a class="gallery__item" href="/projects/?TYPE=Коммерчиские объекты"> 
                    <div class="gallery__image"><img src="<?=P_IMAGES?>/gallery-4.jpg" alt=""></div>
                    <div class="gallery__info">
                      <p class="large">коммерческие объекты</p>
                      <p>смотреть</p>
                    </div></a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- END SECTION :: GALLERY-->
        
        
        
<?include(S_P_INCLUDES.'/services.php');?>

<?$APPLICATION->IncludeFile(
		P_INCLUDES.'/calculator.php',
		array(
                'FULLPRICELISTSHOW' => 'N',
            ),
		array(
				"MODE"      => "html",                                           // будет редактировать в веб-редакторе
				"NAME"      => "включаемую область",      // текст всплывающей подсказки на иконке
			)
	);?>

<!--<div vue="app-vue-components-form"></div>-->
        
<?//include(S_P_INCLUDES.'/instagram.php');?>
        
<?//include(S_P_INCLUDES.'/design.php');?>

<?//include(S_P_INCLUDES.'/articles.php');?>

      

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>