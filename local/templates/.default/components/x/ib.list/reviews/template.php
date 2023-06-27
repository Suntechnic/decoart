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
        <h2>отзывы</h2>
    </div>
    <div class="container container--small">
      <div class="reviews__slider" js-full-slider>
        <div class="swiper-wrapper">
            <?foreach($arResult['ITEMS'] as $dctItem):?>
            <div class="swiper-slide">
                <div class="reviews__item">
                    <div class="reviews__author">
                        <p class="name"><?=$dctItem['NAME']?></p>
                        <p class="about"><?=$dctItem['PROPERTY_NOTE_VALUE']?></p>
                        <?if ($dctItem['PROJECT']):?>
                        <p class="project" data-bxelmid="<?=$dctItem['PROJECT']['ID']?>">
                            <b>Проект</b>
                            <a href="<?=$dctItem['PROJECT']['DETAIL_PAGE_URL']?>"><?=$dctItem['PROJECT']['NAME']?></a>
                        </p>
                        <?endif?>
                        <?if ($dctItem['PROPERTY_PDF_VALUE']):?>
                        <a href="<?=$dctItem['PROPERTY_PDF_VALUE']['SRC']?>" target="blank_">Полный отзыв</a>
                        <?endif?>
                    </div>
                    <p><?=$dctItem['PREVIEW_TEXT']?></p>
                </div>
            </div>
            <?endforeach?>
        </div>
        <div class="slider-controls">
          <div class="slider-arrow slider-arrow--prev"></div>
          <div class="swiper-pagination"></div>
          <div class="slider-arrow slider-arrow--next"></div>
        </div>
      </div>
    </div>
</section>