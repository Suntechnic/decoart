<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$dctSeo = $arResult['ITEM']['SEO'];

if ($dctSeo['ELEMENT_META_TITLE']) {
    $APPLICATION->SetPageProperty('title', $dctSeo['ELEMENT_META_TITLE'], ['COMPONENT_NAME' => $component->getName()]);
} else {
    $APPLICATION->SetPageProperty('title', $arResult['ITEM']['NAME'], ['COMPONENT_NAME' => $component->getName()]);
}
$APPLICATION->SetTitle($APPLICATION->GetPageProperty('title'));

if ($dctSeo['ELEMENT_META_DESCRIPTION']) {
    $APPLICATION->SetPageProperty('description', $dctSeo['ELEMENT_META_DESCRIPTION'], ['COMPONENT_NAME' => $component->getName()]);
} else {
    $APPLICATION->SetPageProperty('description', $arResult['ITEM']['NAME'], ['COMPONENT_NAME' => $component->getName()]);
}