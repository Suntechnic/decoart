<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Статьи');?>

<?$APPLICATION->IncludeComponent(
            'x:ib.list',
            'articles',
            Array(
                    'AJAX_MODE' => 'N',
                    'ELEMENTS_COUNT' => 1000,
                    'SORT' => ['SORT'=>'ASC'],
                    'SECTION_CODE' => $_REQUEST['SECTION_CODE'],
                    'FILTER' => [
                            'IBLOCK_ID' => IDIB_ARTICLES,
                        ],
                    'SELECT' => [
                            'NAME',
                            'TIMESTAMP_X',
                            'CODE',
                            'PREVIEW_PICTURE',
                            'DATE_ACTIVE_FROM',
                            'DETAIL_PAGE_URL',
                            'PREVIEW_TEXT',
                            'DETAIL_TEXT',
                        ],
                    'KEYS_CACHED' => ['SECTION'],
                    'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                    'CACHE_TIME' => 3600,
                    'CACHE_FILTER' => 'Y',
                    'CACHE_GROUPS' => 'Y',
                    
                )
        );?>
        
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>