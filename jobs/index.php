<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Вакансии компании DecoArt');
$APPLICATION->SetPageProperty('description',"Станьте частью нашей команды! Перечень открытых вакансий в компании ДекоАрт. ");
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$JOB = $request->get('JOB');
?>

<?$APPLICATION->IncludeComponent(
        'x:ib.list',
        'jobsfull',
        Array(
                'AJAX_MODE' => 'N',
                'ELEMENTS_COUNT' => 100,
                'SORT' => ['SORT'=>'ASC'],
                'FILTER' => [
                        'IBLOCK_ID' => IDIB_JOBS,
                        'ACTIVE' => 'Y',
                        'ACTIVE_DATE' =>'Y'
                    ],
                'SELECT' => [
                        'NAME',
                        'PREVIEW_PICTURE',
                        'PROPERTY_EMPLOYMENT',
                        'PROPERTY_AREA',
                        'PROPERTY_SALARYFROM',
                        'PROPERTY_SALARYTO',
                        
                        'PREVIEW_TEXT',
                        'DETAIL_TEXT',
                        'PROPERTY_RESP',
                        'PROPERTY_REQ',
                        'PROPERTY_COND',
                        'PROPERTY_ORDER',
                        'PROPERTY_SKILLS'
                    ],
                
                'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                'CACHE_TIME' => 3710,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                'TEMPLATE' => [
                    'JOB' => $JOB
                ]
                
            )
    );?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>