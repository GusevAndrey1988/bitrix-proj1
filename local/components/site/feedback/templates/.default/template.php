<?

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?php
if (!empty($arResult['ERROR_MESSAGE']))
{
	foreach($arResult['ERROR_MESSAGE'] as $v)
		ShowError($v);
}
?>

<?php
	$reqName = false;
	$reqEmail = false;
	$reqMessage = false;
	$reqSubject = false;

	if ($arParams['REQUIRED_FIELDS'])
	{
		if (in_array('NAME', $arParams['REQUIRED_FIELDS']))
		{
			$reqName = true;
		}

		if (in_array('EMAIL', $arParams['REQUIRED_FIELDS']))
		{
			$reqEmail = true;
		}

		if (in_array('MESSAGE', $arParams['REQUIRED_FIELDS']))
		{
			$reqMessage = true;
		}

		if (in_array('SUBJECT', $arParams['REQUIRED_FIELDS']))
		{
			$reqSubject = true;
		}
	}
?>
<form id="contact" action="<?=POST_FORM_ACTION_URI?>" method="POST">
	<?=bitrix_sessid_post()?>
	<div class="row">
		<div class="col-md-6">
			<fieldset>
				<input type="text" name="user_name" class="form-control" id="name" placeholder="<?=Loc::getMessage('MFT_NAME') . ($reqName ? ' *' : '')?>"
					<?php if ($reqName) echo 'required'?> value="<?=$arResult['AUTHOR_NAME']?>">
			</fieldset>
		</div>
		<div class="col-md-6">
			<fieldset>
				<input type="text" name="user_email" class="form-control" id="email" placeholder="<?=Loc::getMessage('MFT_EMAIL') . ($reqEmail ? ' *' : '')?>"
					<?php if ($reqEmail) echo 'required'?> value="<?=$arResult['AUTHOR_EMAIL']?>">
			</fieldset>
		</div>
		<div class="col-md-12">
			<fieldset>
				<input type="text" name="SUBJECT" class="form-control" id="subject" placeholder="<?=Loc::getMessage('MFT_SUBJECT') . ($reqEmail ? ' *' : '')?>"
					<?php if ($reqEmail) echo 'required'?> value="<?=$arResult['SUBJECT']?>">
			</fieldset>
		</div>
		<div class="col-md-12">
			<fieldset>
				<textarea name="MESSAGE" rows="6" class="form-control" id="message" placeholder="<?=Loc::getMessage('MFT_MESSAGE') . ($reqMessage ? ' *' : '')?>"
					<?php if ($reqMessage) echo 'required'?>><?=$arResult['MESSAGE']?></textarea>
			</fieldset>
		</div>
		<?php if ($arParams['USE_CAPTCHA'] == 'Y'):?>
			<input type="hidden" name="captcha_sid" value="<?=$arResult['capCode']?>">
			<div class="col-md-6">
				<fieldset>
					<input type="text" name="captcha_word" class="form-control" placeholder="<?=Loc::getMessage('MFT_CAPTCHA_CODE')?>">
				</fieldset>
			</div>
			<div class="col-md-6">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult['capCode']?>" height="50" alt="CAPTCHA">
			</div>		
		<?endif;?>
		<div class="col-md-12">
			<fieldset>
				<button type="submit" id="form-submit" name="submit" class="button" value="submit">
					<?=Loc::getMessage('MFT_SUBMIT')?> </button>
			</fieldset>
		</div>
	</div>
</form>