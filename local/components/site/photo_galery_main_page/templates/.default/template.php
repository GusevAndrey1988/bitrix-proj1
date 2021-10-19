<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

$categoriesList = $arResult['CATEGORIES'];
$photosList = $arResult['PHOTOS'];

?>

<div class="row">
    <div class="isotope-wrapper">
        <form class="isotope-toolbar">
            <label>
                <input type="radio" data-type="*" checked="" name="isotope-filter" />
                <span><?=Loc::getMessage('SITE_PHOTO_GALERY_STR_ALL')?></span>
            </label>
            <?php foreach ($categoriesList as $category): ?>
                <label>
                    <input type="radio" data-type="<?=$category['CODE']?>" name="isotope-filter" />
                    <span><?=$category['NAME']?></span>
                </label>
            <?php endforeach ?> 
        </form>
        
        <div class="isotope-box">
            <?php foreach ($photosList as $photo): ?>
                <div class="isotope-item" data-type="<?=$photo['CATEGORY_CODE']?>">
                    <figure class="snip1321">
                        <img src="<?=$photo['SRC']?>" alt="photo" />
                        <figcaption>
                            <a href="<?=$photo['SRC']?>"
                                data-lightbox="image-1"
                                data-title="<?=$photo['DETAIL_TEXT']?>"><i class="fa fa-search"></i></a>
                            <h4><?=$photo['NAME']?></h4>
                            <span><?=$photo['DESCRIPTION']?></span>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>