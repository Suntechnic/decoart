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
?>


<div class="projects__links">
    
    <?if($arParams['TEMPLATE']['HIDE_FILTER'] != 'Y'):?>
    <div class="projects__tags">
        <?foreach($arResult['SECTIONS'] as $dctSection):?>
        <div class="projects__tag-el"><a class="projects__tag <?if($dctSection['ID'] == $arResult['FILTER']['SECTION_ID']):?>is-active<?endif?>" href="<?=$dctSection['SECTION_PAGE_URL']?>"><?=$dctSection['NAME']?></a></div>
        <?endforeach?>
    </div>
    <?endif?>
    
    <?foreach($arResult['ITEMS'] as $i=>$dctItem): //Kint::dump($dctItem);?>
    <div class="projects__links-el"><a class="projects__links-item" href="<?=$dctItem['DETAIL_PAGE_URL']?>"> 
        <div class="projects__links-image">
          <div class="image" style="background-image: url(<?=$dctItem['PREVIEW_PICTURE']?>)"></div>
        </div>
        <p><?=$dctItem['NAME']?></p></a></div>
    <?endforeach?>
    
    <?//\Kint::dump($arResult);?>
    <?if($arParams['ELEMENTS_COUNT']):?>
    <div class="projects__links-el projects__links-el--w100">
        <div class="projects__button"><a class="btn" href="<?if($arParams['TEMPLATE']['ALL_PROJECTS']):?><?=$arParams['TEMPLATE']['ALL_PROJECTS']?><?else:?>/projects/<?endif?>">Смотреть все проекты</a></div>
    </div>
    <?endif?>
</div>