<?

foreach ($arResult['ITEMS'] as $i=>$dctItem) {
    if ($dctItem['PROPERTY_PDF_VALUE'])
            $arResult['ITEMS'][$i]['PROPERTY_PDF_VALUE']
                    = \CFile::getFileArray($dctItem['PROPERTY_PDF_VALUE']);
}