<?
foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    if (!$dctItem['CODE'] || !$dctItem['DETAIL_TEXT']) unset($arResult['ITEMS'][$i]['DETAIL_PAGE_URL']);
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE'] = \CFile::getFileArray($dctItem['PREVIEW_PICTURE']);
}