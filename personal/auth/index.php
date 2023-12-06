<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Авторизация');
$APPLICATION->SetPageProperty('TITLE', 'Авторизация');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Авторизация");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.auth.form",
    "",
    Array(
        "AUTH_FORGOT_PASSWORD_URL" => "/personal/auth/reset_password.php",
        "AUTH_REGISTER_URL" => "/personal/auth/registration.php",
        "AUTH_SUCCESS_URL" => "/personal/"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
