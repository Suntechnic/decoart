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
                    
                    <?foreach($arResult['ITEMS'] as $i=>$dctItem):?>
                    <div class="swiper-slide"
                            data-src="<?=$dctItem['DETAIL_PICTURE']['SRC']?>"
                            data-name="<?=$dctItem['NAME']?>"
                            data-text="<?=$dctItem['DETAIL_TEXT']?>"
                            data-url="<?=$dctItem['PROPERTY_URL_VALUE']?>"
                        >
                            
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
                            <div class="hero__gallery-progressbar">
                                <div class="hero__gallery-progressbar--progress" style="width: 0%;"></div>
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

<style>
    .hero__gallery-progressbar {
        position:relative;
        width: 100%;
        height:4px;
    }
    .hero__gallery-progressbar .hero__gallery-progressbar--progress {
        position:relative;
        left: 0;
        height:100%;
        background-color:rgb(0,184,228)!important;
    }
</style>

<script>

    
    function nextSlide (slide) {
        let prct = parseInt(slide.dataset.percent);
        let nextslide = slide;
        if (!prct) {
            slide.dataset.percent = 1;
            setHeroSlider(slide.dataset);
        } else {
            slide.dataset.percent = prct+1;
        }
        
        if (prct > 999) {
            slide.dataset.percent = 0
            nextslide = slide.nextElementSibling;
            if (!nextslide) nextslide = document.querySelector('.hero .swiper-slide');
            
        }
        
        slide.querySelector('.hero__gallery-progressbar--progress').setAttribute('style','width: '+parseInt(slide.dataset.percent)/10+'%');
        
        setTimeout(()=>{nextSlide(nextslide);}, 10);
    }
    
    nextSlide(document.querySelector('.hero .swiper-slide'));
    
    function setHeroSlider (data) {
        let hero = document.querySelector('.hero');
        hero.querySelector('.hero__image').setAttribute('style','background-image: url('+data.src+')');
        hero.querySelector('.small').innerHTML = data.name;
        hero.querySelector('a h1').innerHTML = data.text;
        hero.querySelector('a').setAttribute('href',data.url);
    }
</script>