<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн интерьера в одноэтажном доме из клеенного бруса в посёлке Руза Фемили Парк");
?><main>
        <section class="project_head">
            <div class="img">
                <img src="img/img225.jpg" alt="">
            </div>
            <div class="container">
                <div class="name">проект</div>
                <h1 class="zag">Дизайн интерьера в одноэтажном доме из клееного бруса в посёлке Руза Фемили Парк</h1>
            </div>
        </section>
        <section class="project_cifri">
            <div class="container">
                <div class="box">
                    <div class="item">
                        <div class="name">Количество комнат</div>
                        <div class="num">4</div>
                    </div>
                    <div class="item">
                        <div class="name">Площадь, м²</div>
                        <div class="num">150</div>
                    </div>
                    <div class="item">
                        <div class="name">Санузел</div>
                        <div class="num">2</div>
                    </div>
                    <div class="item">
                        <div class="name">Виды работ</div>
                        <div class="txt">Дизайн-проект <br><br>Подбор материалов и оборудования</div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="project_plan">
            <div class="container">
		<div class="desing">
                    <div class="left">
                        <div class="img">
                            <img src="img/ustproject.jpg" alt="">
                        </div>
                        <div class="name element-animation">елена устинова</div>
                        <div class="dolj element-animation">дизайнер проекта</div>
                    </div>
                    <div class="right element-animation">Дом предназначен для комфортного проживания успешной женщины, к которой в выходные могут заехать взрослый сын с семьей. Нужно было создать пространство, которое совмещало бы в себе весь функционал необходимый для комфортной жизни и отдыха.</div>
                </div>
                <div class="title">План дома</div>
                <div class="tabcontent">
                    <img src="img/plan11.jpg" alt="">
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
                                'PROPERTY_PROJECT' => 104
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
        
        <section class="project_slider">
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Гостиная</div>
                    <div class="text element-animation">Прелесть планировки заключается в лаконизме решений, здесь нет извилистых коридоров или неудобных выступов — весь объём поделён на простые и ясные формы, а панорамное остекление впускает природу за окном в жилое пространство дома.</div>
                    <div class="box">
                        <div class="img">
                            <img src="img/img226.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img227.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img228.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img229.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img230.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img231.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img232.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img233.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Коридор</div>
                    <div class="text element-animation">Дизайнеру хотелось поддержать единство интерьера с экстерьером. Хозяйку дома привлекали многие стили: французский прованс, лофт, шале, что нашло отражение в итоговых стилистических решениях интерьера дома. Их гармоничный микс задал образ простого, но очень уютного интерьера, где всё предусмотрено для приятного отдыха и комфортного проживания.</div>
                    <div class="box">
                        <div class="img">
                            <img src="img/img234.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img235.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img236.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img237.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Спальня</div>
                    <div class="text element-animation">Акцент был сделан на открытые пространства, где это было возможно, - в помещениях много света и воздуха. Светлая гамма интерьера максимально естественная. Легкую графичность подчеркивают черные детали: элементы мебели, светильники, декор на полках.</div>
                </div>
                <div class="img">
                    <img src="img/img238.jpg" alt="">
                </div>
                <div class="container">
                    <div class="box">
                        <div class="img">
                            <img src="img/img239.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img240.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Санузел</div>
                    <div class="text element-animation">Витраж – это один из основных акцентов интерьера. Своей цветовой гаммой он связывает буйную зелень за окном с внутренним интерьерным пространством.  А в зимние, холодные вечера свет, льющийся сквозь красочный витраж, добавляет ярких красок в уют дома.</div>
                    <div class="box">
                        <div class="img">
                            <img src="img/img241.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img242.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img243.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img244.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Гостевая спальня</div>
                </div>
                <div class="img">
                    <img src="img/img245.jpg" alt="">
                </div>
                <div class="container">
                    <div class="box">
                        <div class="img">
                            <img src="img/img246.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img247.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Гостевая спальня</div>
                </div>
                <div class="img">
                    <img src="img/img248.jpg" alt="">
                </div>
                <div class="container">
                    <div class="box">
                        <div class="img">
                            <img src="img/img249.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img250.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Гостевой санузел</div>
                    <div class="box">
                        <div class="img">
                            <img src="img/img251.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img252.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img253.jpg" alt="">
                        </div>
                        <div class="img">
                            <img src="img/img254.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Фасад</div>
                </div>
                <div class="img">
                    <img src="img/img255.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img256.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img257.jpg" alt="">
                </div>
                <div class="img">
                    <img src="img/img258.jpg" alt="">
                </div>
            </div>
        </section>
    </main>
<link href="/projects/dvukhkomnatnaya-kvartira-dlya-molodoy-semyi/css/slick/slick.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<link href="css/style26.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<script type="text/javascript"  src="js/main.js"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>