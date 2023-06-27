<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Загородный дом из камня с бревенчатой баней на Симферопольском шоссе");
?><main>
        <section class="project_head">
            <div class="img">
                <img src="img/img211.jpg" alt="">
            </div>
            <div class="container">
                <div class="name">проект</div>
                <h1 class="zag">Загородный дом из камня с бревенчатой баней на Симферопольском шоссе</h1>
            </div>
        </section>
        <section class="project_cifri">
            <div class="container">
                <div class="box">
                    <div class="item">
                        <div class="name">Количество комнат</div>
                        <div class="num">7</div>
                    </div>
                    <div class="item">
                        <div class="name">Площадь, м²</div>
                        <div class="num">272</div>
                    </div>
                    <div class="item">
                        <div class="name">Санузел</div>
                        <div class="num">2</div>
                    </div>
                    <div class="item">
                        <div class="name">Виды работ</div>
                        <div class="txt">Проектирование <br>Строительство</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project_plan">
            <div class="container">
                <div class="text element-animation">Каменный дом был построен специалистами компании ДекоАрт в 2008 году. Был выполнен полный комплекс работ от проектирования и дизайна интерьера до строительства, финишной отделки и мебелировки. Дом эксплуатировался 14 лет и находился на техническом обслуживании в ДекоАрт, благодаря чему все системы жизнеобеспечения дома находятся в отличном техническом состоянии и продолжают исправно работать.</div>
                <div class="title">Обмерный план</div>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'plan1')" id="defaultOpen">1 этаж</button>
                    <button class="tablinks" onclick="openCity(event, 'plan2')">2 этаж</button>
                    <button class="tablinks" onclick="openCity(event, 'plan3')">баня</button>
                </div>
                <div id="plan1" class="tabcontent">
                    <img src="img/plan8.png" alt="">
                </div>
                <div id="plan2" class="tabcontent">
                    <img src="img/plan9.png" alt="">
                </div>
                <div id="plan3" class="tabcontent">
                    <img src="img/plan10.png" alt="">
                </div>
                </div>
        </section>
        <?$APPLICATION->IncludeComponent(
                'x:ib.list',
                'review',
                Array(
                        'AJAX_MODE' => 'N',
                        'ELEMENTS_COUNT' => 1,
                        'SORT' => ['SORT'=>'ASC'],
                        'FILTER' => [
                                'IBLOCK_ID' => IDIB_REVIEWS,
                                'ACTIVE' => 'Y',
                                'ACTIVE_DATE' =>'Y',
                                'PROPERTY_PROJECT' => 56
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

<!--<div class="otziv">
                    <div class="title element-animation">отзыв</div>
                    <div class="box">
                        <div class="left">
                            <div class="zag element-animation">Семья Иванниковых</div>
                            <div class="txt element-animation">Владелецы загородного дома</div>
                            <a href="#" class="btn btn--icon element-animation">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 9.7 12.1" xml:space="preserve">
                                    <path d="M9.4 11.8H.3V.3h7.3l1.8 1.8z" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                                    <path d="M7.5.5v1.8h1.9" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                                    <path d="M1.9 2.9h4.2M1.9 4.3h5.9M1.9 5.7h5.9M1.9 7h5.9M1.9 8.5h5.9" fill="none" stroke="#231f20" stroke-width=".6" stroke-miterlimit="10"></path>
                                </svg> полный отзыв
                            </a>
                        </div>
                        <div class="right element-animation">«…У нас столько счастья и положительных эмоций от проживания в этом доме!!... »</div>
                    </div>
                </div>-->
        <section class="project_slider">
            <div class="item">
                <div class="img">
                    <img src="img/img212.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img213.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img214.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Баня</div>
                    <div class="box">
                        <div class="left">
                            <div class="text element-animation">Общая площадь:</div>
                            <div class="blod element-animation">110 м²</div>
                        </div>
                        <div class="right">
                            <div class="text element-animation">Наружные стены:</div>
                            <div class="blod element-animation">оцилиндрованное бревно 180 мм</div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="left">
                            <div class="text element-animation">Фундамент:</div>
                            <div class="blod element-animation">монолитный железобетонный</div>
                        </div>
                        <div class="right">
                            <div class="box">
                                <div class="left">
                                    <div class="text element-animation">Кровля:</div>
                                    <div class="blod element-animation">металлочерепица, мягкая кровля</div>
                                </div>
                                <div class="right">
                                    <div class="text element-animation">Перекрытия:</div>
                                    <div class="blod element-animation">монолитные железобетонные</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img">
                    <img src="img/img215.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img216.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img217.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="btns">
                        <button type="button" class="slick-arrow slick-prev prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.18 477.18" xml:space="preserve"><path d="M360.73 229.07 135.63 3.97c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" fill="#00b8e4"></path></svg></button>
                        <div class="slider-num">
                            <span></span>
                            <span></span>
                        </div>
                        <button type="button" class="slick-arrow slick-next next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.18 477.18" xml:space="preserve"><path d="M360.73 229.07 135.63 3.97c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" fill="#00b8e4"></path></svg></button>
                    </div>
                    <div class="slider-1 slider1">
                        <div>
                            <div class="img">
                                <img src="img/img218.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img">
                                <img src="img/img219.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img">
                                <img src="img/img220.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img">
                                <img src="img/img221.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<link href="css/slick/slick.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<script type="text/javascript"  src="css/slick/slick.min.js"></script>
<link href="css/style24.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<script type="text/javascript"  src="js/main.js"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>