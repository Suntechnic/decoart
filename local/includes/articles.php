<?
$APPLICATION->IncludeComponent(
        'x:hlb.list',
        'rubrics',
        Array(
                'SORT' => ['ID'=>'ASC'],
                'HLBLOCK_ID' => 2,
                'SELECT' => [
                        'ID',
                        'UF_NAME',
                        'UF_XML_ID'
                    ],
                    
                
                'CACHE_TYPE' => 'N',
                'CACHE_TIME' => 3600,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                
            )
    );?>