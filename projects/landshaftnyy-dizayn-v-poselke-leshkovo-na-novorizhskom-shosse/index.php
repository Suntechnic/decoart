<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ландшафтный дизайн в поселке на Новорижском шоссе");
?><main>
        <section class="project_head">
            <div class="img">
                <img src="img/img73.jpg" alt="">
            </div>
            <div class="container">
                <div class="name">проект</div>
                <h1 class="zag">Ландшафтный дизайн в посёлке <br>Лешково (Новорижское шоссе)</h1>
            </div>
        </section>
        <section class="project_cifri">
            <div class="container">
                <div class="box">
                    <div class="item">
                        <div class="name">Площадь участка</div>
                        <div class="num">10 соток</div>
                    </div>
                    <div class="item">
                        <div class="name">Виды работ</div>
                        <div class="txt">Проектирование <br>Строительство</div>
                    </div>
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
                                'PROPERTY_PROJECT' => 19
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
                    <div class="big element-animation">Разработка ландшафтно-архитектурной концепции комплекса подпорных стен, бани, гостевого дома.</div>
                    <div class="title element-animation">Баня</div>
                    <div class="text element-animation">Лаконичный европейский стиль плюс функциональность, помноженные на потрясающую фактуру натуральной сосны. Баня возведена из цилиндрического бруса и, поднятая на возвышение, органично вписывается в общую концепцию многоуровневого ландшафта. Продуманная логистика позволяет легко и быстро добраться до бани можно как из самого жилого коттеджа или гостевого домика, так и с территории участка.</div>
                    <div class="img">
                        <img src="img/img75.jpg" alt="">
			<img src="img/IMG_4448_.jpeg" alt="">
                    </div>
                    <div class="text element-animation">Баня занимает видное место в общей композиции ландшафтного дизайна участка. Массивные перила подпорной стены, декорированной фасадным камнем, создают в зоне расположения бани отсылку к террасе под открытым небом. Насладиться панорамой молодого ельника и зеленью газона с садовыми деревьями можно не только стоя, но и принимая солнечные ванны на выставленных шезлонгах.</div>
                </div>
                <div class="img">
                    <img src="img/img76.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="container">
		    <div class="img">
                    	<img src="img/Pic2.jpg" alt="" style="width: 100%;">
                    </div>
                    <div class="img">
                        <img src="img/img77.jpg" alt="">
                        <img src="img/Pic1.jpg" alt="">
                    </div>
                    <div class="text element-animation">Прямо из бани спроектирован выход в круговую беседку для отдыха, оборудованную коваными чугунными скамьями с удобными деревянными сиденьями и спинками. Пол беседки декорирован рельефной каменной плиткой и гармонично сочетается с бежевыми тонами декора подпорных стен.</div>
                </div>
                <div class="img">
                    <img src="img/img79.jpg" alt="">
                    <img src="img/img80.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="text element-animation">Перепад высот на участке составляет более 7 метров, благодаря чему с верхних ярусов открывается прекрасный вид на склон</div>
                    <div class="img">
                        <img src="img/img81.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="title element-animation">Вечерняя подсветка</div>
                    <div class="text element-animation">Продуманное расположение светильников позволяет равномерно освещать дорожки, входную группу бани, а также акцентировать внимание на компактной каскадной лестнице с полукруглым основанием. Светильники оснащены системой влагозащиты и датчиками автоматического включения, что позволяет комфортно перемещаться по участку в сумерках и при любой погоде.</div>
                    <div class="img">
                        <img src="img/img82.jpg" alt="">
                        <img src="img/img83.jpg" alt="">
                    </div>
                </div>
                <div class="img">
                    <img src="img/img84.jpg" alt="">
                    <img src="img/img85.jpg" alt="">
                </div>
            </div>
	    <div class="item">
                <div class="container">
		    <div class="title element-animation" style="text-align: center;">План участка</div>
		    <div class="text element-animation" style="text-align: center;">M 1:500</div>
                </div>
		<div class="img">
                    <img src="img/Plan.jpg" alt="" style="max-width: 100%;width: auto;margin: 25px auto 0 auto;display: block;">
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
<link href="css/style.css" type="text/css"  data-template-style="true" rel="stylesheet" />
<script type="text/javascript"  src="js/main.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>