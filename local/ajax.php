<?
// вместо хедера
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
CModule::IncludeModule("iblock");

$el = new CIBlockElement;

if ($_REQUEST['jobid']) {
    $arElementFields = Array(
            'IBLOCK_ID'      => IDIB_RECALLJOBS,
            'NAME'           => $_REQUEST['name'],
            'ACTIVE'         => 'N',            // активен
            'PREVIEW_TEXT'   => $_REQUEST['phone'],
            'PROPERTY_VALUES' => [
                    'JOB' => $_REQUEST['jobid'],
                    'FILE' => $_FILES['file']
                ]
        );
    
    $arSend = [
            
            'NAME' => $_REQUEST['name'],
            'PHONE' => $_REQUEST['phone']
        ];
    \CEvent::Send("NEW_RECALLJOB", 's1', $arSend);
    
    $arResult = [];
    if($ID = $el->Add($arElementFields)) {
        $arResult = ['status'=>0, 'doc'=>$ID];
    } else {
        $arResult = ['status'=>1, 'errors'=>$el->LAST_ERROR];
    }
} else {
    // https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/add.php

    $arElementFields = Array(
            'IBLOCK_ID'      => IDIB_RECALL,
            'NAME'           => $_REQUEST['name'],
            'ACTIVE'         => 'N',            // активен
            'PREVIEW_TEXT'   => $_REQUEST['phone'],
            'DETAIL_TEXT'    => $_REQUEST['service'],
        );
    
    $arSend = [
            'NAME' => $_REQUEST['name'],
            'PHONE' => $_REQUEST['phone'],
            'SERVICE' => $_REQUEST['service']
        ];
    \CEvent::Send("NEW_RECALL", 's1', $arSend);
    
    $arResult = [];
    if($ID = $el->Add($arElementFields)) {
        $arResult = ['status'=>0, 'doc'=>$ID];
    } else {
        $arResult = ['status'=>1, 'errors'=>$el->LAST_ERROR];
    }
}


echo json_encode($arResult);