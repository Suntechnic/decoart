<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
# http://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getlist.php

foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE'] = \CFile::getPath($arResult['ITEMS'][$i]['PREVIEW_PICTURE']);
}


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
        'SECTION_PAGE_URL'
    );
$arFilter = Array(
        'IBLOCK_ID'=> $arResult['FILTER']['IBLOCK_ID'],
        'ACTIVE_DATE' => 'Y',
        'ACTIVE'=>'Y'
    );
$db_res = CIBlockSection::GetList(
        Array('SORT'=>'ASC'),
        $arFilter,
        true,
        $arSelect
    );
while($ar_result = $db_res->GetNext()) {
    $arResult['SECTIONS'][] = $ar_result;
}