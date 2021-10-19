<?php

namespace App\Components\MainPage;

use Bitrix\Main\Loader;

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
            ShowError('IBLOCK_ID not set');
            return false;
        }

        if (!Loader::includeModule('iblock'))
        {
            ShowError('Module iblock isn\'t installed');
            return false;
        }

        if ($this->startResultCache())
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

            $this->arResult['CATEGORIES'] = $categoriesList;

            $photosCollection = \Bitrix\Iblock\ElementTable::getList([
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
            ])->fetchCollection();

            $photosList = [];
            foreach ($photosCollection as $photo)
            {
                $photoSrc = \CFile::GetPath($photo->getDetailPicture());
                $categoryCode = $categoriesList[$photo->getIblockSectionId()]['CODE'] ?? '';

                $photosList[] = [
                    'NAME' => $photo->getName(),
                    'DESCRIPTION' => $photo->getPreviewText(),
                    'CATEGORY_CODE' => $categoryCode,
                    'SRC' => $photoSrc,
                    'DETAIL_TEXT' => $photo->getDetailText(),
                ];
            }

            $this->arResult['PHOTOS'] = $photosList;

            $this->setResultCacheKeys([]);

            return $this->includeComponentTemplate();
        }

        return true;
    }
}