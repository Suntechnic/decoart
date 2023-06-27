<?
$ss = \App\Stringstorage::getInstance();

$title = $ss->getStringVal('title');
$description = $ss->getStringVal('description');
$dctPageProperties = [
    'title' => $title,
    'description' => $description,
    'og_title' => $title,
    'og_url' => 'https://minisol.ru'.\Bitrix\Main\Application::getInstance()->getContext()->getRequest()->getRequestUri(),
    'og_image' => 'https://minisol.ru'.P_IMAGES.'/'.$ss->getStringVal('image'),
    'og_description' => $description
];

foreach ($dctPageProperties as $prop=>$val) {
    if (!$APPLICATION->GetPageProperty($prop)) $APPLICATION->SetPageProperty($prop,$val);
}


$asset = \Bitrix\Main\Page\Asset::getInstance();
$asset->addCss(P_CSS.'/app.css',true);



