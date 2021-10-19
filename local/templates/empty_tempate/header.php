<?php
    /** @var \CMain $APPLICATION */

    if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    {
        die();
    }

    $templateAsset = \Bitrix\Main\Page\Asset::getInstance();
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?=$APPLICATION->ShowTitle()?></title>
        <?=$APPLICATION->ShowHead()?>
        <?=$APPLICATION->ShowMeta('author')?>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

        <?php
            $templateAsset->addCss(SITE_TEMPLATE_PATH . '/vendor/bootstrap/css/bootstrap.min.css');

            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
        ?>
    </head>
    <body style="background-color: #4AA0DD;">