
<?$APPLICATION->IncludeComponent(
        'x:ib.list',
        'jobs',
        Array(
                'AJAX_MODE' => 'N',
                'ELEMENTS_COUNT' => 10,
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
                        'DETAIL_PAGE_URL'
                    ],
                
                'CACHE_TYPE' => APPLICATION_ENV=='dev'?'N':'A',
                'CACHE_TIME' => 3600,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                
            )
    );?>