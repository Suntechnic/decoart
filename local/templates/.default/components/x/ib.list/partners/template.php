<section class="partners">
    <div class="container">
        <h1 class="title">Партнёры</h1>
        <div class="box">
            <?foreach($arResult['ITEMS'] as $dctItem):?>
            <div class="item">
                <a href="<?=$dctItem['PROPERTY_URL_VALUE']?>" target="_blank">
                <div class="img"><img src="<?=$dctItem['PREVIEW_PICTURE']['SRC']?>" alt=""></div>
                <div class="zag"><a href="#" target="_blank"><?=$dctItem['NAME']?></a></div>
                <div class="text"><?=$dctItem['PREVIEW_TEXT']?></div>
                </a>
            </div>
            <?endforeach?>
        </div>
    </div>
</section>