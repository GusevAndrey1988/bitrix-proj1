<?php

require_once 'autoloader.php';

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandlerCompatible(
    'main',
    'OnPanelCreate',
    [\App\Events\EventsHandlers\PanelButtonsHandler::class, 'addDisableSideBarButton']
);