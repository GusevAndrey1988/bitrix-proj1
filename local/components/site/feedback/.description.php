<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	'NAME' => GetMessage('SITE_FEEDBACK_COMPONENT_NAME'),
	'DESCRIPTION' => GetMessage('SITE_FEEDBACK_COMPONENT_DESCR'),
	'ICON' => '/images/feedback.gif',
	'PATH' => [
        'NAME' => GetMessage('SITE_COMPONENTS_GROUP_NAME'),
        'ID' => 'site_components',
    ],
);
?>