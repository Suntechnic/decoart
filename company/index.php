<?
//define('APPLICATION_ENV', 'dev');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Компания DecoArt - дизайн интерьеров, ремонт и отделка бизнес класса, строительство и проектирование");
$APPLICATION->SetPageProperty('description',"Информация о компании ДекоАрт. Дизайн интерьеров, индивидуальное проектирование, строительство и ремонт домов бизнес класса.");
?><!-- BEGIN SECTION :: HERO IMAGE-->
        <section class="hero-image"><img class="hero-image__image hero-image__image--company" src="<?=P_IMAGES?>/hero-image-company.jpg" alt="">
          <div class="container">
            <div class="hero-image__top">
              <h1>Компания</h1>
            </div>
          </div>
          <div class="container container--small">
            <div class="hero-image__info">
              <p>С начала своей деятельности в 2006 году и по настоящее время студией успешно выполнено большое количество проектов, многие из них становились победителями престижных конкурсов и публиковались в профессиональных печатных изданиях.
Сегодня в компании работает команда специалистов, реализующих полный комплекс работ по проектным и ремонтно-строительным работам.</p>

              <div class="hero-image__button"><a class="btn btn--icon" href="<?=\App\Stringstorage::getInstance()->getStringVal('pesentlink');?>">скачать презентацию
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 9.7 12.1" xml:space="preserve">
                    <path d="M9.4 11.8H.3V.3h7.3l1.8 1.8z" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                    <path d="M7.5.5v1.8h1.9" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                    <path d="M1.9 2.9h4.2M1.9 4.3h5.9M1.9 5.7h5.9M1.9 7h5.9M1.9 8.5h5.9" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                  </svg></a></div>
            </div>
          </div>
        </section>
        <!-- END SECTION :: HERO IMAGE-->
        <section class="company-about">
          <div class="container container--small">
            <div class="company-about__grid">
              <div class="company-about__team">
                <div class="company-about__team-el">
                  <div class="team__item">
                    <div class="team__image">
                      <div class="image" style="background-image: url(<?=P_IMAGES?>/konst-zhilchenko.jpg)"></div>
                    </div>
                    <p class="name">Константин Жильченко</p>
                    <p class="about">Руководитель decoart</p>
                  </div>
                </div>
                <div class="company-about__team-el">
                  <div class="team__item">
                    <div class="team__image">
                      <div class="image" style="background-image: url(<?=P_IMAGES?>/ruslan-moroshanu.jpg)"></div>
                    </div>
                    <p class="name">Руслан</br>Морошану</p>
                    <p class="about">Главный инженер проектов</p>
                  </div>
                </div>
              </div>
              <div class="company-about__info">
                <p class="blue"> <span>В работе студии применяются передовые системы менеджмента: TQM (Total Quality Management) и японская система   контроля качества Kaizen</span></p>
                <p class="info">Деятельность всех специалистов компании направлена на создание стильного, уникального, комфортного, соответствующего строительным нормам и правилам, а главное удовлетворяющего пожеланиям и требованиям клиента, дизайн- проекта интерьера или архитектурного проекта дома</p>
              </div>
            </div>
          </div>
        </section>
        <!-- BEGIN SECTION :: TEAM-->
        <section class="team">
          <div class="container">
            <h2>команда</h2>
          </div>
          <div class="container container--small">
            <div class="team__row">
              <div class="team__el">
                <div class="team__item">
                  <div class="team__image">
                    <div class="image" style="background-image: url(<?=P_IMAGES?>/yuriy-leontev.jpg)"></div>
                  </div>
                  <p class="name">Юрий</br>Леонтьев</p>
                  <p class="about">Главный инженер</p>
                </div>
              </div>

              <div class="team__el">
                <div class="team__item">
                  <div class="team__image">
                    <div class="image" style="background-image: url(<?=P_IMAGES?>/ustinova_c1.png)"></div>
                  </div>
                  <p class="name">Елена Устинова</p>
                  <p class="about">Дизайнер</p>
                </div>
              </div>

              <div class="team__el">
                <div class="team__item">
                  <div class="team__image">
                    <div class="image" style="background-image: url(<?=P_IMAGES?>/marina-blinovskaya.jpg)"></div>
                  </div>
                  <p class="name">марина блиновская</p>
                  <p class="about">менеджер проектов</p>
                </div>
              </div>
              <div class="team__el">
                <div class="team__item">
                  <div class="team__image">
                    <div class="image" style="background-image: url(<?=P_IMAGES?>/arkadiy-taratuta.jpg)"></div>
                  </div>
                  <p class="name">аркадий таратута</p>
                  <p class="about">архитектор</p>
                </div>
              </div><a class="team__el team__el--stay" href="/jobs/"> 
                <div class="team__image">
                  <div class="image"></div>
                  <p>станьте частью команды<img class="arrow" src="<?=P_IMAGES?>/blue-arrow.svg" alt=""></p>
                </div></a>
            </div>
          </div>
        </section>
        <!-- END SECTION :: TEAM-->
        
        
        <?include(S_P_INCLUDES.'/achivs.php');?>
        
        <a name="otzivi"></a>
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
        
        <?include(S_P_INCLUDES.'/jobs.php');?>

<section class="rekvi">
   <div class="container">
      <h2>Реквизиты</h2>
      <div class="text">
<p>Общество с ограниченной ответственностью «Деко Арт»</p>
<p>Юридический адрес: 109117, г. Москва, ул. Окская, д.3, корп.2, помещение XI</p>
<p>Фактический адрес: г. Москва, БП Румянцево, корпус А, офис 08-08а </p>
<p>ИНН/КПП: 9721151683/772101001 </p>
<p>ОГРН: 1217700593043 </p>
      </div>
   </div>
</section>
      
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<style>
	.slide-app{
		padding-bottom: 100px;
	}
	.slide-app .slick-slide {
		padding: 0 20px;
	}
	.slide-app .slick-arrow{
		width: 60px;
		height: 60px;
		border-radius: 6px;
		border: 1px solid #00b8e4;
		-webkit-transition: all 0.25s ease-in-out;
		-o-transition: all 0.25s ease-in-out;
		transition: all 0.25s ease-in-out;
		cursor: pointer;
		position: absolute;
		background: transparent;
		font-size: 0;
		z-index: 1;
		bottom: 0;
	}
	.slide-app .slick-arrow.slick-prev {
		background: url(/local/assets/dist/img/arrow.svg) 50% 50% no-repeat;
		background-size: 27px;
		transform: rotate(180deg);
    	right: 80px;
	}
	.slide-app .slick-arrow.slick-next {
		background: url(/local/assets/dist/img/arrow.svg) 50% 50% no-repeat;
		background-size: 27px;
		right: 0;
	}
	.slide-app .slick-arrow.slick-prev:hover, 
	.slide-app .slick-arrow.slick-next:hover {
		background: #00b8e4 url(/local/assets/dist/img/arrow1.svg) 50% 50% no-repeat;
		background-size: 27px;
	}
	@media only screen and (max-width: 760px){
		.slide-app .slick-arrow{
			width: 40px;
			height: 40px;
			border-radius: 6px;
		}
		.slide-app .slick-list{
			padding: 0px 100px 0 0 !important;
		}
		.slide-app .slick-arrow.slick-prev{
			right: 60px;
		}
	}
</style>
<link href="/projects/dvukhkomnatnaya-kvartira-dlya-molodoy-semyi/css/slick/slick.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<script type="text/javascript"  src="/projects/dvukhkomnatnaya-kvartira-dlya-molodoy-semyi/css/slick/slick.min.js"></script>
<script>
$('.slide-app').slick({
  infinite: true,
arrows: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 761,
      settings: {
		slidesToShow: 1,
		centerMode: true,
        centerPadding: '40px',
      }
    }
  ]
});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>