<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Dashmin - персональная статистика');
$APPLICATION->SetPageProperty('TITLE', 'Dashmin - персональная статистика');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Dashmin, персональная, статистика");

global $USER;
?>

<?php
if (!$USER->IsAuthorized()) {
    LocalRedirect("/");
}
?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Логин</p>
                    <h6 class="mb-0"><?= $USER->GetLogin() ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-address-card fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Имя</p>
                    <h6 class="mb-0"><?= $USER->GetFullName() ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-envelope fa-3x text-primary"></i>
                <div class="ms-6">
                    <p class="mb-2">Email</p>
                    <h6 class="mb-0"><?= $USER->GetEmail() ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
