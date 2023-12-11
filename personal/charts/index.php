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
                            <li id="sales_hidden_data-<?= $value ?>" data-value="<?= $value ?>"><?= $value ?></li>
                        <?php } ?>
                    </ul>
                    <script>
                        var li_elements = document.getElementById("sales_hidden_data").getElementsByTagName("li");
                        var sales_data = [];
                        for (var i = 0, len = li_elements.length; i < len; i++ ) {
                            sales_data.push(li_elements[i].getAttribute('data-value'));
                        }
                        localStorage["sales_data"] = JSON.stringify(sales_data);
                    </script>
                    <?php } ?>
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Single Line Chart</h6>
                <canvas id="line-chart"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <?php
            $propertyValues = CIBlockElement::GetPropertyValues(2, array('ACTIVE' => 'Y'), true);
            while ($row = $propertyValues->Fetch()) { ?>
                <ul id="revenue_hidden_data_values" style="display: none;">
                    <?php foreach ($row[2] as $value) { ?>
                        <li data-value="<?= $value ?>"><?= $value ?></li>
                    <?php } ?>
                </ul>
                <ul id="revenue_hidden_data_countries" style="display: none;">
                    <?php foreach ($row[3] as $value) { ?>
                        <li data-value="<?= $value ?>"><?= $value ?></li>
                    <?php } ?>
                </ul>
                <script>
                    var li_elements = document.getElementById("revenue_hidden_data_values").getElementsByTagName("li");
                    var revenue_data_values = [];
                    for (var i = 0, len = li_elements.length; i < len; i++ ) {
                        revenue_data_values.push(li_elements[i].getAttribute('data-value'));
                    }
                    localStorage["revenue_data_values"] = JSON.stringify(revenue_data_values);
                </script>
                <script>
                    var li_elements = document.getElementById("revenue_hidden_data_countries").getElementsByTagName("li");
                    var revenue_data_countries = [];
                    for (var i = 0, len = li_elements.length; i < len; i++ ) {
                        revenue_data_countries.push(li_elements[i].getAttribute('data-value'));
                    }
                    localStorage["revenue_data_countries"] = JSON.stringify(revenue_data_countries);
                </script>
            <?php } ?>
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Single Bar Chart</h6>
                <canvas id="bar-chart"></canvas>
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
