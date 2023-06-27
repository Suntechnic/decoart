<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?><?include(S_P_LAYOUT.'/header.php');
$ss = \App\Stringstorage::getInstance();
$phone = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('phone'));
$phone2 = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('phone2'));
$wa = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('whatsapp'));
$tg = $ss->getStringVal('telegram');
?>
<div class="page">
	<!-- HEADER :: START-->
	<div class="header">
        <div class="container">
          <div class="header__wrapper">
            <a class="logotype" href="/" title="Главная страница"><img src="<?=P_IMAGES?>/logotype.svg" alt=""></a>
            <nav class="menu">
				<?include(S_P_INCLUDES.'/menu_links.php');?>
				<a class="phone" href="tel:<?=$phone->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone->getRawNumber();?></a>
			</nav>
				<div class="box__header">
                    <div class="header__box">
			<a class="header__tel" href="tel:+74952482108"><img src="/local/assets/dist/img/Phone1.svg"></a>
                        <a class="header__viber" href="https://api.whatsapp.com/send?phone=<?=$wa->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 178.34809 179.7393"><defs><style>.cls-1{fill:#00b9e5;fill-rule:evenodd;}</style></defs><path class="cls-1" d="M90.79149,0a87.57227,87.57227,0,0,0-74.9888,132.7656L0,179.7393l48.47409-15.5186A87.56141,87.56141,0,1,0,90.79149,0Zm0,160.4414a72.481,72.481,0,0,1-40.0986-12.0508l-28.0093,8.9659,9.104-27.0655a72.86212,72.86212,0,1,1,59.0039,30.1504Zm41.0527-52.9922c-2.1953-1.2021-12.9756-7.0205-14.998-7.8427-2.0215-.8204-3.4961-1.2481-5.0723.9335-1.5742,2.1758-6.04689,7.0499-7.4023,8.4932-1.3613,1.4434-2.6709,1.5781-4.8672.3731a61.04009,61.04009,0,0,1-17.5557-11.7618,67.50685,67.50685,0,0,1-11.853-15.9414c-1.2222-2.2871-.0088-3.4521,1.1519-4.5224,1.04241-.9658,2.3339-2.5293,3.50041-3.791a15.29008,15.29008,0,0,0,2.37409-3.6426,4.11531,4.11531,0,0,0-.0406-3.9219c-.518-1.1357-4.5752-12.3037-6.27-16.8467-1.6943-4.5429-3.58249-3.8672-4.8872-3.9189-1.3037-.0449-2.7866-.2901-4.27729-.3447a8.21475,8.21475,0,0,0-6.064,2.5712c-2.13181,2.1592-8.10841,7.3487-8.52,18.3487-.41161,10.9931,7.19729,21.9209,8.25829,23.4511,1.062,1.5342,14.5298,25.3711,36.9116,35.1739,22.3867,9.7998,22.5039,6.8125,26.6113,6.5927,4.1094-.2167,13.42481-4.914,15.4844-10.0595,2.0586-5.1465,2.2236-9.6211,1.7002-10.5742C135.50439,109.2666,134.03759,108.6484,131.84419,107.4492Z"/></svg></a>
						
						<?if($tg):?>
                        <a class="header__telegram" href="https://t.me/<?=$tg?>"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384.93032 324.09835"><g id="_5nE27b.tif" data-name="5nE27b.tif"><path d="M144.46171,304.35029c.52355-8.84608.99873-17.5806,1.56569-26.30912,1.22706-18.89094,2.61613-37.77243,3.6732-56.67262.25678-4.59148,1.59886-7.93328,5.16157-11.12606q78.13632-70.02338,156.02213-140.326c7.4363-6.08612,4.194-14.31651-10.67756-5.014q-97.32987,61.369-194.54753,122.91541a10.7355,10.7355,0,0,1-10.124,1.25767C68.39245,180.28651,41.1645,171.76066,13.98,163.1a40.59938,40.59938,0,0,1-7.35-2.9907c-8.06586-4.46525-8.9514-11.30022-1.66928-17.02878a59.24366,59.24366,0,0,1,14.66822-8.1983c23.587-9.36735,47.30765-18.39865,70.98824-27.53011,88.686-34.19817,161.20558-62.156,249.89564-96.34364C386.159-7.91539,390.81455-5.25506,380.11961,41.35117q-27.7104,131.46146-55.7834,262.84648c-4.39523,20.6227-17.997,25.6336-35.00616,13.07863q-39.88961-29.44372-79.75941-58.9143c-1.59432-1.17752-3.21277-2.32242-5.09591-3.68165-1.24592,1.11045-2.485,2.1371-3.63706,3.2535q-20.04582,19.4253-40.05869,38.8845C156.39029,301.0959,151.65138,304.513,144.46171,304.35029Z" fill="#00b9e5"/></g></svg></a>
						<?endif?>
                        <a class="header__phone" href="tel:<?=$phone->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone->getRawNumber();?></a>
                    </div>
                    <!--<a class="header__phone" href="tel:<?=$phone2->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone2->getRawNumber();?></a>-->
                </div>
			<!--<a class="header__phone" href="tel:<?=$phone->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone->getRawNumber();?></a>-->
			
            <button class="hamburger hamburger--squeeze" type="button" js-hamburger><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
          </div>
        </div>
	</div>
	<!-- HEADER :: END-->
	<main>
		<?if($USER->isAdmin()):?>
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
					"START_FROM" => "0", 
					"PATH" => "", 
					"SITE_ID" => "s1" 
				)
			);?>
		<?endif?>