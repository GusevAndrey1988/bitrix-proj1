<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
?>

<?php if (!empty($arResult)): ?>
	<nav class="main-nav" role="navigation">
		<ul class="main-menu">
			<?php foreach ($arResult as $menuItem): ?>
				<li><a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>
<?php endif ?>
