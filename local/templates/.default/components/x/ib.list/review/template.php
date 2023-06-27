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
<section class="reviews">
    <div class="container">
        <h2>отзыв</h2>
    </div>
    <div class="container container--small">

    <?$dctItem = $arResult['ITEMS'][0]?>
        <div class="reviews__item">
            <div class="reviews__author">
                <p class="name"><?=$dctItem['NAME']?></p>
                <p class="about"><?=$dctItem['PROPERTY_NOTE_VALUE']?></p>
                
                <?if ($dctItem['PROPERTY_PDF_VALUE']):?>
                <a href="<?=$dctItem['PROPERTY_PDF_VALUE']['SRC']?>" target="blank_">Полный отзыв</a>
                <?endif?>
            </div>
            <p><?=$dctItem['PREVIEW_TEXT']?></p>
        </div>
    </div>
</section>