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
<?if($arResult['ITEMS']):?>
<section class="faq">
    <div class="container">
        <h2>Часто задаваемые вопросы</h2>
        <?foreach($arResult['ITEMS'] as $dctItem):?>
        <div class="int-design__item" data-bxelmid="<?=$dctItem?>">
            <p class="int-design__title is-active" js-open-design-info="">вопрос клиента</p>
            <div class="vopros"><?=$dctItem['PREVIEW_TEXT']?></div>
            <div class="int-design__hidden" style="display: block">
                <div class="otvet">
                    <div class="zag">ответ специалиста</div>
                    <p><?=$dctItem['DETAIL_TEXT']?></p>
                </div>
            </div>
        </div>
        <?endforeach?>
    </div>
</section>
<?endif?>



