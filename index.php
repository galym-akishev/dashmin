<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Dashmin - статистика');
$APPLICATION->SetPageProperty('TITLE', 'Dashmin - статистика');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Dashmin, статистика, информация");

?>

Home page

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
