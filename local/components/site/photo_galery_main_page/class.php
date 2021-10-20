<?php

namespace App\Components\MainPage;

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

class PhotoGalery extends \CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        if (!isset($arParams['CACHE_TIME']))
        {
            $arParams['CACHE_TIME'] = 36000000;
        }

        return $arParams;
    }

    public function executeComponent()
    {
        if (!isset($this->arParams['IBLOCK_ID']))
        {
            ShowError(Loc::getMessage('SITE_PHOTO_GALERY_IBLOCK_ID_NOT_SET_ERR'));
            return false;
        }

        if (!Loader::includeModule('iblock'))
        {
            ShowError(Loc::getMessage('SITE_PHOTO_GALERY_MODULE_IBLOCK_NOT_INSTALLED'));
            return false;
        }

        if ($this->startResultCache())
        {
            $categoriesList = $this->getCategoriesList();
            $this->arResult['CATEGORIES'] = $categoriesList;

            $photosRawList = $this->getPhotosList();
            $photosList = [];
            foreach ($photosRawList as $photo)
            {
                $photoSrc = \CFile::GetPath($photo['DETAIL_PICTURE']);
                $categoryCode = $categoriesList[$photo['IBLOCK_SECTION_ID']]['CODE'] ?? '';

                $photosList[] = [
                    'NAME' => $photo['ID'],
                    'DESCRIPTION' => $photo['PREVIEW_TEXT'],
                    'CATEGORY_CODE' => $categoryCode,
                    'SRC' => $photoSrc,
                    'DETAIL_TEXT' => $photo['PREVIEW_TEXT'],
                ];
            }

            $this->arResult['PHOTOS'] = $photosList;

            $this->setResultCacheKeys([]);

            return $this->includeComponentTemplate();
        }

        return true;
    }

    private function getCategoriesList() : array
    {
        $categoriesCollection = \Bitrix\Iblock\SectionTable::getList([
            'select' => [
                'ID',
                'IBLOCK_ID',
                'NAME',
                'CODE',
            ],
            'filter' => [
                '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                '=ACTIVE' => 'Y',
                '=IBLOCK_SECTION_ID' => '0',
            ],
        ])->fetchCollection();

        $categoriesList = [];
        foreach ($categoriesCollection as $category)
        {
            $categoriesList[$category->getId()] = [
                'NAME' => $category->getName(),
                'CODE' => $category->getCode(),
            ];
        }

        return $categoriesList;
    }

    private function getPhotosList() : array
    {
        $photosList = \Bitrix\Iblock\ElementTable::getList([
            'select' => [
                'ID',
                'IBLOCK_ID',
                'NAME',
                'IBLOCK_SECTION_ID',
                'DETAIL_PICTURE',
                'PREVIEW_TEXT',
                'DETAIL_TEXT',
            ],
            'filter' => [
                '=IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                '=ACTIVE' => 'Y',
            ]
        ])->fetchAll();

        return $photosList;
    }
}