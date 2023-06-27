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
<section class="instagram">
    <div class="container">
        <h2>наш instagram</h2>
        <div class="instagram__row">
            <?foreach($arResult['ITEMS'] as $dctItem):?>
            <div class="instagram__el"><a class="instagram__item" href="<?=$dctItem['LINK']?>" target="_blank"> <img src="<?=$dctItem['IMG']?>" alt=""><span>Смотреть</span></a></div>
            <?endforeach?>
        </div>
    </div>
</section>
<?endif?>



