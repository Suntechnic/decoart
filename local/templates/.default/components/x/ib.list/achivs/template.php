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
//$this->setFrameMode(true);


?><?if($arResult['SECTION'] && $arResult['ITEMS']):?>
<section class="image-slider">
    <div class="container">
        <h2><?=$arResult['SECTION']['NAME']?></h2>
    </div>
    <div class="container container--small">
        <div class="image-slider__slider" js-4-slider>
            <div class="slide-app">
                <?foreach($arResult['ITEMS'] as $dctItem):?>
                <div>
                    <div class="slider__image slider__image--license">
                        <div class="image" style="background-image: url(<?=$dctItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                    </div>
                    <div class="slider__info">
                        <p class="title"><?=$dctItem['NAME']?></p>
                        <p class="info"><?=$dctItem['PREVIEW_TEXT']?></p>
                    </div>
                </div>
                <?endforeach?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION :: LICENSES--><?endif?>