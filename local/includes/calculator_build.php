<div class="box">
    <div class="item">
        <div class="top">
            <div class="panel-title">строительство коробки</div>
            <div class="price" id="num7" data-value="50000">от 50 000 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Фундамент</li>
                    <li>Стены</li>
                    <li>Перекрытия</li>
                    <li>Устройство кровли</li>
                    <li>Устройство фасадов</li>
                    <li>Окна</li>
                </ul>
            </div>
        </div>
        <div class="itog" style="padding: 0; height: 20px;">
            <input type="hidden" name="sum-7" value="5 000 000 ₽" size="40" id="sum-7">
        </div>
        <div class="itog-bot">
            <p>Стоимость строительства дома:</p>
            <div class="price" id="sum-build-total">7 500 000 ₽</div>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">инженерные коммуникации</div>
            <div class="price" id="num8" data-value="7000">от 7 000 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Приобретение и подключение оборудования</li>
                </ul>
                <span>Прокладка трасс для:</span>
                <ul>
                    <li>Отопления</li>
                    <li>Водоснабжения, канализации</li>
                    <li>Вентиляции</li>
                    <li>Кондиционирования</li>
                    <li>Электрики, слаботочных систем</li>
                    <li>Пусконаладочные работы</li>
                </ul>
            </div>
        </div>
        <div class="itog" style="padding: 0; height: 20px;"></div>
        <div class="bot">
            <input type="checkbox" name="sumBuidlEngAdd" id="sumBuidlEngAdd" onchange="recalcTotalBuildSum();">
            <label class="btn" for="sumBuidlEngAdd" >
                <span class="add">+</span><span class="no">-</span> <span id="sum-8">700 000 ₽</span>
            </label>
        </div>
    </div>
    <div class="item">
        <div class="top">
            <div class="panel-title">внутренняя отделка</div>
            <div class="price" id="num9" data-value="18000">от 18 000 <span>₽/м<sup>2</sup></span></div>
            <div class="txt">
                <ul>
                    <li>Штукатурка стен, потолков</li>
                    <li>Устройство утепленной стяжки с шумоизоляцией</li>
                    <li>Финишная отделка обоями, плиткой, паркетом, мрамором, элементы росписи</li>
                </ul>
            </div>
        </div>
        <div class="itog" style="padding: 0; height: 20px;"></div>
        <div class="bot">
            <input type="checkbox" id="sumBuidlFinishAdd" name="sumBuidlFinishAdd"  onchange="recalcTotalBuildSum();">
            <label class="btn" for="sumBuidlFinishAdd">
                <span class="add">+</span><span class="no">-</span> <span id="sum-9">1 800 000 ₽</span>
            </label>
        </div>
    </div>
</div>
<div class="text">* Указана ПРЕДВАРИТЕЛЬНАЯ минимальная стоимость работ и материалов загородного дома (монолит / кирпич / керамоблок / газосиликатный блок) в привязке к площади строения, для УТОЧНЕННОГО РАСЧЕТА пожалуйста заполните Заявку:</div>