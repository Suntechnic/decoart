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
<div class="main-articles">
    <div class="main-articles__row">
        <?foreach($arResult['ITEMS'] as $dctItem):?>
        <div class="main-articles__row-el">
            <?if($dctItem['DETAIL_PAGE_URL']):?><a class="main-articles__row-item" href="<?=$dctItem['DETAIL_PAGE_URL']?>"><?endif?>
                <div class="image" style="background-image: url(<?=$dctItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                <p><?=$dctItem['NAME']?></p>
            <?if($dctItem['DETAIL_PAGE_URL']):?></a><?endif?>
        </div>
        <?endforeach?>
    </div>
</div>