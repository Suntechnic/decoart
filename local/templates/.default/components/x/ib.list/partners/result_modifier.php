<?
foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE'] = \CFile::getFileArray($dctItem['PREVIEW_PICTURE']);
}