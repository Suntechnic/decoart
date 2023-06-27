<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


$APPLICATION->SetTitle("Комплектация");
$APPLICATION->SetPageProperty('description',"Комплектация");

$asset = \Bitrix\Main\Page\Asset::getInstance();

$asset->addCss('/services/complect/css/style38.css');
?>
<main>
    <section class="service_super_heder">
        <div class="img">
            <img src="img/img388.jpg" alt="">
        </div>
        <div class="container">
            <div class="box">
                <div class="left">
                    <h1 class="title">Комплектация</h1>
                    <div class="sub-title">чистовыми материалами, мебелью и оборудованием</div>
                    <div class="text">
                        <p>Комплексный подход при подборе материалов на этапе проектирования совместно с дизайнером приводит к существенной экономии средств. Это связано с закупкой качественных долговечных материалов, работой с проверенными поставщиками и налаженному сотрудничеству. Важно помнить обо всем и не оставить без внимания ни один элемент. Все материалы должны быть куплены в необходимом объеме, а также полностью удовлетворять концепции проекта.</p>
                        <p>Мы возьмем на себя все работы по комплектации вашего объекта и при этом гарантируем вам экономию за счет грамотного соотношения цены и качества.</p>
                    </div>
                </div>
                <div class="right">
                    <div vue="app-vue-components-form2" data-service="Комплектация"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="int-design">
        <div class="container">
            <h2>этапы работы</h2>
            <div class="int-design__item">
                <p class="int-design__title is-active" js-open-design-info="">подбор<span>1</span></p>
                <div class="int-design__hidden" style="display: block">
                    <div class="text">
                        <p>Подбор конкретных предметов интерьера, мебели, отделочных материалов, сантехники, света, инженерных систем и другого оборудования, в соответствии с дизайн проектом и выделенным на это бюджетом.</p>
                        <p>Для этого в процессе создания дизайн проекта дизайнер вместе с заказчиком выезжает в строительные магазины, шоу-румы, салоны или на производство, либо осуществляют подбор в офисе студии, по каталогам.</p>
                    </div>
                    <div class="zag">Дизайнер поможет с подбором</div>
                    <div class="box">
                        <div class="item">
                            <div class="img"><img src="img/icon57.svg" alt=""></div>
                            <div class="name">Чистовых <br>материалов</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon58.svg" alt=""></div>
                            <div class="name">Сантехнического <br>оборудования</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon59.svg" alt=""></div>
                            <div class="name">Кухни и кухонного <br>оборудования</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon60.svg" alt=""></div>
                            <div class="name">Фурнитуры <br>(оконной, дверной, <br>мебельной)</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon61.svg" alt=""></div>
                            <div class="name">Электрического и светового <br>оборудования</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon62.svg" alt=""></div>
                            <div class="name">Предметов <br>декора</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon63.svg" alt=""></div>
                            <div class="name">Предметов мебели</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon64.svg" alt=""></div>
                            <div class="name">Окон и дверей</div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon65.svg" alt=""></div>
                            <div class="name">Текстиля <br>(штор, покрывал и т.д.)</div>
                        </div>
                    </div>
                    <div class="sub-zag">и многого другого</div>
                    <div class="zag">преимущества подбора с Дизайнером</div>
                    <div class="spisok">
                        <div class="item">
                            <div class="img"><img src="img/icon66.svg" alt=""></div>
                            <div class="right">
                                <div class="tit">Представим несколько вариантов под любые запросы</div>
                                <div class="txt">Можно выбирать материалы самим. Но если поручить эту задачу дизайнеру, он, имея собственные базы проверенных поставщиков и производителей, в короткие сроки подберём несколько вариантов образцов, которые будут идеально удовлетворять требованиям у желательному результату по цене и качеству. Вам останется лишь выбрать окончательный вариант.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon67.svg" alt=""></div>
                            <div class="right">
                                <div class="tit">Обеспечим профессиональный подход и опертивную реакцию</div>
                                <div class="txt">Дизайнер в силу специфики своей деятельности всегда в курсе новинок и модных тенденций. Он прекрасно сориентирует вас в подходящих для вашего интерьера материалах, о которых вы могли даже не слышать.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon68.svg" alt=""></div>
                            <div class="right">
                                <div class="tit">Гарантируем решения, проверенные опытом</div>
                                <div class="txt">Ещё одно преимущество дизайнера — база образцов и уже реализованные проекты. Иногда клиент озвучивает потребность, лишь смутно представляя, что конкретно хочет получить в итоге. Дизайнер с помощью наглядных примеров поможет сформулировать предпочтения и подобрать конкретный перечень.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon69.svg" alt=""></div>
                            <div class="right">
                                <div class="tit">Предупредим о возможных проблемах</div>
                                <div class="txt">Потребители обычно ориентируются на визуальные качества материала и базовые характеристики, упуская из вида массу нюансов, например, как «ведёт» себя матерал во время укладки и при эксплуатации. Дизайнер на основе своего опыта может посоветовать лучший вариант.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="img/icon70.svg" alt=""></div>
                            <div class="right">
                                <div class="tit">Поможем определить стилевые предпочтения</div>
                                <div class="txt">Дизайнер поможет подобрать наиболее стилистически оправданные, функциональные, удовлетворяющие по всем параметрам объекты, составляющие гармоничный интерьер.</div>
                            </div>
                        </div>
                    </div>
                    <div class="zag">стоимость подбора материалов</div>
                    <div class="txt">Услуги подбора материалов можно дополнительно заказать и после создания дизайн-проекта</div>
                    <div class="tables">
                        <div class="item">
                            <div class="block">
                                <div class="name">при создании проекта</div>
                                <div class="price">бесплатно</div>
                            </div>
                            <ul>
                                <li>Не более 3-х выездов</li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="block">
                                <div class="name">разовый</div>
                                <div class="price">от <span class="num">5 000</span> ₽<span>*</span></div>
                            </div>
                            <ul>
                                <li>Разовый выезд дизайнера в салон-магазин или на объект</li>
                            </ul>
                            <span><i>*</i> Стоимость указана за выезд дизайнера по Москве</span>
                        </div>
                        <div class="item">
                            <div class="block">
                                <div class="name">в офисе <br>по каталогам</div>
                                <div class="price">от <span class="num">1 500</span> ₽/час<span>*</span></div>
                            </div>
                            <ul>
                                <li>Подбор материалов и оборудования</li>
                            </ul>
                            <span><i>*</i> Свыше 1 часа оплачивается дополнительно</span>
                        </div>
                    </div>
                    <div class="info">За один выезд признаётся выезд дизайнера по одному адресу. Продолжительность одного выезда — не более 3 (трёх) часов. Превышение времени более чем на 15 минут тарифицируется как следующий выезд. В день возможно не более 2 (двух) выездов.</div>
                </div>
            </div>
            <div class="int-design__item">
                <p class="int-design__title" js-open-design-info="">комплектация<span>2</span></p>
                <div class="int-design__hidden">
                    <div class="text-big">
                        <p>Составление сметы по чистовым материалам, оборудованию, мебели и предметам декора на основе утвержденного проекта, организация закупок, доставки, сборки.</p>
                    </div>
                    <div class="infor">
                        <span>Стоимость работ по комплектации:</span>
                        <strong>бесплатно<i>*</i></strong>
                    </div>
                    <div class="txt">Ввиду продолжительной работы на рынке дизайна и ремонта, можем предоставить свои партнерские скидки от поставщиков чистовых материалов, мебели и оборудования, обеспечивая таким образом итоговую стоимость ниже розничной, для своих заказчиков.</div>
                    <div class="txt-t"><span>*</span> Из магазинов партнёров</div>
                    <div class="txt-t"><span>**</span> Или 10% от стоимости материалов, мебели и оборудования из остальных магазинов.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="nashi-priem">
        <div class="container">
            <h2>преимущества подбора с нами</h2>
            <div class="box">
                <div class="left">
                    <div class="item">
                        <div class="icon"><img src="img/icon66.svg" alt=""></div>
                        <div class="text">Предоставим несколько вариантов решений, которые будут идеально соответствовать дизайн-проекту</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon72.svg" alt=""></div>
                        <div class="text">Профессионально подберём современные материалы и обрудование, мы всегда в курсе новинок и модных тенденций</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon73.svg" alt=""></div>
                        <div class="text">Ценим и экономим ваше время. Все возникающие проблемы решаем сами</div>
                    </div>
                </div>
                <div class="right">
                    <div vue="app-vue-components-form2" data-service="Комплектация"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="material">
        <div class="container">
            <h2>комплектация по выгодным ценам</h2>
            <div class="text">Мы предлагаем выгодные цены на чистовые материалы, мебель, оборудование, двери, освещение от наших партнёров:</div>
            <div class="spisok">
                <div class="item">
                    <div class="img"><img src="img/img355.jpg" alt=""></div>
                    <div class="txt">Магазин слэбов из камня</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img356.jpg" alt=""></div>
                    <div class="txt">Фабрика по производству мебели</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img357.jpg" alt=""></div>
                    <div class="txt">Фабрика по производству дверей и мебели</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img358.jpg" alt=""></div>
                    <div class="txt">Краски для внутренней и внешней отделки</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img359.jpg" alt=""></div>
                    <div class="txt">Керамические изделия и сантехническое оборудование</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img360.jpg" alt=""></div>
                    <div class="txt">Керамическая плитка и керамический гранит</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img361.jpg" alt=""></div>
                    <div class="txt">Керамическая плитка и керамический гранит</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img362.jpg" alt=""></div>
                    <div class="txt">Плитка, линолеум, ламинат, паркетная доска</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img363.jpg" alt=""></div>
                    <div class="txt">Флизелиновые, бумажные, виниловые, флоковые обои</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img364.jpg" alt=""></div>
                    <div class="txt">Виниловые и флизелиновые обои</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img365.jpg" alt=""></div>
                    <div class="txt">Раковины, ванны, смесители, душевые кабины, туалеты</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img366.jpg" alt=""></div>
                    <div class="txt">Смесители, аксессуары, сантехническая арматура</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img367.jpg" alt=""></div>
                    <div class="txt">Сухие строительные смеси, гипсокартон</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img368.jpg" alt=""></div>
                    <div class="txt">Трубы и фитинги для водопровода, отопления и канализации</div>
                </div>
                <div class="item">
                    <div class="img"><img src="img/img369.jpg" alt=""></div>
                    <div class="txt">Сухие строительные смеси</div>
                </div>
            </div>
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
                            'SECTION_ID' => 38
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

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>