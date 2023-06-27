<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказать дизайнерский ремонт под ключ в Москве - отделка помещений премиум класа");
$APPLICATION->SetPageProperty('description',"Реилгь в Москве под ключ. Закажите этитный ремонт премиум класса в квартире или загородном доме в компании Деко Арт. Гарантия качества на все работы!");
?><main>
    <script>
                function openMoclients (id) {
                    document.querySelector('.moclients-sidebar__item[data-id="'+id+'"]').click()
                }
            </script>
        <section class="service_super_heder">
            <div class="img">
                <img src="img/img354.jpg" alt="">
            </div>
            <div class="container">
                <div class="box">
                    <div class="left">
                        <h1 class="title">ремонт <br>и отделка</h1>
                        <div class="sub-title">вашей квартиры</div>
                        <div class="text">
                            <p>Мы ценим Ваше время, поэтому готовы взять на себя весь комплекс работ, начиная от дизайн-проекта до его полного воплощения в жизнь, гарантируя исключительное качество работ, надежность и соблюдение всех проектно- строительных норм и правил. При желании Вы всегда можете посетить любой объект, на котором в данное время будут проводиться работы и оценить качество работ.</p>
                            <p>Ремонт квартиры, дома или офиса, сделанный нашими специалистами, будет радовать Вас долгие годы, выполненные работы можно посмотреть в фотогалерее нашего сайта.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="form">
                            <div class="zag">Получите консультацию</div>
                            <div class="txt">и бесплатный расчёт стоимости вашего проекта</div>
                            <form action="#">
                                <div class="input-container">
                                    <input type="text" placeholder="Ваше имя">
                                    <div class="label">Ваше имя</div>
                                </div>
                                <div class="input-container">
                                    <input type="text" placeholder="телефон">
                                    <div class="label">телефон</div>
                                </div>
                                <button class="btn btn--border">жду звонка</button>
                                <p>Нажимая кнопку «жду звонка», я даю согласие на Обработку персональных данных</p>
                            </form>
                            <div class="form__thank">
                                <div class="form__thank-image">
                                    <img src="img/deco-part.png" alt="">
                                </div>
                                <div class="form__thank-info">
                                    <p class="large">спасибо</p>
                                    <p>мы вам ответим в течение 15 мин</p>
                                </div>
                                <div class="form__thank-close"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vibor-nas">
            <div class="container">
                <h2>почему выбирают нас</h2>
                <div class="spisok">
                    <div class="item">
                        <div class="icon"><img src="img/icon6.svg" alt=""></div>
                        <div class="text">100% соблюдение строительных норм и правил, технологий производства работ</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon7.svg" alt=""></div>
                        <div class="text">Большой опыт работы по ремонту квартир в жилых комплексах бизнес и премиум-класса</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon8.svg" alt=""></div>
                        <div class="text">Опытные мастера постоянно проходят тренинги и курсы повышения квалификации</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon9.svg" alt=""></div>
                        <div class="text">Оптимальное соотношение цены и качества</div>
                    </div>
                    <div class="item">
                        <div class="icon"><img src="img/icon10.svg" alt=""></div>
                        <div class="text">Гарантия соблюдения сроков, стоимости и качества</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kontrol-kachestva">
            <div class="container">
                <h2>5 уровней контроля качества</h2>
                <div class="spisok">
                    <div class="item">
                        <div class="icon">1</div>
                        <div class="right">
                            <div class="text">главный инженер</div>
                            <div class="mini-text">Контроль качества проектно-сметной документации</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">2</div>
                        <div class="right">
                            <div class="text">инженер-технолог</div>
                            <div class="mini-text">Контроль качества инженерной документации и производства инженерных работ на объекте</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">3</div>
                        <div class="right">
                            <div class="text">архитектор</div>
                            <div class="mini-text">Контроль соответствия хода работ дизайн-проекту</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">4</div>
                        <div class="right">
                            <div class="text">прораб</div>
                            <div class="mini-text">Контроль качества производства строительно-монтажных работ на объекте, их соответствия проектно-сметной документации</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">5</div>
                        <div class="right">
                            <div class="text">личный менеджер</div>
                            <div class="mini-text">Постоянная связь по любым возникающим у заказчика вопросам, относительно качества ремонтных работ</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="int-design">
            <div class="container">
                <h2>этапы работы</h2>
                <div class="int-design__item">
                    <p class="int-design__title is-active" js-open-design-info="">заявка <span>1</span></p>
                    <div class="int-design__hidden" style="display: block">
                        <div class="text">
                            <p>Заполняется предварительная заявка у нас на сайте или в нашем офисе</p>
                        </div>
                    </div>
                </div>
                <div class="int-design__item">
                    <p class="int-design__title" js-open-design-info="">Встреча <span>2</span></p>
                    <div class="int-design__hidden">
                        <div class="int-design__row">
                            <div class="int-design__info">
                                <div class="text">
                                    <p>Встречаемся в нашем офисе. Обсуждаем детали будущего ремонта на основе имеющегося дизайн-проекта* По результатам встречи составляем смету</p>
                                    <p>*Если дизайн-проекта нет, наши дизайнеры готовы его создать</p>
                                </div>
                            </div>
                            <div class="int-design__persons">
                                <div class="int-design__person-el">
                                    <div class="int-design__person-image"><img src="img/ruslan-moroshanu.jpg" alt=""></div>
                                    <p class="name">Руслан <br>морошану</p>
                                    <p class="about">главный инженер</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="int-design__item">
                    <p class="int-design__title" js-open-design-info="">Смета и график работ <span>3</span></p>
                    <div class="int-design__hidden">
                        <div class="int-design__row">
                            <div class="int-design__info">
                                <div class="text">
                                    <p>Согласовываем смету и сроки проведения конкретных работ*</p>
                                    <p>*Каждый ремонт имеет свои особенности, поэтому сроки для каждого объекта рассчитываются индивидуально</p>
                                    <a class="btn pdf" href="Smeta_na_SMR_po_kvartire_materialy_obrazec.pdf" target="_blank">пример сметы</a><a class="btn pdf" style="margin-left: 10px;" href="Obrazec_Grafika.pdf" target="_blank">пример Графика работ</a>
                                </div>
                            </div>
                            <div class="int-design__persons">
                                <div class="int-des"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="int-design__item">
                    <p class="int-design__title" js-open-design-info="">Договор и часть оплаты <span>4</span></p>
                    <div class="int-design__hidden">


                        <div class="int-design__row">
                            <div class="int-design__info">
                                <div class="text">
                                    <p>Заключаем договор, получаем первую часть оплаты в счет договора</p>
                                    <a class="btn pdf" href="Dogovor_na_remontnootdelochnye_raboty_shablon.pdf" target="_blank">образец договора</a><!--<a class="btn pdf" href="prilozeniya_k_dogovory_decoart.zip" target="_blank">приложения к догвору</a>-->
                                </div>
                            </div>


                            <div class="int-design__persons">
                                <div class="int-des"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="int-design__item">
                    <p class="int-design__title" js-open-design-info="">Производство работ <span>5</span></p>
                    <div class="int-design__hidden">
                        <div class="spisok">
                            <div class="item">
                                <div class="name">Подготовительный этап — 2,5 месяца</div>
                                <div class="box">
                                    <div class="li">
                                        <div class="icon"><img src="img/icon11.svg" alt=""></div>
                                        <div class="text">Снос стен, демонтаж, вывоз мусора</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon12.svg" alt=""></div>
                                        <div class="text">Устройство межкомнатных перегородок</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon13.svg" alt=""></div>
                                        <div class="text">Укладка электрических кабелей</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon14.svg" alt=""></div>
                                        <div class="text">Сантехнические работы</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon15.svg" alt=""></div>
                                        <div class="text">Устройство стяжки со звукоизоляцией и армированием</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="name">промежуточный этап — 1,5 месяца</div>
                                <div class="box">
                                    <div class="li">
                                        <div class="icon"><img src="img/icon16.svg" alt=""></div>
                                        <div class="text">Укладка проводов, устройство подрозетников и распаечных коробок</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon17.svg" alt=""></div>
                                        <div class="text">Монтаж наружного блока кондиционера</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon18.svg" alt=""></div>
                                        <div class="text">Монтаж подвесного потолка</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon19.svg" alt=""></div>
                                        <div class="text">Монтаж подоконников</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon20.svg" alt=""></div>
                                        <div class="text">Проклейка стен и потолков армирующей сеткой</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon21.svg" alt=""></div>
                                        <div class="text">Шпатлёвка стен и потолков</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon22.svg" alt=""></div>
                                        <div class="text">Устройство декоративных ниш</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon23.svg" alt=""></div>
                                        <div class="text">Укладка керамической плитки</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon24.svg" alt=""></div>
                                        <div class="text">Укладка влагостойкой фанеры</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon25.svg" alt=""></div>
                                        <div class="text">Покраска стен и потолков 2 раза</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="name">Завершающий этап — 2 месяца</div>
                                <div class="box">
                                    <div class="li">
                                        <div class="icon"><img src="img/icon26.svg" alt=""></div>
                                        <div class="text">Укладка штучного паркета, палубной доски и ламината</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon27.svg" alt=""></div>
                                        <div class="text">Финишная покраска стен и потолков</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon28.svg" alt=""></div>
                                        <div class="text">Поклейка обоев</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon29.svg" alt=""></div>
                                        <div class="text">Монтаж плинтуса</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon30.svg" alt=""></div>
                                        <div class="text">Установка дверей, замков, наличников</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon31.svg" alt=""></div>
                                        <div class="text">Монтаж и подключение электротехнических изделий</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon32.svg" alt=""></div>
                                        <div class="text">Установка видеодомофона и видеокамеры (если необходимо)</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon33.svg" alt=""></div>
                                        <div class="text">Установка декоративных изделий и аксессуаров</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon34.svg" alt=""></div>
                                        <div class="text">Монтаж сантехнического оборудования</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon35.svg" alt=""></div>
                                        <div class="text">Монтаж внутреннего блока кондиционера</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon36.svg" alt=""></div>
                                        <div class="text">Монтаж встраиваемых шкафов</div>
                                    </div>
                                    <div class="li">
                                        <div class="icon"><img src="img/icon37.svg" alt=""></div>
                                        <div class="text">Уборка помещения</div>
                                    </div>
                                </div>
                            </div>
                            <div class="info">*Сроки ориентировочные, для квартиры площадью 100 м²</div>
                        </div>
                    </div>
                </div>
                <div class="int-design__item">
                    <p class="int-design__title" js-open-design-info="">Сдача квартиры и оплата <br>оставшейся части <span>6</span></p>
                    <div class="int-design__hidden">
                        <div class="text">
                            <p>По завершению ремонтно-строительных работ получаем оставшуюся часть оплаты, в соответствии с договором</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project_tips">
            <div class="container">
                <div class="title">типы ремонта</div>
                <div class="box">
                    <div class="item">
                        <div class="zag">стандарт</div>
                        <div class="price">
                            <div class="name">Стоимость</div>
                            <div class="cena">от 13 000 Р/м²</div>
                        </div>
                        <div class="spisok">
                            <ul>
                                <li>Устройство цементно-песчаной стяжки с армированием пола по маякам</li>
                                <li>Устройство наливного самовыравнивающегося пола</li>
                                <li>Укладка ламината / пробкового покрытия / паркетной доски / паркета</li>
                                <li>Укладка керамической плитки</li>
                                <li>Установка плинтусов</li>
                                <li>Выравнивание потолка по маякам</li>
                                <li>Устройство многоуровневых потолков из гипсокартона</li>
                                <li>Высококачественная покраска потолка</li>
                                <li>Выравнивание стен по маякам</li>
                                <li>Устройство многоуровневых декоративных фрагментов из гипсокартона</li>
                                <li>Штукатурка стен</li>
                                <li>Облицовка стен керамической плиткой</li>
                                <li>Устройство арочных проёмов</li>
                                <li>Установка дверей</li>
                                <li>Устройство дверных и оконных откосов</li>
                                <li>Установка подоконников</li>
                                <li>Устройство тёплых полов</li>
                                <li>Замена всей электрической проводки с монтажом электрощита</li>
                                <li>Окраска радиаторов отопления и труб</li>
                                <li>Укладка керамической плитки на пол и стены</li>
                                <li>Замена сантехнической разводки</li>
                                <li>Полная замена сантехники (ванна, унитаз, умывальник, смесители, полотенцесушитель)</li>
                                <li>Монтаж подвесных или реечных потолков</li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <div class="bot">
                            <a href="#" class="btn" onclick="openMoclients(2)">рассчитать</a>
                            <a href="#" class="link">Подробные расценки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="zag">Евро</div>
                        <div class="price">
                            <div class="name">Стоимость</div>
                            <div class="cena">от 20 000 Р/м²</div>
                        </div>
                        <div class="spisok">
                            <ul>
                                <li>Устройство цементно-песчаной стяжки с армированием пола по маякам</li>
                                <li>Устройство наливного самовыравнивающегося пола</li>
                                <li>Укладка ламината / пробкового покрытия / паркетной доски / паркета</li>
                                <li>Укладка керамической плитки</li>
                                <li>Установка плинтусов</li>
                                <li>Выравнивание потолка по маякам</li>
                                <li>Устройство многоуровневых потолков из гипсокартона</li>
                                <li>Высококачественная покраска потолка</li>
                                <li>Выравнивание стен по маякам</li>
                                <li>Устройство многоуровневых декоративных фрагментов из гипсокартона</li>
                                <li>Штукатурка стен</li>
                                <li>Облицовка стен керамической плиткой</li>
                                <li>Устройство арочных проёмов</li>
                                <li>Установка дверей</li>
                                <li>Устройство дверных и оконных откосов</li>
                                <li>Установка подоконников</li>
                                <li>Устройство тёплых полов</li>
                                <li>Замена всей электрической проводки с монтажом электрощита</li>
                                <li>Окраска радиаторов отопления и труб</li>
                                <li>Укладка керамической плитки на пол и стены</li>
                                <li>Замена сантехнической разводки</li>
                                <li>Полная замена сантехники (ванна, унитаз, умывальник, смесители, полотенцесушитель)</li>
                                <li>Монтаж подвесных или реечных потолков</li>
                                <li><b>Демонтаж ненесущих перегородок</b></li>
                                <li><b>Устройство новых перегородок</b></li>
                                <li><b>Отделка балконов и лоджий</b></li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <div class="bot">
                            <a href="#" class="btn" onclick="openMoclients(2)">рассчитать</a>
                            <a href="#" class="link">Подробные расценки</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="zag">премиум</div>
                        <div class="price">
                            <div class="name">Стоимость</div>
                            <div class="cena">от 27 000 Р/м²</div>
                        </div>
                        <div class="spisok">
                            <ul>
                                <li>Устройство цементно-песчаной стяжки с армированием пола по маякам</li>
                                <li>Устройство наливного самовыравнивающегося пола</li>
                                <li>Укладка ламината / пробкового покрытия / паркетной доски / паркета</li>
                                <li>Укладка керамической плитки</li>
                                <li>Установка плинтусов</li>
                                <li>Выравнивание потолка по маякам</li>
                                <li>Устройство многоуровневых потолков из гипсокартона</li>
                                <li>Высококачественная покраска потолка</li>
                                <li>Выравнивание стен по маякам</li>
                                <li>Устройство многоуровневых декоративных фрагментов из гипсокартона</li>
                                <li>Штукатурка стен</li>
                                <li>Облицовка стен керамической плиткой</li>
                                <li>Устройство арочных проёмов</li>
                                <li>Установка дверей</li>
                                <li>Устройство дверных и оконных откосов</li>
                                <li>Установка подоконников</li>
                                <li>Устройство тёплых полов</li>
                                <li><b>Демонтаж ненесущих перегородок</b></li>
                                <li><b>Устройство новых перегородок</b></li>
                                <li><b>Отделка балконов и лоджий</b></li>
                                <li><b>Установка электроточек со штроблением стен</b></li>
                                <li><b>Подключение электроточек (розетки, выключатели, люстры, точечные светильники и другое)</b></li>
                                <li><b>Монтаж и подключение электрощита</b></li>
                                <li><b>Монтаж слаботочной системы (сигнализация и другое)</b></li>
                                <li><b>Монтаж системы отопления (замена радиаторов и труб)</b></li>
                                <li><b>Разводка сантехнической системы (полипропилен, сшитый полиэтилен)</b></li>
                                <li><b>Монтаж фильтров грубой и тонкой очистки гребёнки и другое</b></li>
                                <li><b>Подключение сантехники (смесители, унитаз, ванна, душевая кабина, бойлер и другое)</b></li>
                                <li><b>Монтаж системы вентиляции и кондиционирования</b></li>
                            </ul>
                            <a href="#" class="link">Читать далее</a>
                        </div>
                        <div class="bot">
                            <a href="#" class="btn" onclick="openMoclients(2)">рассчитать</a>
                            <a href="#" class="link">Подробные расценки</a>
                        </div>
                    </div>
                </div>
                <div class="top-rice">
                    <div class="zag">косметический</div>
                    <div class="box">
                        <div class="left">
                            <div class="price">
                                <div class="name">Стоимость</div>
                                <div class="cena">от 9 000 Р/м²</div>
                            </div>
                            <div class="bot">
                                <a href="#" class="btn" onclick="openMoclients(2)">рассчитать</a>
                                <a href="#" class="link">Подробные расценки</a>
                            </div>
                        </div>
                        <div class="spisok">
                            <ul>
                                <li>Отделка потолков под покраску</li>
                                <li>Отделка стен под обои</li>
                                <li>Замена плинтусов</li>
                                <li>Окраска окон и дверей</li>
                                <li>Окраска радиаторов отопления и труб</li>
                                <li>Разводка сантехники</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nashi-priem">
            <div class="container">
                <h2>наши преимущества</h2>
                <div class="box">
                    <div class="left">
                        <div class="item">
                            <div class="icon"><img src="img/icon38.svg" alt=""></div>
                            <div class="text">100% надёжные электрика и сантехника. Работы выполняют сертифицированные специалисты высокой квалификации</div>
                        </div>
                        <div class="item">
                            <div class="icon"><img src="img/icon39.svg" alt=""></div>
                            <div class="text">Дизайнеры с опытом работы более 15 лет, выпускники профильных ВУЗов</div>
                        </div>
                        <div class="item">
                            <div class="icon"><img src="img/icon40.svg" alt=""></div>
                            <div class="text">Ценим и экономим ваше время. Все возникающие проблемы решаем сами</div>
                        </div>
                        <div class="item">
                            <div class="icon"><img src="img/icon41.svg" alt=""></div>
                            <div class="text">Ювелирное качество работ: идеально ровные стены, полы, потолки</div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="form">
                            <div class="zag">Получите консультацию</div>
                            <div class="txt">и бесплатный расчёт стоимости вашего проекта</div>
                            <form action="#">
                                <div class="input-container">
                                    <input type="text" placeholder="Ваше имя">
                                    <div class="label">Ваше имя</div>
                                </div>
                                <div class="input-container">
                                    <input type="text" placeholder="телефон">
                                    <div class="label">телефон</div>
                                </div>
                                <button class="btn btn--border">жду звонка</button>
                                <p>Нажимая кнопку «жду звонка», я даю согласие на Обработку персональных данных</p>
                            </form>
                            <div class="form__thank">
                                <div class="form__thank-image">
                                    <img src="img/deco-part.png" alt="">
                                </div>
                                <div class="form__thank-info">
                                    <p class="large">спасибо</p>
                                    <p>мы вам ответим в течение 15 мин</p>
                                </div>
                                <div class="form__thank-close"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="material">
            <div class="container">
                <h2>материалы по выгодным ценам</h2>
                <div class="text">Мы предлагаем выгодные цены на черновые и чистовые материалы, мебель, оборудование, двери, освещение от наших партнёров:</div>
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
                                'SECTION_ID' => 34
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
        
        
        
        <section class="reviews">
            <div class="container">
                <h2>отзывы</h2>
            </div>
            <div class="container container--small">
                <div class="reviews__slider" js-full-slider="">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Парижер В.И.</p>
                                    <p class="about">Генеральный директор</p>
                                    <p class="project" data-bxelmid="19">
                                        <b>Проект</b>
                                        <a href="/projects/landshaftnyy-dizayn-v-poselke-leshkovo-na-novorizhskom-shosse/">Ландшафтный дизайн в поселке Лешково</a>
                                    </p>
                                    <a href="/upload/iblock/fbc/ad41px0rcy4q2ojk50d6vs7mi09ebo6i.pdf" target="blank_">Полный отзыв</a>
                                </div>
                                <p>Выражая благодарность ДекоАрт, особенно хочется отметить высокие организаторские и инженерные способности специалистов компании, а также техническую оснащенность, позволившие профессионально, качественно и в короткие сроки осуществить комплекс работ "под ключ" на участке работ.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Р.Д.Миркин</p>
                                    <p class="about">Начальник БЭиСПР</p>
                                    <a href="/upload/iblock/524/qd7e639nxn4hfvxom8cgyarh88wrx6kj.pdf" target="blank_">Полный отзыв</a>
                                </div>
                                <p>С большим удовольствием отмечаю работу бригады Раджабова Саида, выполнявшей комплекс строительных работ по капитальному ремонту офиса БЭиСПР.<br>
                                    <br>
                                    Бригаде присуще дисциплинированность, высокое качество работ и что особенно ценно способность отзываться на пожелания заказчиков и поиск оптимальных решений.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Светлана</p>
                                    <p class="about">Собственница загородного дома</p>
                                    <p class="project" data-bxelmid="104">
                                        <b>Проект</b>
                                        <a href="/projects/dizain-interiera-v-odnoetajnom-dome-iz-kleennogo-brusa-v-poselke-ruza-femili-park/">Дизайн интерьера в одноэтажном доме из клеенного бруса в посёлке Руза Фемили Парк</a>
                                    </p>
                                    <a href="/upload/iblock/f91/qp167hgcg3orzzehkpfuyveyoui0ex7c.pdf" target="blank_">Полный отзыв</a>
                                </div>
                                <p>С удовольствием выражаю огромную благодарность моему дизайнеру Елене, с которой я прошла длинный и тернистый путь строительства загородного дома. Выбор дизайнера был для меня прост и легок: Елена реализовала два прекрасных квартирных проекта для моих родственников. И я точно видела ее безукоризненный стиль, здоровую щепетильность в деталях, прекрасные вкус и чувство меры.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Михаил Скворцов</p>
                                    <p class="about">Владелец квартиры</p>
                                    <p class="project" data-bxelmid="18">
                                        <b>Проект</b>
                                        <a href="/projects/kvartira-v-zhk-shuvalovskiy/">Квартира в ЖК Шуваловский</a>
                                    </p>
                                    <a href="/upload/iblock/711/casnb0wkwkzju9o2032b1lvy3hw1zft2.pdf" target="blank_">Полный отзыв</a>
                                </div>
                                <p>В компанию ДекоАрт обратились по рекомендации друзей, по поводу комплексного ремонта под ключ нашей трехкомнатной квартиры в новостройке. <br>
                                    <br>
                                    Процессом взаимодействия с компанией на всех этапах работ, а также конечным результатом, остался очень доволен! Рекомендую!!!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Семья Иванниковых</p>
                                    <p class="about">Владельцы дома</p>
                                    <p class="project" data-bxelmid="56">
                                        <b>Проект</b>
                                        <a href="/projects/zagorodnie-dom-iz-kamna-s-brevenchatoi-banei-na-novoi-rige/">Загородный дом из камня с бревенчатой баней на Симферопольском шоссе</a>
                                    </p>
                                    <a href="/upload/iblock/277/qns20jv9mf8ezm2imd7057h06oh0h2fa.pdf" target="blank_">Полный отзыв</a>
                                </div>
                                <p>Дом нам сразу очень понравился – светлый, просторный, комфортный и уютный! Очень довольны качеством дома, при ежегодном плановом тех. обслуживании дома за 14 лет не было никаких неожиданностей и аварий.<br>
                                    <br>
                                    У нас столько счастья и положительных эмоций от проживания в этом доме!! И все наши друзья признаются, что их дома «курятники» по сравнению с нашим домом!<br>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__author">
                                    <p class="name">Семья Власенко </p>
                                    <p class="about">владельцы квартиры</p>
                                    <p class="project" data-bxelmid="23">
                                        <b>Проект</b>
                                        <a href="/projects/tryekhkomnatnaya-kvartira-v-dome-p-44t/">Трехкомнатная квартира в доме серии П-44Т</a>
                                    </p>
                                </div>
                                <p>Дизайн-проект и ремонт своей квартиры доверили профессионалам из студии Деко Арт, хотелось из обычной типовой панельной трешки сделать современное и комфортное пространство для жизни. На стадии обсуждения будущего проекта с дизайнерами компании, исходили из соображений удобства, функциональности и не в последнюю очередь – красоты. Дизайнеры учли все наши пожелания и вложили значительную часть своей души в этот проект, отчего он получился светлым, уютным и радует всю нашу семью с момента новоселья и по сей день!</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-controls">
                        <div class="slider-arrow slider-arrow--prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="slider-arrow slider-arrow--next"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<link href="css/style14.css" type="text/css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.spisok .link').click(function(){
            $('.spisok ul').toggleClass('hide');
            if ($('.spisok ul').hasClass('hide')) {
                $('.spisok .link').html('Скрыть');
            } else {
                $('.spisok .link').html('Читать далее');
            }
            return false;
        });
    });
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>