<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор - Расчитать стоимость дизайн проекта и ремонта Вашей квартиры или загородного дома");
$APPLICATION->SetPageProperty('description',"Рассчитать стоимость услуг на проектирование и строительство загородного дома, создание дизайн проекта интерьера.");
?>


<?$APPLICATION->IncludeFile(
		P_INCLUDES.'/calculator.php',
		array(
                'FULLPRICELISTSHOW' => 'Y',
            ),
		array(
				"MODE"      => "html",                                           // будет редактировать в веб-редакторе
				"NAME"      => "включаемую область",      // текст всплывающей подсказки на иконке
			)
	);?>
    
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>