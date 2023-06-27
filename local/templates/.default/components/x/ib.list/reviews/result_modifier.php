<?


# http://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getlist.php

$arSelect = Array(
        'IBLOCK_ID',
        'ID',
        'NAME',
        'DETAIL_PAGE_URL'
    );

$arFilter = Array(
        'IBLOCK_ID'=> IDIB_PROJECTS,
        'ACTIVE_DATE' => 'Y',
        'ACTIVE'=>'Y',
        'ID' => array_filter(array_column($arResult['ITEMS'],'PROPERTY_PROJECT_VALUE'), function ($v) {return !!$v;})
    );
$db_res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($arProject = $db_res->GetNext()) {
    $refProjects[$arProject['ID']] = $arProject;
}

foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    if ($dctItem['PROPERTY_PDF_VALUE'])
            $arResult['ITEMS'][$i]['PROPERTY_PDF_VALUE']
                    = \CFile::getFileArray($dctItem['PROPERTY_PDF_VALUE']);
    if ($refProjects[$dctItem['PROPERTY_PROJECT_VALUE']])
            $arResult['ITEMS'][$i]['PROJECT'] = $refProjects[$dctItem['PROPERTY_PROJECT_VALUE']];
}