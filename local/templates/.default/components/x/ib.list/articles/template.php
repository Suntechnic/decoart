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

<section class="main-articles">
    <div class="container">
        <h1><?=$arResult['SECTION']['NAME']?></h1>
        
        <?foreach($arResult['ITEMS'] as $dctItem):?>
        <div class="main-articles__item">
            
            <div class="main-articles__right">
                <div class="main-articles__info-container">
                  <div class="main-articles__info">
                    <div class="main-articles__info-image">
                      <div class="image" style="background-image: url(<?=$dctItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                    </div>
                    <div class="main-articles__info-about">
                      <p class="title"><?=$dctItem['NAME']?></p>
                      <p class="about"><?=$dctItem['PREVIEW_TEXT']?></p>
                      <?if ($dctItem['DETAIL_PAGE_URL']):?>
                      <a class="btn" href="<?=$dctItem['DETAIL_PAGE_URL']?>">подробнее</a>
                      <?endif?>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?endforeach?>
        
  </div>
</section>