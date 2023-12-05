<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Dashmin - персональная статистика');
$APPLICATION->SetPageProperty('TITLE', 'Dashmin - персональная статистика');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Dashmin, персональная, статистика");
?>

Personal page index

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
