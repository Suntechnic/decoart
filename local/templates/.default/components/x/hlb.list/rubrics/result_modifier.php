<?
# http://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getlist.php
/*
Для получения пользовательского поля указать его
код в виде UF_<PROPERTY_CODE>.
UF_* - для получения всех пользовательских полей
(Для работы такой выборки необходимо указывать фильтре IBLOCK_ID)
*/
$arSelect = Array(
        'ID',
        'NAME',
        'CODE',
        'UF_RUBRICS',
        'SECTION_PAGE_URL'
    );
$arFilter = Array(
        'IBLOCK_ID'=> IDIB_ARTICLES,
        'ACTIVE_DATE' => 'Y',
        'ACTIVE'=>'Y'
    );
$db_res = CIBlockSection::GetList(
        Array('SORT'=>'ASC'),
        $arFilter,
        true,
        $arSelect
    );
while($dctSection = $db_res->GetNext()) {
    if ($dctSection['ELEMENT_CNT'] > 0) $arSections[$dctSection['UF_RUBRICS']][] = $dctSection;
}



foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    $arRubricSections = $arSections[$dctItem['ID']];
    
    if (!$arRubricSections) continue;
    
	$arSelect = Array(
			'IBLOCK_ID',
			'ID',
			'NAME',
            'CODE',
			'PREVIEW_TEXT',
			'PREVIEW_PICTURE',
            'DETAIL_PAGE_URL',
            'DETAIL_TEXT'
		);
	$arFilter = Array(
			'IBLOCK_ID'=> IDIB_ARTICLES,
			'SECTION_ID' => array_column($arRubricSections,'ID'),
			'ACTIVE_DATE' => 'Y',
			'ACTIVE'=>'Y'
		);
	$db_res = CIBlockElement::GetList(['ID'=>'DESC'], $arFilter, false, ['nTopCount'=>1], $arSelect);
	if ($arElement = $db_res->GetNext()) {
        if (!$arElement['CODE'] || !$arElement['DETAIL_TEXT']) unset($arElement['DETAIL_PAGE_URL']);
        $arElement['PREVIEW_PICTURE'] = \CFile::getFileArray($arElement['PREVIEW_PICTURE']);
		$arResult['ITEMS'][$i]['ITEM'] = $arElement;
	}
    
    $arResult['ITEMS'][$i]['SECTIONS'] = $arRubricSections;
}