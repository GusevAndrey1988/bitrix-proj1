<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

$arComponentDescription = [
    'NAME' => Loc::getMessage('SITE_PHOTO_GALERY_NAME'),
    'DESCRIPTION' => Loc::getMessage('SITE_PHOTO_GALERY_DESCRIPTION'),
    'PATH' => [
        'NAME' => Loc::getMessage('SITE_COMPONENTS_GROUP_NAME'),
        'ID' => 'site_components',
    ],
    'CACHE_PATH' => 'Y',
    'COMPLEX' => 'N',
];