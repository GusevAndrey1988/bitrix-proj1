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
            $templateAsset->addCss(SITE_TEMPLATE_PATH . '/assets/css/fontawesome.css');
            $templateAsset->addCss(SITE_TEMPLATE_PATH . '/assets/css/tooplate-style.css');
            $templateAsset->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.css');
            $templateAsset->addCss(SITE_TEMPLATE_PATH . '/assets/css/lightbox.css');

            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/vendor/jquery/jquery.min.js', true);
            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/assets/js/isotope.min.js');
            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl-carousel.js');
            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/assets/js/lightbox.js');
            $templateAsset->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js');
        ?>
    </head>
    <!--
        Tooplate 2116 Blugoon
        https://www.tooplate.com/view/2116-blugoon
    -->
    <body>
        <div id="panel">
            <?=$APPLICATION->ShowPanel()?>
        </div>
        <div id="page-wraper">
            <!-- Sidebar Menu -->
            <?php
                $request = \Bitrix\Main\Context::getCurrent()->getRequest();

                $showSidePanel = $request->get('disable_side_bar') !== 'Y';
            ?>
            <?php if ($showSidePanel): ?>
                <div class="responsive-nav">
                    <i class="fa fa-bars" id="menu-toggle"></i>
                    <div id="menu" class="menu">
                        <i class="fa fa-times" id="menu-close"></i>
                        <div class="container">
                            <?php $APPLICATION->IncludeComponent(
                                'bitrix:main.include', 
                                '.default', 
                                [
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => SITE_TEMPLATE_PATH . '/include_areas/banner.php'
                                ],
                                false
                            );?>
                            <?php $APPLICATION->IncludeComponent(
                                'bitrix:menu', 
                                'site_main_page_menu', 
                                [
                                    'ALLOW_MULTI_SELECT' => 'N',	
                                    'CHILD_MENU_TYPE' => 'left',	
                                    'DELAY' => 'N',	
                                    'MAX_LEVEL' => '1',	
                                    'MENU_CACHE_GET_VARS' => [
                                        0 => '',
                                    ],
                                    'MENU_CACHE_TIME' => '3600',	
                                    'MENU_CACHE_TYPE' => 'Y',	
                                    'MENU_CACHE_USE_GROUPS' => 'Y',	
                                    'MENU_THEME' => 'site',
                                    'ROOT_MENU_TYPE' => 'left',
                                    'USE_EXT' => 'N',
                                ],
                                false
                            );?>
                            <?php $APPLICATION->IncludeComponent(
                                'bitrix:main.include', 
                                '.default', 
                                [
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => SITE_TEMPLATE_PATH . '/include_areas/social.php'
                                ],
                                false
                            );?>
                            <?php $APPLICATION->IncludeComponent(
                                'bitrix:main.include', 
                                '.default', 
                                [
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => SITE_TEMPLATE_PATH . '/include_areas/copyright_text.php'
                                ],
                                false
                            );?>
                        </div>
                    </div>
                </div>
            <?php endif ?>