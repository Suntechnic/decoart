<div class="box">
    <div class="item">
        <div class="top">
            <div class="panel-title">экспресс</div>
            <div class="price" id="num1" data-value="700">700 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Обмерный план</li>
                    <li>2 – 3 варианта планировки</li>
                    <li>Итоговый план</li>
                    <li>Строительный план с расстановкой мебели и привязкой стантехники</li>
                </ul>
                <span>* Минимальная стоимость дизайн-проекта <span>40 000 ₽</span></span>
            </div>
        </div>
        <div class="itog">
            <input type="text" name="sum-1" value="70 000 ₽" size="40" id="sum-1" kl_vkbd_parsed="true">
        </div>
        <div class="bot">
            <span class="btn" onclick="openMenuSlideBar(1); return false;">заказать</span>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">базовый</div>
            <div class="price" id="num2" data-value="2000">2 000 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Включает пакет «Экспресс»</li>
                    <li>Строительные чертежи</li>
                    <li>Планы полов и потолков</li>
                    <li>Развёртки стен основных помещений</li>
                    <li>Схемы электрики</li>
                </ul>
                <span>* Минимальная стоимость дизайн-проекта <span>100 000 ₽</span></span>
            </div>
        </div>
        <div class="itog">
            <input type="text" name="sum-2" value="200 000 ₽" size="40" id="sum-2" kl_vkbd_parsed="true">
        </div>
        <div class="bot">
            <span class="btn" onclick="openMenuSlideBar(1); return false;">заказать</span>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">полный</div>
            <div class="price" id="num3" data-value="3000">3 000 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Включает пакет «Базовый»</li>
                    <li>3D-визуализация интерьера</li>
                    <li>Подбор материалов, мебели и выезд в торговые точки</li>
                </ul>
                <span>* Минимальная стоимость дизайн-проекта <span>200 000 ₽</span></span>
            </div>
        </div>
        <div class="itog">
            <input type="text" name="sum-3" value="300 000 ₽" size="40" id="sum-3" kl_vkbd_parsed="true">
        </div>
        <div class="bot">
            <span class="btn" onclick="openMenuSlideBar(1); return false;">заказать</span>
        </div>
    </div>
</div>

<?if($arParams['FULLPRICELISTSHOW'] == 'Y'):?>
    <?include('calculator_design_full-pricelist.php');?>
<?else:?>
    <div class="full-pricelist" onclick="APP.Plagins.FullPricelist.load('calculator_design_full-pricelist.php',this);">Полный прайс-лист</div>
<?endif?>



