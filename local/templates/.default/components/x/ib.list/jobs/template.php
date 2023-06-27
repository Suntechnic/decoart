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
<section>
    <div class="vacancies">
        <div class="container">
          <h2>вакансии</h2>
        </div>
        <div class="container container--small">
          <div class="vacancies__grid">
            <div class="vacancies__items">
                <?foreach($arResult['ITEMS'] as $dctItem):?>
                <div class="vacancies__item">
                    <div class="vacancies__row">
                        <a class="title" href="<?=$dctItem['DETAIL_PAGE_URL']?>"><?=$dctItem['NAME']?></a>
                        <p class="price">
                            <?if($dctItem['PROPERTY_SALARYFROM_VALUE']):?>
                                от  <span><?=number_format($dctItem['PROPERTY_SALARYFROM_VALUE'],0,'.',' ')?>₽</span>
                                <?if($dctItem['PROPERTY_SALARYTO_VALUE']):?>
                                    до  <span><?=number_format($dctItem['PROPERTY_SALARYTO_VALUE'],0,'.',' ')?>₽</span>
                                <?endif?>
                            <?else:?>
                                <span>по договоренности</span>
                            <?endif?>
                        </p>
                    </div>
                    <?if($dctItem['PROPERTY_EMPLOYMENT_VALUE']):?>
                    <div class="vacancies__point">
                        <div class="vacancies__point-icon"><img src="<?=P_IMAGES?>/icon-time-blue.svg" alt="" width="16"></div>
                        <p><?=$dctItem['PROPERTY_EMPLOYMENT_VALUE']?></p>
                    </div>
                    <?endif?>
                    <?if($dctItem['PROPERTY_AREA_VALUE']):?>
                    <div class="vacancies__point">
                        <div class="vacancies__point-icon"><img src="<?=P_IMAGES?>/icon-pin-blue.svg" alt="" width="14"></div>
                        <p><?=$dctItem['PROPERTY_AREA_VALUE']?></p>
                    </div>
                    <?endif?>
                </div>
                <?endforeach?>
            </div>
            <div class="vacancies__about">
              <p class="title">Мы предлагаем</p>
              <ul>
                <li>
                  <p>интересные проекты для реализации</p>
                </li>
                <li>
                  <p>возможность участвовать в конкурсах</p>
                </li>
                <li>
                  <p>масштабные задачи</p>
                </li>
                <li>
                  <p>обучение и развитие компетенций</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</section>
<?endif?>