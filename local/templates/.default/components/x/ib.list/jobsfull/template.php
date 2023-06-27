<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arResult['ITEMS']):?>

<script>
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



<section class="project_vacancy">
    <div class="container">
        <div class="title">Вакансии</div>
        <div id="accordion" class="accordion">
            <?foreach($arResult['ITEMS'] as $i=>$dctItem):?>
            <div class="accordion__item <?if($arParams['TEMPLATE']['JOB'] == $dctItem['ID']):?>accordion__item_show<?endif?>">
                <a name="job_<?=$dctItem['ID']?>"></a>
                <div class="accordion__header">
                    <?=$dctItem['NAME'];?> 
                    <?if($dctItem['PROPERTY_SALARYFROM_VALUE']):?>
                        <span>от  <b><?=number_format($dctItem['PROPERTY_SALARYFROM_VALUE'],0,'.',' ')?>₽</b>
                        <?if($dctItem['PROPERTY_SALARYTO_VALUE']):?>
                            </span><span>до  <b><?=number_format($dctItem['PROPERTY_SALARYTO_VALUE'],0,'.',' ')?>₽</b>
                        <?endif?> на руки</span>
                    <?else:?>
                        <span>по договоренности</span>
                    <?endif?>
                </div>
                <div class="accordion__body <?if(true):?>collapse<?endif?>">
                    <div class="accordion__content">
                        <?if ($dctItem['PREVIEW_TEXT']):?>
                        <div class="info"><?=$dctItem['PREVIEW_TEXT']?></div>
                        <?endif?>
                        <?if ($dctItem['DETAIL_TEXT']):?>
                        <div class="zag">О компании</div>
                        <div class="text"><?=$dctItem['DETAIL_TEXT']?></div>
                        <?endif?>
                        
                        <?if($dctItem['PROPERTY_RESP_VALUE']):?>
                        <div class="zag">Обязанности</div>
                        <div class="text">
                            <ul>
                                <?foreach($dctItem['PROPERTY_RESP_VALUE'] as $val):?>
                                <li><p><?=$val?></p></li>
                                <?endforeach?>
                            </ul>
                        </div>
                        <?endif?>
                        <?if($dctItem['PROPERTY_REQ_VALUE']):?>
                        <div class="zag">Требования</div>
                        <div class="text">
                            <ul>
                                <?foreach($dctItem['PROPERTY_REQ_VALUE'] as $val):?>
                                <li><p><?=$val?></p></li>
                                <?endforeach?>
                            </ul>
                        </div>
                        <?endif?>
                        <?if($dctItem['PROPERTY_COND_VALUE']):?>
                        <div class="zag">Условия</div>
                        <div class="text">
                            <ul>
                                <?foreach($dctItem['PROPERTY_COND_VALUE'] as $val):?>
                                <li><p><?=$val?></p></li>
                                <?endforeach?>
                            </ul>
                            <?if($dctItem['PROPERTY_CONDTEXT_VALUE']):?>
                            <p><?=$dctItem['PROPERTY_CONDTEXT_VALUE']?></p>
                            <?endif?>
                        </div>
                        <?endif?>
                        
                        <?if($dctItem['PROPERTY_ORDER_VALUE']):?>
                        <div class="zag">Этапы для получения работы</div>
                        <div class="text">
                            <ul>
                                <?foreach($dctItem['PROPERTY_ORDER_VALUE'] as $val):?>
                                <li><p><?=$val?></p></li>
                                <?endforeach?>
                            </ul>
                        </div>
                        <?endif?>
                        
                        <?if($dctItem['PROPERTY_SKILLS_VALUE']):?>
                        <div class="info">
                            
                            <div class="zag">Навыки</div>
                            <div class="text">
                                <ul>
                                    <?foreach($dctItem['PROPERTY_SKILLS_VALUE'] as $val):?>
                                    <li><p><?=$val?></p></li>
                                    <?endforeach?>
                                </ul>
                            </div>
                            
                        </div>
                        <?endif?>
                        
                        
                        
                        
                        
                        <div vue="app-vue-components-formjob" data-jobid="<?=$dctItem['ID']?>"></div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <?endforeach?>
        </div>
    </div>
</section>
<script>
new ItcAccordion(document.querySelector('.accordion'), {
alwaysOpen: false
});
</script>
<?endif?>