<?php

namespace App\Events\EventsHandlers;

use Bitrix\Main\Localization\Loc;

class PanelButtonsHandler
{
    public function __construct()
    {
        \Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
    }

    public function addSideBarDisableButton() 
    {
        /** @var \CMain $APPLICATION */
        global $APPLICATION;

        $context = \Bitrix\Main\Context::getCurrent();
        $request = $context->getRequest();
        $uri = new \Bitrix\Main\Web\Uri($request->getRequestUri());

        $PARAM_NAME = 'disable_side_bar';
        if ($request->get($PARAM_NAME) === 'Y')
        {
            $uri->addParams([$PARAM_NAME => 'N']);
        }
        else
        {
            $uri->addParams([$PARAM_NAME => 'Y']);
        }

        $APPLICATION->AddPanelButton([
            'HREF' => $uri,
            'ICON' => 'bx-panel-small-button-icon bx-panel-site-structure-icon',
            'TEXT' => Loc::getMessage('PANEL_BUTTONS_HANDLER_DISABLE_SIDE_BAR_TEXT'),
            'ALT' => Loc::getMessage('PANEL_BUTTONS_HANDLER_DISABLE_SIDE_BAR_ALT'), 
            'MAIN_SORT' => 2000, 
            'SORT' => 10,
        ]);
    }
}