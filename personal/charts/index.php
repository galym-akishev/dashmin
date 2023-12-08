<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Dashmin - персональная статистика');
$APPLICATION->SetPageProperty('TITLE', 'Dashmin - персональная статистика');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Dashmin, персональная, статистика");

\Bitrix\Main\Loader::includeModule('iblock');

global $USER;
?>

<?php
if (!$USER->IsAuthorized()) {
    LocalRedirect("/");
}
?>

<!-- Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <?php
                $propertyValues = CIBlockElement::GetPropertyValues(1, array('ACTIVE' => 'Y'), true);
                while ($row = $propertyValues->Fetch()) { ?>
                    <ul id="sales_hidden_data" style="display: none;">
                        <?php foreach ($row[1] as $value) { ?>
                        <li id="sales_hidden_data-<?= $value ?>" data-geo="<?= $value ?>"><?= $value ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Single Line Chart</h6>
                <canvas id="line-chart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Multiple Line Chart</h6>
                <canvas id="salse-revenue"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Single Bar Chart</h6>
                <canvas id="bar-chart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Multiple Bar Chart</h6>
                <canvas id="worldwide-sales"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Pie Chart</h6>
                <canvas id="pie-chart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Doughnut Chart</h6>
                <canvas id="doughnut-chart"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Chart End -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
