<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <?php if ($arResult['ERRORS']):?>
                    <div class="alert alert-danger">
                        <?php foreach ($arResult['ERRORS'] as $error)
                            {
                                echo $error;
                            }
                        ?>
                    </div>
                <?php endif; ?>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="/" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                    </a>
                </div>
                <div>
                    <h3>Войти</h3>
                </div>
                <form name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">

                    <div class="form-floating mb-3">
                        <input
                                id="floatingInput"
                                type="text"
                                class="form-control"
                                name="<?= $arResult['FIELDS']['login'];?>"
                                placeholder="<?= $arResult['FIELDS']['login'];?>"
                                maxlength="255"
                                value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>"
                        />
                        <label for="floatingInput">
                            <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_LOGIN');?>
                        </label>
                    </div>

                    <div class="form-floating mb-4">
                        <input
                                id="floatingPassword"
                                type="password"
                                class="form-control"
                                name="<?= $arResult['FIELDS']['password'];?>"
                                placeholder="<?= $arResult['FIELDS']['password'];?>"
                                maxlength="255"
                                autocomplete="off"
                        />
                        <label for="floatingPassword">
                            <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_PASS');?>
                        </label>
                    </div>

                    <?php if ($arResult['STORE_PASSWORD'] == 'Y'):?>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <label>
                                    <input
                                            type="checkbox"
                                            id="USER_REMEMBER"
                                            class="form-check-input"
                                            name="<?= $arResult['FIELDS']['remember'];?>"
                                            value="Y"
                                    />
                                    <span>
                                        <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_REMEMBER');?>
                                    </span>
                                </label>
                            </div>
                            <?php if ($arResult['AUTH_FORGOT_PASSWORD_URL']):?>
                                    <a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">
                                        <?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD');?>
                                    </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="">
                        <input
                                type="submit"
                                class="btn btn-primary py-3 w-100 mb-4"
                                name="<?= $arResult['FIELDS']['action'];?>"
                                value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT');?>"
                        />
                    </div>

                    <?php if ($arResult['AUTH_REGISTER_URL']):?>
                        <div class="text-center mb-0">
                            <p>
                                Нет аккаунта?
                                <a class="text-center mb-0" href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
                                    <?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL');?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	<?php if ($arResult['LAST_LOGIN'] != ''): ?>
	    try {
            document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();
        }
        catch(e) {}
	<?php else: ?>
	    try {
            document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();
        }
        catch(e) {}
	<?php endif ?>
</script>
