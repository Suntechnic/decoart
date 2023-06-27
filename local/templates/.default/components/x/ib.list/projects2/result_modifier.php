<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    
    if ($arResult['ITEMS'][$i]['DETAIL_PICTURE']) {
        $arResult['ITEMS'][$i]['DETAIL_PICTURE'] = \CFile::getPath($arResult['ITEMS'][$i]['DETAIL_PICTURE']);
    } else {
        if ($arResult['ITEMS'][$i]['PREVIEW_PICTURE']) $arResult['ITEMS'][$i]['DETAIL_PICTURE'] = \CFile::getPath($arResult['ITEMS'][$i]['PREVIEW_PICTURE']);
    }
}
