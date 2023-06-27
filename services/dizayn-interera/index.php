<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказать индивидуальный дизайн проект интерьера в Москве под ключ");
$APPLICATION->SetPageProperty('description',"Услуги дизайнера интерьера в Москве. Заказать дизайн проект интерьера по приятной цене в коомпании ДекоАрт. Оставьте заявку на сайте или свяжитесь с нами по телефону.");
?>        <!-- BEGIN SECTION :: HERO IMAGE-->
        <section class="service_super_heder">
            <div class="img">
                <img src="/local/assets/dist/img/img315.jpg" alt="">
            </div>
            <div class="container">
                <div class="box">
                    <div class="left">
                        <div class="sub-title">Уникальный</div>
                        <h1 class="title">дизайн интерьера</h1>
                        <div class="sub-title">вашей квартиры</div>
                        <div class="text">
                            <p>Опытные дизайнеры помогут вам создать уникальный образ вашей квартиры, совместив эстетику и функциональность. Мы создаем реальные дизайн-проекты, а не просто красивые картинки. Вы сможете передать наш дизайн-проект ремонтной бригаде и получить именно тот дизайн интерьера, который полностью соответствует проекту.</p>
                            <p>К вашим услугам профессиональные дизайнеры, выпускники МАРХИ с опытом работы более 15 лет, лауреаты профессиональных конкурсов.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div vue="app-vue-components-form2" data-service="дизайн интерьера"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION :: HERO IMAGE-->
<?include(S_P_INCLUDES.'/design.php');?>
        <!-- BEGIN SECTION :: DESIGN TYPES-->
	<!-- BEGIN SECTION :: PROJECTS-->
        <section class="projects">
          <div class="container">
            <h2>Проекты</h2>
          </div>
          
          
            <div class="container container--small">
                <?$APPLICATION->IncludeComponent(
                        'x:ib.list',
                        'projects',
                        Array(
                                'SORT' => ['SORT'=>'ASC'],
                                'ELEMENTS_COUNT' => 4,
                                'FILTER' => [
                                        'IBLOCK_ID' => IDIB_PROJECTS,
                                        'ACTIVE'=>'Y',
                                        'ACTIVE_DATE'=>'Y',
                                        'SECTION_ID'=>29
                                    ],
                                'SELECT' => [
                                        'NAME',
                                        'DETAIL_PAGE_URL',
                                        'PREVIEW_PICTURE',
                                        'DETAIL_PICTURE',
                                    ],
                                    
                                
                                'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                                'CACHE_TIME' => 3600,
                                'CACHE_FILTER' => 'Y',
                                'CACHE_GROUPS' => 'Y',
                                
                                'TEMPLATE' => [
                                    'HIDE_FILTER' => 'Y',
                                    'ALL_PROJECTS' => '/projects/?SECTION=29'
                                ]
                            )
                    );?>
            </div>
            
            
        </section>
        <!-- END SECTION :: PROJECTS-->
        <section class="des-types">
            <script>
                function openMoclients (id) {
                    document.querySelector('.moclients-sidebar__item[data-id="'+id+'"]').click()
                }
            </script>
            
          <div class="container">
            <h2>типы проектов</h2>
          </div>
          <div class="container container--small">
            <div class="des-types__row">
              <div class="des-types__el">
                <div class="des-types__image">
                  <div class="image" style="background-image: url(<?=P_IMAGES?>/types-1.jpg)"></div>
                </div>
                <div class="des-types__info">
                  <p class="title">экспресс</p>
                  <p>6 страниц</p>
                </div>
                <div class="des-types__info-row">
                  <p>Стоимость</p>
                  <p class="bold">700 Р/м²</p>
                </div>
                <div class="des-types__info-row">
                  <p>Срок</p>
                  <p class="bold">10 дней</p>
                </div>
                <div class="des-types__info-list">
                            <ul>
                                <li>
                                    <p>обмерный чертеж</p>
                                </li>
                                <li>
                                    <p>3 варианта перепланировки</p>
                                </li>
                                <li>
                                    <p>итоговый вариант</p>
                                </li>
                                <li>
                                    <p>строительный план</p>
                                </li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <a href="#" class="btn" onclick="openMoclients(1)">заказать</a>
              </div>
              <div class="des-types__el">
                <div class="des-types__image">
                  <div class="image" style="background-image: url(<?=P_IMAGES?>/types-2.jpg)"></div>
                </div>
                <div class="des-types__info">
                  <p class="title">базовый</p>
                  <p>25 страниц</p>
                </div>
                <div class="des-types__info-row">
                  <p>Стоимость</p>
                  <p class="bold">2 000 Р/м²</p>
                </div>
                <div class="des-types__info-row">
                  <p>Срок</p>
                  <p class="bold">1 месяц</p>
                </div>
                <div class="des-types__info-list">
                            <ul>
                                <li>
                                    <p>обмерный чертеж</p>
                                </li>
                                <li>
                                    <p>3 варианта перепланировки</p>
                                </li>
                                <li>
                                    <p>итоговый вариант</p>
                                </li>
                                <li>
                                    <p>план демонтажа</p>
                                </li>
                                <li>
                                    <p>план после реконструкции</p>
                                </li>
                                <li>
                                    <p>схема зонирования</p>
                                </li>
                                <li>
                                    <p>развертки стен с/у</p>
                                </li>
                                <li>
                                    <p>схема теплых полов</p>
                                </li>
                                <li>
                                    <p>схема привязки оборудования</p>
                                </li>
                                <li>
                                    <p>схема раскладки плитки на полу</p>
                                </li>
                                <li>
                                    <p>план потолков</p>
                                </li>
                                <li>
                                    <p>план полов</p>
                                </li>
                                <li>
                                    <p>схема размещения карнизов</p>
                                </li>
                                <li>
                                    <p>спецификация проемов и дверей</p>
                                </li>
                                <li>
                                    <p>план электрики (принципиальный)</p>
                                </li>
                                <li>
                                    <p>схема расположения светильников</p>
                                </li>
                                <li>
                                    <p>схема технологических коммуникаций</p>
                                </li>
                                <li>
                                    <p>подбор материалов и оборудования</p>
                                </li>
                                <li>
                                    <p>ведомость отделки всех помещений</p>
                                </li>
                                <li>
                                    <p>развертка стен помещений (2-3 помещения)</p>
                                </li>
                                <li>
                                    <p>визуализация (1-3 видовые точки)</p>
                                </li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <a href="#" class="btn" onclick="openMoclients(1)">заказать</a>
              </div>
              <div class="des-types__el">
                <div class="des-types__image">
                  <div class="image" style="background-image: url(<?=P_IMAGES?>/types-3.jpg)"></div>
                </div>
                <div class="des-types__info">
                  <p class="title">полный</p>
                  <p>35 страниц</p>
                </div>
                <div class="des-types__info-row">
                  <p>Стоимость</p>
                  <p class="bold">3 000 Р/м²</p>
                </div>
                <div class="des-types__info-row">
                  <p>Срок</p>
                  <p class="bold">2 месяца</p>
                </div>
                <div class="des-types__info-list">
                            <ul>
                                <li>
                                    <p>обмерный чертеж</p>
                                </li>
                                <li>
                                    <p>3 варианта перепланировки</p>
                                </li>
                                <li>
                                    <p>итоговый вариант</p>
                                </li>
                                <li>
                                    <p>план демонтажа</p>
                                </li>
                                <li>
                                    <p>план после реконструкции</p>
                                </li>
                                <li>
                                    <p>схема зонирования</p>
                                </li>
                                <li>
                                    <p>развертки стен с/у</p>
                                </li>
                                <li>
                                    <p>схема теплых полов</p>
                                </li>
                                <li>
                                    <p>схема привязки оборудования</p>
                                </li>
                                <li>
                                    <p>схема раскладки плитки на полу</p>
                                </li>
                                <li>
                                    <p>план потолков</p>
                                </li>
                                <li>
                                    <p>план полов</p>
                                </li>
                                <li>
                                    <p>схема размещения карнизов</p>
                                </li>
                                <li>
                                    <p>спецификация проемов и дверей</p>
                                </li>
                                <li>
                                    <p>план электрики (принципиальный)</p>
                                </li>
                                <li>
                                    <p>схема расположения светильников</p>
                                </li>
                                <li>
                                    <p>схема технологических коммуникаций</p>
                                </li>
                                <li>
                                    <p>подбор материалов и оборудования</p>
                                </li>
                                <li>
                                    <p>ведомость отделки всех помещений</p>
                                </li>
                                <li>
                                    <p>развертка стен всех помещений</p>
                                </li>
                                <li>
                                    <p>визуализация (3-5 видовые точки)</p>
                                </li>
                                <li>
                                    <p>чертежи нестандартных изделий</p>
                                </li>
                                <li>
                                    <p>разрезы</p>
                                </li>
                                <li>
                                    <p>колористическое решение</p>
                                </li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <a href="#" class="btn" onclick="openMoclients(1)">заказать</a>
              </div>
            </div>
          </div>
        </section>
        <!-- END SECTION :: DESIGN TYPES-->
        <!-- BEGIN SECTION :: DESIGN TERMS-->
        <section class="des-terms">
          <div class="container">
            <h2>сроки разработки</h2>
          </div>
          <div class="container container--small">
            <div class="des-terms__grid">
              <div class="des-terms__el">
                <p class="type">квартиры</p>
                <div class="des-terms__container">
                  <div class="des-terms__line">
                    <p class="mobile">0</p>
                    <p class="mobile kvm">м²</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">10</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">20</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">30</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">40</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">50</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">60</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">70</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">80</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">90</p>
                  </div>
                  <div class="des-terms__line">
                    <p class="mobile">100</p>
                    <p class="mobile days">дней</p>
                  </div>
                  <div class="des-terms__row des-terms__row--charts">
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 10%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 15%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 20%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 26%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 35%"></div>
                    </div>
                  </div>
                </div>
                <div class="des-terms__row">
                  <div class="des-terms__column"> 
                    <p class="bold">50</p>
                    <p>1-комнатная</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">75</p>
                    <p>2-комнатная</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">100</p>
                    <p>3-комнатная</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">125</p>
                    <p>4-комнатная</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">150+</p>
                    <p>5-комнатная</p>
                  </div>
                </div>
                <p class="info">Представленные сроки разработки ориентировочные и зависят как от площади объекта, так и от сложности Технического задания</p>
              </div>
              <div class="des-terms__el">
                <p class="type">дома</p>
                <div class="des-terms__container">
                  <div class="des-terms__line">
                    <p>0</p>
                    <p class="kvm">м²</p>
                  </div>
                  <div class="des-terms__line">
                    <p>10</p>
                  </div>
                  <div class="des-terms__line">
                    <p>20</p>
                  </div>
                  <div class="des-terms__line">
                    <p>30</p>
                  </div>
                  <div class="des-terms__line">
                    <p>40</p>
                  </div>
                  <div class="des-terms__line">
                    <p>50</p>
                  </div>
                  <div class="des-terms__line">
                    <p>60</p>
                  </div>
                  <div class="des-terms__line">
                    <p>70</p>
                  </div>
                  <div class="des-terms__line">
                    <p>80</p>
                  </div>
                  <div class="des-terms__line">
                    <p>90</p>
                  </div>
                  <div class="des-terms__line">
                    <p>100</p>
                    <p class="days">дней</p>
                  </div>
                  <div class="des-terms__row des-terms__row--charts">
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 50%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 75%"></div>
                    </div>
                    <div class="des-terms__column"> 
                      <div class="des-terms__chart" style="height: 100%"></div>
                    </div>
                  </div>
                </div>
                <div class="des-terms__row">
                  <div class="des-terms__column"> 
                    <p class="bold">150+</p>
                    <p>небольшой</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">250</p>
                    <p>оптимальный</p>
                  </div>
                  <div class="des-terms__column"> 
                    <p class="bold">500+</p>
                    <p>большой</p>
                  </div>
                </div>
                <p class="info">На первой ознакомительной встрече, после составления ТЗ, мы сразу сможем сказать точный срок разработки дизайн-проекта</p>
              </div>
            </div>
          </div>
        </section>
        <!-- END SECTION :: DESIGN TERMS-->
        
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
                                'SECTION_ID' => 33
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
    $(document).ready(function(){
        $('.des-types__info-list .link').click(function(){
            $('.des-types__info-list ul').toggleClass('hide');
            if ($('.des-types__info-list ul').hasClass('hide')) {
                $('.des-types__info-list .link').html('Скрыть');
            } else {
                $('.des-types__info-list .link').html('Читать далее');
            }
            return false;
        });
        $('.ras').click(function(){
          $('.int-design__form'). slideToggle();
        });
    });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>