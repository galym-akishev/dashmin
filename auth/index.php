<?php
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="/" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                    </a>
                </div>
                <div>
                    <h3>Вы зарегистрированы и успешно авторизовались</h3>
                    <p>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей) и т.п.</p>
                    <p>
                        Перейти на <a href="/">Главную страницу</a>
                    </p>
                    <p>
                        Перейти на <a href="/personal/">Персональную страницу</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
