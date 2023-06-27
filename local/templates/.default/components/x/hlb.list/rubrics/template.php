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

<!-- BEGIN SECTION :: MAIN-ARTICLES-->
<section class="main-articles">
    <div class="container">
        <h1>Cтатьи</h1>
        
        
        <?foreach($arResult['ITEMS'] as $dctRubric):?>
        <div class="main-articles__item">
          
            <div class="main-articles__left">
                <p class="main-articles__title"><?=$dctRubric['UF_NAME']?></p>
                <div class="main-articles__links">
                    <?foreach($dctRubric['SECTIONS'] as $dctSection):?>
                    <a href="<?=$dctSection['SECTION_PAGE_URL']?>"><?=$dctSection['NAME']?></a>
                    <?endforeach?>
                </div>
                <?/*
                <span class="main-articles__arrow" js-open-articles-row>
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m8 11 4 4 4-4" stroke="#00B8E4" stroke-width="2" stroke-linecap="round"></path>
                  </svg></span>
                  */?>
            </div>
            
            <div class="main-articles__right">
                <div class="main-articles__info-container">
                  <div class="main-articles__info">
                    <div class="main-articles__info-image">
                      <div class="image" style="background-image: url(<?=$dctRubric['ITEM']['PREVIEW_PICTURE']['SRC']?>)"></div>
                    </div>
                    <div class="main-articles__info-about">
                      <p class="title"><?=$dctRubric['ITEM']['NAME']?></p>
                      <p class="about"><?=$dctRubric['ITEM']['PREVIEW_TEXT']?></p>
                      <?if($dctRubric['ITEM']['DETAIL_PAGE_URL']):?>
                      <a class="btn" href="<?=$dctRubric['ITEM']['DETAIL_PAGE_URL']?>">подробнее</a>
                      <?endif?>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?endforeach?>
        
        <div class="main-articles__item">
          
            <div class="main-articles__left">
                <p class="main-articles__title">Полезная информация</p>
                <div class="main-articles__links">
                    <a href="/expo/">Выставки</a>
                    <a href="/partners/">Партнеры</a>
                </div>
            </div>
            
            <div class="main-articles__right">
                <div class="main-articles__info-container">
                  <div class="main-articles__info">
                    <?$APPLICATION->IncludeComponent(
                          'x:ib.list',
                          'articles_seo',
                          Array(
                                  'ELEMENTS_COUNT' => 16,
                                  'SORT' => ['SORT'=>'ASC'],
                                  'FILTER' => [
                                          'IBLOCK_ID' => IDIB_ARTICLES,
                                          'IBLOCK_SECTION_ID' => [false,'',0]
                                          //'PROPERTY_SEO_VALUE' => 'Y'
                                      ],
                                  'SELECT' => [
                                          'NAME',
                                          'CODE',
                                          'PREVIEW_PICTURE',
                                          'DETAIL_TEXT',
                                          'DETAIL_PAGE_URL',
                                      ],
                                      
                                  'CACHE_TYPE' => $arParams['CACHE_TYPE'],
                                  'CACHE_TIME' => 3600,
                                  'CACHE_FILTER' => 'Y',
                                  'CACHE_GROUPS' => 'Y',
                                  
                              )
                      );?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>