<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

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

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/chart/chart.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/easing/easing.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/waypoints/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/owlcarousel/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/moment.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/moment-timezone.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
    Asset::getInstance()->addString("<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>");
    Asset::getInstance()->addString("<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js'></script>");
    ?>

    <?php
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowHead();
    ?>

</head>

<body id="body">
<?php $APPLICATION->ShowPanel(); ?>
<div class="container-xxl position-relative bg-white d-flex p-0">
