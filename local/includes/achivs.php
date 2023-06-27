<?
# http://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getlist.php
$arSelect = Array(
        'ID'
    );

$arFilter = Array(
        'IBLOCK_ID'=> IDIB_ACHIVS,
        'ACTIVE_DATE' => 'Y',
        'ACTIVE'=>'Y'
    );
$db_res = CIBlockSection::GetList(
        Array('SORT'=>'ASC'),
        $arFilter,
        true,
        $arSelect
    );
while ($arSection = $db_res->fetch()) {
    $APPLICATION->IncludeComponent(
            'x:ib.list',
            'achivs',
            Array(
                    'AJAX_MODE' => 'N',
                    'ELEMENTS_COUNT' => 10,
                    'SORT' => ['SORT'=>'ASC'],
                    'SECTION_ID' => $arSection['ID'],
                    'FILTER' => [
                            'IBLOCK_ID' => IDIB_ACHIVS,
                            
                            'ACTIVE' => 'Y',
                            'ACTIVE_DATE' =>'Y'
                        ],
                    'SELECT' => [
                            'NAME',
                            'PREVIEW_PICTURE',
                            'PREVIEW_TEXT'
                        ],
                    
                    'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                    'CACHE_TIME' => 3700,
                    'CACHE_FILTER' => 'Y',
                    'CACHE_GROUPS' => 'Y',
                    
                )
        );
}