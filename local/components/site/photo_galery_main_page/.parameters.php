<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

$arComponentParameters = [
    'GROUPS' => [],
    'PARAMETERS' => [
        'CACHE_TIME' => [
            'DEFAULT' => 36000000,
        ],

        'IBLOCK_ID' => [
            'TYPE' => 'TEXT',
            'NAME' => Loc::getMessage('SITE_PHOTO_GALERY_IBLOCK_ID'),
            'DEFAULT' => '0',
        ]
    ],
];