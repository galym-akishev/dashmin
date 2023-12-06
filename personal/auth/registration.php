<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Регистрация');
$APPLICATION->SetPageProperty('TITLE', 'Регистрация');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Регистрация");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "",
    Array(
        "AUTH" => "Y",
        "REQUIRED_FIELDS" => array("EMAIL", "NAME", "LAST_NAME"),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array("EMAIL", "NAME", "LAST_NAME"),
        "SUCCESS_PAGE" => "/personal/",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
