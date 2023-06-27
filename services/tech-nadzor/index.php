<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


$APPLICATION->SetTitle("Технический надзор");
$APPLICATION->SetPageProperty('description',"Технический надзор");

$asset = \Bitrix\Main\Page\Asset::getInstance();
$asset->addCss('/services/tech-nadzor/css/style35.css');

?><main>
    <section class="service_super_heder">
      <div class="img">
        <img src="img/img378.jpg" alt="">
      </div>
      <div class="container">
        <div class="box">
          <div class="left">
            <h1 class="title">технический надзор</h1>
            <div class="text">
              <p style="color:#fff;">Контроль качества строительно-монтажных работ (СМР) производимый с целью выяснения и обеспечения соответствия выполняемых работ и применяемых материалов, изделий и конструкций требованиям проекта, СниП и других действующих нормативных документов.</p>
            </div>
          </div>
          <div class="right">
            <div vue="app-vue-components-form2" data-service="Технический надзор"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="big-design">
        <div class="container">
            <div class="text">
              <p>Необходим при выполнении работ на объекте сторонними подрядчиками, включает в себя контроль за:</p>
              <ul>
                <li>Соблюдением сроков и технологии производимых работ</li>
                <li>Соответствием строительно-ремонтных работ утвержденным проектным решениям.</li>
                <li>Соответствием сметной стоимости производимых работ и закупаемых материалов:</li>
              </ul>
            </div>
          <div class="zag">разовый</div>
          <div class="text">Разовый выезд инженера, проверка объёмов качества выполненных работ, составление акта и выставление предписаний.</div>
          <div class="zag">полный</div>
          <div class="text">Технический надзор на весь срок производства ремонта. Подразумевает выезды на объект от 1 до 3 раз в неделю, вплоть до окончания ремонта. Все найденные недочёты фиксируются в акте, который выступает в качестве документа, регистрирующего недостатки проведённых работ.</div>
        </div>
    </section>
    <section class="int-design">
      <div class="container">
        <h2>этапы работ технадзора</h2>
        <div class="text">Технический надзор сопровождает работы на протяжении всего ремонта. Вы можете уехать во время проведения работ — инженер технического надзора будет общаться с вами удалённо и отправлять отчёты и фотографии с объекта.</div>
        <div class="int-design__item">
          <p class="int-design__title is-active" js-open-design-info="">знакомство с фронтом работ<span>1</span></p>
          <div class="int-design__hidden" style="display: block">
            <div class="text">
              <p>Происходит изучение дизайн-проекта и сметы, выезд инженера технического надзора на объект для ознакомления с фронтом работ, состоянием объекта.</p>
            </div>
            <div class="box">
              <div class="img"><img src="img/img379.jpg" alt=""></div>
              <div class="img"><img src="img/img380.jpg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="int-design__item">
          <p class="int-design__title" js-open-design-info="">организация стенда качества<span>2</span></p>
          <div class="int-design__hidden">
            <div class="text">
              <p><strong>В состав стенда качества входит:</strong></p>
              <ul>
                <li>Дизайн-проект, электропроект</li>
                <li>Смета или перечень работ</li>
                <li>Технические карты. Заявки на материал. Каталог материалов. Предписания.</li>
                <li>Документы от заказчика</li>
                <li>Сетевой график производства работ. График поставки материалов от заказчика</li>
                <li>Аптечка</li>
                <li>Огнетушитель</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="int-design__item">
          <p class="int-design__title" js-open-design-info="">контроль хода работ<span>3</span></p>
          <div class="int-design__hidden">
            <div class="text">
              <p>На данном этапе инженер посещает объект 1-3 раза в неделю.</p>
              <p><strong>По итогам каждого выезда:</strong></p>
              <ul>
                <li>Составляется запись о визите, выявленных недоделках, предписаниях об исправлении, проверка исправления выявленных ранее недочётах.</li>
                <li>Фото фиксация состояния объекта</li>
                <li>Проверка наличия материалов, соответствие материалов, заявленным в документах</li>
                <li>Проверка сроков, предписание прорабу относительно сроков</li>
                <li>Осуществляется приёмка выполненного объёма работ, контроль качества</li>
                <li>Проверка / контроль выполнения работ в соответствии с дизайн-проектом (техническая часть) и строительным нормам</li>
                <li>Составление актов скрытых работ</li>
              </ul>
              <p>При необходимости (или с удобной для вас периодичностью) мы проводим рабочие совещания.</p>
            </div>
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
                                'SECTION_ID' => 37
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
<link rel="stylesheet" href="css/style35.css" type="text/css">
</main>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>