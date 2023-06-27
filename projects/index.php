<?
//define('APPLICATION_ENV', 'dev');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Готовые дизайн проекты студии ДекоАрт, портфолио выполненных работ');
$APPLICATION->SetPageProperty('description',"Реализованные дизайн проекты квартир, интерьера домов, дизайн кухни и ванных комнат от студии ДекоАрт. Примеры лучших проектов дизайна интерьеров на нашем сайте.");

$sectFilter = [];
if ($_REQUEST['SECTION']) $sectFilter['SECTION_ID'] = $_REQUEST['SECTION'];
$typeFilter = [];
if ($_REQUEST['TYPE']) $typeFilter['PROPERTY_TYPE_VALUE'] = $_REQUEST['TYPE'];


?>

<!-- BEGIN SECTION :: PROJECTS-->
<section class="projects">
    <div class="container">
        <h1>Проекты</h1>
        <!--  <div class="projects__tags">
            <div class="projects__tag-el"><a class="projects__tag is-active" href="#"> Архитектурное проектирование</a></div>
            <div class="projects__tag-el"><a class="projects__tag" href="#"> дизайн интерьеров</a></div>
            <div class="projects__tag-el"><a class="projects__tag" href="#"> строительство домов</a></div>
            <div class="projects__tag-el"><a class="projects__tag" href="#"> ремонт квартир</a></div>
          </div>-->
        <?$APPLICATION->IncludeComponent(
                'x:ib.list',
                'projects',
                Array(
                        'SORT' => ['SORT'=>'ASC'],
                        
                        'FILTER' => [
                                'IBLOCK_ID' => IDIB_PROJECTS,
                                'ACTIVE'=>'Y',
                                'ACTIVE_DATE'=>'Y'
                            ],
                        'FILTERS' => [
                                'SECTIONS' => $sectFilter,
                                'TYPES' => $typeFilter
                            ],
                        'SELECT' => [
                                'NAME',
                                'DETAIL_PAGE_URL',
                                'PREVIEW_PICTURE',
                                'DETAIL_PICTURE',
                            ],
                            
                        
                        'CACHE_TYPE' => 'N', //APPLICATION_ENV=='dev'?'N':'A',
                        'CACHE_TIME' => 3600,
                        'CACHE_FILTER' => 'Y',
                        'CACHE_GROUPS' => 'Y',
                        
                    )
            );?>
          
    </div>
</section>
<!-- END SECTION :: PROJECTS-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>