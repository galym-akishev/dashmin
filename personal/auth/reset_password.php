<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Восстановаление пароля');
$APPLICATION->SetPageProperty('TITLE', 'Восстановаление пароля');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Восстановаление, пароль");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.auth.forgotpasswd",
    "",
    Array(
        "AUTH_AUTH_URL" => "/personal/auth/",
        "AUTH_REGISTER_URL" => "/personal/auth/registration.php"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
