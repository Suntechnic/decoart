<div class="box">
    <div class="item">
        <div class="top">
            <div class="panel-title">эскизный проект</div>
            <div class="price" id="num4" data-value="1500">1 500 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <span>Обмерный план</span>
                <ul>
                    <li>Пояснительная записка</li>
                    <li>Генеральный план</li>
                    <li>Поэтажные планы с расстановкой мебели</li>
                    <li>Фасады</li>
                    <li>Разрезы</li>
                    <li>3D визуализация</li>
                </ul>
                <span>* Минимальная площадь 200m<sup>2</sup></span>
            </div>
        </div>
        <div class="itog">
            <input type="text" name="sum-4" value="150 000 ₽" size="40" id="sum-4" kl_vkbd_parsed="true">
        </div>
        <div class="bot">
            <span class="btn"  onclick="openMenuSlideBar(3); return false;">заказать</span>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">рабочий проект</div>
            <div class="price" id="num5" data-value="1500">1 500 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Общие данные</li>
                    <li>СПОЗУ</li>
                    <li>Поэтажные планы</li>
                    <li>Кладочные планы</li>
                    <li>Строительные планы</li>
                    <li>План кровли</li>
                    <li>Фасады +цветовое решение</li>
                    <li>Разрезы</li>
                    <li>Узлы</li>
                    <li>Конструкция полов</li>
                    <li>Спецификация дверей и окон</li>
                </ul>
                <span>* Минимальная площадь 200m<sup>2</sup></span>
            </div>
        </div>
        <div class="itog">
            <input type="text" name="sum-5" value="150 000 ₽" size="40" id="sum-5" kl_vkbd_parsed="true">
        </div>
        <div class="bot">
            <span class="btn"  onclick="openMenuSlideBar(3); return false;">заказать</span>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">ландшафтное проектирование</div>
            <div class="price" id="num6" data-value="27000">27 000 <span>₽/сотка</span></div>
            <div class="txt">
                <ul>
                    <li>Консультация с выездом на участок</li>
                    <li>Предпроектные работы</li>
                    <li>Дизайн проект</li>
                    <li>Подбор материалов</li>
                </ul>
                <span>* Минимальная площадь 10 соток.</span>
            </div>
        </div>
        <div class="itog">
            <input type="hidden" name="sum-6" value="2 700 000 ₽" size="40" id="sum-6">
        </div>
        <div class="bot">
            <span class="btn"  onclick="openMenuSlideBar(3); return false;">заказать</span>
        </div>
    </div>
</div>

<?if($arParams['FULLPRICELISTSHOW'] == 'Y'):?>
    <?include('calculator_arch_full-pricelist.php');?>
<?else:?>
    <div class="full-pricelist" onclick="APP.Plagins.FullPricelist.load('calculator_arch_full-pricelist.php',this);">Полный прайс-лист</div>
<?endif?>