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
if(!count($arResult['ITEMS'])) return;
?><section class="project_item <?if(count($arResult['ITEMS'])==1):?>project_item--singleton<?endif?>">
    <?if(count($arResult['ITEMS'])>2):?>
    <div class="slider-items">
        <?foreach($arResult['ITEMS'] as $i=>$dctItem):?>
        <div>
                <div class="item">
                    <a href="<?=$dctItem['DETAIL_PAGE_URL']?>">
                        <span class="name"><?=$dctItem['NAME']?> <span></span></span>
                        <img src="<?=$dctItem['DETAIL_PICTURE']?>" alt="<?=$dctItem['NAME']?>">
                    </a>
                </div>
        </div>
        <?endforeach?>
    </div>
    <?elseif(count($arResult['ITEMS'])==2):?>
    <div class="slider-items">
        
        <div>
            <div class="box">
                <?$dctItem = $arResult['ITEMS'][0]?>
                <div class="item">
                    <a href="<?=$dctItem['DETAIL_PAGE_URL']?>">
                        <span class="name"><?=$dctItem['NAME']?> <span></span></span>
                        <img src="<?=$dctItem['DETAIL_PICTURE']?>" alt="<?=$dctItem['NAME']?>">
                    </a>
                </div>
                <?$dctItemNext = $arResult['ITEMS'][1]?>
                <div class="item">
                    <a href="<?=$dctItemNext['DETAIL_PAGE_URL']?>">
                        <span class="name"><span></span> <?=$dctItemNext['NAME']?></span>
                        <img src="<?=$dctItemNext['DETAIL_PICTURE']?>" alt="<?=$dctItemNext['NAME']?>">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <?else: $dctItem = $arResult['ITEMS'][0]?>
    <div class="box">
        <div class="item">
            <a href="<?=$dctItem['DETAIL_PAGE_URL']?>">
                <span class="name"><?=$dctItem['NAME']?> <span></span></span>
                <img src="<?=$dctItem['DETAIL_PICTURE']?>" alt="<?=$dctItem['NAME']?>">
            </a>
        </div>
    </div>
    <?endif?>
</section>
<?if(count($arResult['ITEMS']) > 2):?>
<script>
    $('.slider-items').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        speed:180,
        dots: false,
        arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.18 477.18" xml:space="preserve"><path d="M360.73 229.07 135.63 3.97c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" fill="#00b8e4"></path></svg></span></button>',
        nextArrow: '<button type="button" class="slick-next"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.18 477.18" xml:space="preserve"><path d="M360.73 229.07 135.63 3.97c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" fill="#00b8e4"></path></svg></span></button>',
  responsive: [
    {
      breakpoint: 566,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
    });
</script>
<?endif?>