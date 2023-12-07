<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Dashmin - статистика');
$APPLICATION->SetPageProperty('TITLE', 'Dashmin - статистика');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Dashmin, статистика, информация");

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
                    <h3>Проект портфолио с системой авторизации</h3>
                    <ol>
                        <li>Можно самому создать <b>новый</b> аккаунт.</li>
                        <li>
                            Можно использовать тестовый аккаунт:
                            <ul>
                                <li>
                                    логин - testuser,
                                </li>
                                <li>
                                    пароль - 987654321.
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <p class="text-center mb-1"><a href="/personal/auth/">Есть аккаунт?</a></p>
                <p class="text-center mb-1"><a href="/personal/auth/registration.php">Создать аккаунт?</a></p>
                <p class="text-center mb-1"><a href="/personal/auth/reset_password.php">Забыл пароль?</a></p>
            </div>
        </div>
    </div>
</div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
