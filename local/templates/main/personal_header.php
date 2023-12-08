<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

global $USER;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>
        <?php $APPLICATION->ShowTitle(); ?>
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <link rel="icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.googleapis.com'>");
    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap' rel='stylesheet'>");
    Asset::getInstance()->addString("<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>");
    Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.googleapis.com'>");
    Asset::getInstance()->addString("<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' rel='stylesheet'>");

    Asset::getInstance()->addString("<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>");
    Asset::getInstance()->addString("<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js'></script>");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/chart/chart.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/easing/easing.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/waypoints/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/owlcarousel/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/moment.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/moment-timezone.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    ?>

    <?php
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowHead();
    ?>

</head>

<body id="body">
<div style="position: absolute; z-index:10000;">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="/personal/" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="<?=SITE_TEMPLATE_PATH?>/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $USER->GetFullName() ?></h6>
                    <span><?= $USER->GetLogin() ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="/personal/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Дашборд</a>
                <a href="/personal/charts/" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Диаграммы</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="/personal/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img
                                class="rounded-circle me-lg-2"
                                src="<?=SITE_TEMPLATE_PATH?>/assets/img/user.jpg"
                                alt="Profile picture"
                                style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?= $USER->GetFullName() ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/personal/" class="dropdown-item">Мой профиль</a>
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "",
                            Array(
                                "FORGOT_PASSWORD_URL" => "/personal/auth/reset_password.php",
                                "PROFILE_URL" => "/personal/",
                                "REGISTER_URL" => "/personal/auth/registration.php",
                                "SHOW_ERRORS" => "N"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
