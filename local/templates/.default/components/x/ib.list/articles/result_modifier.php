<?
foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE'] = \CFile::getFileArray($dctItem['PREVIEW_PICTURE']);
}


if ($arResult['SECTION']['ID']) {
    $ipropSectionValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arResult['SECTION']['IBLOCK_ID'], $arResult['SECTION']['ID']);
    $arResult['SECTION']['SEO'] = $ipropSectionValues->getValues();
}