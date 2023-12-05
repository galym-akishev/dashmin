<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Восстановаление пароля');
$APPLICATION->SetPageProperty('TITLE', 'Восстановаление пароля');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Восстановаление, пароль");
?>

Password reset page



<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
