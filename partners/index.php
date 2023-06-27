<?
//define('APPLICATION_ENV', 'dev');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Партнёры');?>

<?$APPLICATION->IncludeComponent(
        'x:ib.list',
        'partners',
        Array(
                'ELEMENTS_COUNT' => 1600,
                'SORT' => ['PROPERTY_DATESTART' => 'ASC','SORT'=>'ASC'],
                'FILTER' => [
                        'ACTIVE' => 'Y',
                        'DATE_ACTIVE' => 'Y',
                        'IBLOCK_ID' => IDIB_PARTNERS,
                    ],
                'SELECT' => [
                        'NAME',
                        'PREVIEW_PICTURE',
                        'PREVIEW_TEXT',
                        'DETAIL_PAGE_URL',
                        'PROPERTY_URL'
                    ],
                    
                'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                'CACHE_TIME' => 3600,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                
            )
    );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>