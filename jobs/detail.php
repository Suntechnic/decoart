<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Статьи');?>

<?$APPLICATION->IncludeComponent(
            'x:ib.list',
            'article',
            Array(
                    'AJAX_MODE' => 'N',
                    'ELEMENTS_COUNT' => 1,
                    'SORT' => ['SORT'=>'ASC'],
                    'SECTION_CODE' => $_REQUEST['SECTION_CODE'],
                    'FILTER' => [
                            'IBLOCK_ID' => IDIB_ARTICLES,
                            'CODE' => $_REQUEST['ELEMENT_CODE']
                        ],
                    'SELECT' => [
                            'NAME',
                            'TIMESTAMP_X',
                            'DATE_ACTIVE_FROM',
                            'DETAIL_PAGE_URL',
                            'DETAIL_TEXT'
                        ],
                        
                    'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                    'CACHE_TIME' => 3600,
                    'CACHE_FILTER' => 'Y',
                    'CACHE_GROUPS' => 'Y',
                    
                )
        );?>
        
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>