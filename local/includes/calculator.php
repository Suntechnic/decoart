<?\Bitrix\Main\Page\Asset::getInstance()->addCss('/calculator/style.css');?><script>
            class ItcAccordion {
                constructor(target, config) {
                    this._el = typeof target === 'string' ? document.querySelector(target) : target;
                    const defaultConfig = {
                        alwaysOpen: true,
                        duration: 350
                    };
                    this._config = Object.assign(defaultConfig, config);
                    this.addEventListener();
                }
                addEventListener() {
                    this._el.addEventListener('click', (e) => {
                        const elHeader = e.target.closest('.accordion__header');
                        if (!elHeader) {
                            return;
                        }
                        if (!this._config.alwaysOpen) {
                            const elOpenItem = this._el.querySelector('.accordion__item_show');
                            if (elOpenItem) {
                                elOpenItem !== elHeader.parentElement ? this.toggle(elOpenItem) : null;
                            }
                        }
                        this.toggle(elHeader.parentElement);
                    });
                }
                show(el) {
                    const elBody = el.querySelector('.accordion__body');
                    if (elBody.classList.contains('collapsing') || el.classList.contains('accordion__item_show')) {
                        return;
                    }
                    elBody.style['display'] = 'block';
                    const height = elBody.offsetHeight;
                    elBody.style['height'] = 0;
                    elBody.style['overflow'] = 'hidden';
                    elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                    elBody.classList.add('collapsing');
                    el.classList.add('accordion__item_slidedown');
                    elBody.offsetHeight;
                    elBody.style['height'] = `${height}px`;
                    window.setTimeout(() => {
                        elBody.classList.remove('collapsing');
                        el.classList.remove('accordion__item_slidedown');
                        elBody.classList.add('collapse');
                        el.classList.add('accordion__item_show');
                        elBody.style['display'] = '';
                        elBody.style['height'] = '';
                        elBody.style['transition'] = '';
                        elBody.style['overflow'] = '';
                    }, this._config.duration);
                }
                hide(el) {
                    const elBody = el.querySelector('.accordion__body');
                    if (elBody.classList.contains('collapsing') || !el.classList.contains('accordion__item_show')) {
                        return;
                    }
                    elBody.style['height'] = `${elBody.offsetHeight}px`;
                    elBody.offsetHeight;
                    elBody.style['display'] = 'block';
                    elBody.style['height'] = 0;
                    elBody.style['overflow'] = 'hidden';
                    elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                    elBody.classList.remove('collapse');
                    el.classList.remove('accordion__item_show');
                    elBody.classList.add('collapsing');
                    window.setTimeout(() => {
                        elBody.classList.remove('collapsing');
                        elBody.classList.add('collapse');
                        elBody.style['display'] = '';
                        elBody.style['height'] = '';
                        elBody.style['transition'] = '';
                        elBody.style['overflow'] = '';
                    }, this._config.duration);
                }
                toggle(el) {
                    el.classList.contains('accordion__item_show') ? this.hide(el) : this.show(el);
                }
            }


        </script>

<section class="calculation page_calc">
    <div class="container">
        <div class="sub-title">услуги</div>
        <h1 class="title">Стоимость</h1>
        <div class="box">
            <div class="left">
                <div class="zag">Выберите общую площадь объекта</div>
                <div id="range"></div>
                <input type="hidden" id="num" min="40" max="400" value="100" class="rs-input rs-tooltip-text" />
                <div class="metr">M<sup>2</sup></div>
            </div>
            <div class="right">
              
                <div class="tab">
                    <button class="tablinks" name="plan1" onclick="openTab(this.getAttribute('name'))">дизайн интерьера</button>
                    <button class="tablinks" name="plan2" onclick="openTab(this.getAttribute('name'))">ремонт</button>
                    <button class="tablinks" name="plan3" onclick="openTab(this.getAttribute('name'))">Архитектурное проектирование</button>
                    <button class="tablinks" name="plan4"onclick="openTab(this.getAttribute('name'))">Строительство</button>
                </div>
                
                
                <div name="plan1" class="tabcontent">
                    <?include(S_P_INCLUDES.'/calculator_design.php');?>
                </div>
                <div name="plan2" class="tabcontent">
                    <?include(S_P_INCLUDES.'/calculator_repair.php');?>
                    
                </div>
                <div name="plan3" class="tabcontent">
                    <?include(S_P_INCLUDES.'/calculator_arch.php');?>
                </div>
                <div name="plan4" class="tabcontent">
                    <?include(S_P_INCLUDES.'/calculator_build.php');?>
                </div>
            </div>
        </div>
        <p>стоимость предварительная</p>
    </div>
</section>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="/calculator/style.css" type="text/css">
<script src="/local/assets/dist/js/calculator.js"></script>
<script src="/local/assets/dist/js/roundslider.min.js"></script>


<script>
    new ItcAccordion(document.querySelector('.accordion'), {
        alwaysOpen: false
    });
</script>


<script>
    var APP = APP || {};
    APP.Plagins = APP.Plagins || {};
    APP.Plagins.FullPricelist = {
        config: {
            path: '/local/includes/'
        },
        load: (file, node) => {
            
            BX.ajax({   
					url: APP.Plagins.FullPricelist.config.path+file,
					method: 'GET',
					dataType: 'html',
					timeout: 30,
					onsuccess: function(data){
						node.outerHTML = data;
					},
					onfailure: function(){
						//self.showMessage('Ошибка!','Попробуйте позже');
					}
				});
        }
    }
</script>