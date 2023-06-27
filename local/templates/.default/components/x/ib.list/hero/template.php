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
$dctItem = $arResult['ITEMS'][0];
?>
<section class="hero">
    <div class="hero__image" style="background-image: url(<?=$dctItem['DETAIL_PICTURE']['SRC']?>)"></div>
    <div class="hero__bottom">
        <div class="container">
            <p class="small"><?=$dctItem['NAME']?></p>
            <a href="<?=$dctItem['PROPERTY_URL_VALUE']?>"><h1><?=$dctItem['DETAIL_TEXT']?></h1></a>
            <div class="hero__gallery" js-mobile-slider>
                <div class="swiper-wrapper">
                    
                    <?foreach($arResult['ITEMS'] as $i=>$dctItem): if (!$i) continue;?>
                    <div class="swiper-slide">
                        <?if($dctItem['PROPERTY_URL_VALUE']):?><a href="<?=$dctItem['PROPERTY_URL_VALUE']?>"><?endif?>
                        <div class="hero__gallery-item">
                            <div class="hero__gallery-image">
                                <?if($dctItem['PREVIEW_TEXT']):?><span class="sale"><?=$dctItem['PREVIEW_TEXT']?></span><?endif?>
                                <div class="image" style="background-image: url(<?=$dctItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                            </div>
                            <div class="hero__gallery-info">
                                <p class="title"><?=$dctItem['NAME']?></p>
                                <p class="about"><?=$dctItem['DETAIL_TEXT']?></p>
                            </div>
                        </div>
                        <?if($dctItem['PROPERTY_URL_VALUE']):?></a><?endif?>
                    </div>
                    <?endforeach?>
                    
                </div>
            </div>
        </div>
    </div>
</section>