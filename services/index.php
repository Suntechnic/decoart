<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги дизайна интерьера и ремонта квартир - студия ДекоАрт");
$APPLICATION->SetPageProperty('description',"Профессиональные услуги по проектированию и дизайну помещений, строительные и ремонтные работы под ключ. Гарантия качества!");
?><section class="project_uslugi">
    <div class="container">
        <h1 class="title">Услуги</h1>
		<div class="box">
            <div class="left">
                <div class="zag element-animation">Дизайн интерьера</div>
                <div class="text element-animation">Наша студия разрабатывает дизайн- проекты интерьеров квартир и домов в классическом и современном стиле</div>
                <div class="bot element-animation">
					<a href="/services/dizayn-interera/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img157.jpg" alt="">
            </div>
        </div>

        <div class="box">
            <div class="left">
                <div class="zag element-animation">Ремонт и отделка</div>
                <div class="text element-animation">Студия DECOART — команда профессионалов, за плечами которой многолетний успешный опыт работы в области ремонта квартир элитного и бизнес классов в жилых комплексах Москвы.</div>
                <div class="bot element-animation">
                    <a href="/services/remont-i-otdelka/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img155.jpg" alt="">
            </div>
        </div>

	<div class="box">
            <div class="left">
                <div class="zag element-animation">Архитектурное проектирование</div>
                <div class="text element-animation">Если Вы хотите построить дом, не похожий на другие или же воплотить в реальность «дом мечты», тогда, безусловно, необходим индивидуальный проект дома.</div>
                <div class="bot element-animation">
					<a href="/services/arkhitekturnoe-proektirovanie/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img152.jpg" alt="">
            </div>
        </div>
	<div class="box">
            <div class="left">
                <div class="zag element-animation">Строительство домов</div>
                <div class="text element-animation">Наша компания предлагает услуги по строительству загородных домов «под ключ». Посмотреть уже построенные дома вы можете в разделе нашего Портфолио — Коттеджи.</div>
                <div class="bot element-animation">
					<a href="/services/stroitelstvo-domov/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img153.jpg" alt="">
            </div>
        </div>
	<div class="box">
            <div class="left">
                <div class="zag element-animation">Монтаж котельных</div>
                <div class="text element-animation">Специалисты нашей компании, с более чем 20-летним опытом работ, спроектируют, рассчитают и смонтируют системы отопления и котельной для Вашего дома.</div>
                <div class="bot element-animation">
					<a href="/services/montaz-katelnih/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img158.jpg" alt="">
            </div>
        </div>
	<div class="box">
            <div class="left">
                <div class="zag element-animation">Инженерные проекты</div>
                <div class="text element-animation">Студия архитектуры и дизайна «Деко-Арт» выполняет заказы на проектирование инженерных сетей и коммуникаций жилых, административных и коммерческих объектов.</div>
                <div class="bot element-animation">
					<a href="/services/inzhenernye-proekty/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img154.jpg" alt="">
            </div>
        </div>

        <div class="box">
            <div class="left">
                <div class="zag element-animation">Умный дом</div>
                <div class="text element-animation">Возможность связать между собой все инженерные сети и коммуникации здания, скоординировать их работу по созданию оптимального микроклимата и максимального комфорта предоставляют современные интеллектуальные системы управления «Умный дом».</div>
                <div class="bot element-animation">
					<a href="/services/umnyy-dom/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img156.jpg" alt="">
            </div>
        </div>

	<div class="box">
            <div class="left">
                <div class="zag element-animation">Согласование перепланировки</div>
                <div class="text element-animation">Перепланировка - это изменение конфигурации помещения, требующее внесения изменений в технический паспорт жилого помещения.</div>
                <div class="bot element-animation">
					<a href="/services/soglasovanie-pereplanirovki/" class="btn">подробнее</a>
                </div>
            </div>
            <div class="right element-animation">
                <img src="<?=P_IMAGES?>/img440.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="/local/assets/dist/css/style15.css" type="text/css">
<script>
function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
    });
}

let options = {
    threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
    observer.observe(elm);
}
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>