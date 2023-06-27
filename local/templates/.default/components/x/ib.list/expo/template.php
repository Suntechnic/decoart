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
?><section class="vistovki">
    <div class="container">
        <h1 class="title">Выставки</h1>
        
        <?/*
        <div class="tab">
            <button class="tablinks">2022</button>
            <button class="tablinks">2023</button>
        </div>
        */?>
        
        <div class="box">
            <?
            $Y = 0;
            foreach ($arResult['ITEMS'] as $dctItem): 
                $dateStart = new \Bitrix\Main\Type\DateTime($dctItem['PROPERTY_DATESTART_VALUE']);
                $dateFinish = new \Bitrix\Main\Type\DateTime($dctItem['PROPERTY_DATEFINISH_VALUE']);
                $DateStartD = \FormatDate('j',$dateStart->getTimestamp());
                $DateStartM = \FormatDate('F',$dateStart->getTimestamp());
                $DateFinishD = \FormatDate('j',$dateFinish->getTimestamp());
                $DateFinishM = \FormatDate('F',$dateFinish->getTimestamp());
                
                $DateStartY = \FormatDate('Y',$dateStart->getTimestamp());
            if ($Y != $DateStartY): $Y = $DateStartY;?><div class="line"><a class="tablinks" name="<?=$Y?>" href="#<?=$Y?>"><?=$Y?></a></div><?endif?>
            <div class="item">
                <div class="img"><img src="<?=$dctItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$dctItem['NAME']?>"></div>
                <div class="date"><?=$DateStartD?> <?=($DateStartM!=$DateFinishM)?$DateStartM:''?> – <?=$DateFinishD?> <?=$DateFinishM?></div>
                <div class="zag"><a href="<?=$dctItem['PROPERTY_ZAGURL_VALUE']?>" target="_blank"><?=$dctItem['PROPERTY_ZAGTEXT_VALUE']?></a></div>
                <div class="city"><?=$dctItem['PROPERTY_PLACE_VALUE']?></div>
                <div class="text"><?=$dctItem['PREVIEW_TEXT']?></div>
            </div>
            <?endforeach?>
        </div>
    </div>
</section>