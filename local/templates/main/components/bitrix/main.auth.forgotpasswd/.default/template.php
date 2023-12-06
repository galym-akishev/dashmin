<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);


if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');
	return;
}
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
                    <h3>Восстановление пароля</h3>
                </div>

                <?php if ($arResult['ERRORS']): ?>
                <div class="alert alert-danger">
                    <?php foreach ($arResult['ERRORS'] as $error)
                    {
                        echo $error;
                    }
                    ?>
                </div>
                <?php elseif ($arResult['SUCCESS']): ?>
                <div class="alert alert-success">
                    <?= $arResult['SUCCESS'];?>
                </div>
                <?php endif; ?>

                <p class="bx-authform-content-container"><?= Loc::getMessage('MAIN_AUTH_PWD_NOTE');?></p>

                <form name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>">

                    <div class="form-floating mb-3">
                        <input
                                id="<?= $arResult['FIELDS']['login'];?>"
                                type="text"
                                class="form-control"
                                name="<?= $arResult['FIELDS']['login'];?>"
                                maxlength="255"
                                value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>"
                                placeholder=""
                        />
                        <label for="<?= $arResult['FIELDS']['login'];?>">
                            <?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_LOGIN');?>
                        </label>
                    </div>
                    <div class="mb-3">
                        <?= Loc::getMessage('MAIN_AUTH_PWD_OR');?>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                                id="<?= $arResult['FIELDS']['email'] ?>"
                                type="text"
                                class="form-control"
                                name="<?= $arResult['FIELDS']['email'] ?>"
                                maxlength="255"
                                value=""
                                placeholder=""
                        />
                        <label for="<?= $arResult['FIELDS']['email'] ?>">
                            <?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_EMAIL');?>
                        </label>
                    </div>
                    <div>
                        <input
                                type="submit"
                                class="btn btn-primary py-3 w-100 mb-4"
                                name="<?= $arResult['FIELDS']['action'];?>"
                                value="<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_SUBMIT');?>"
                        />
                    </div>

                    <?php if ($arResult['AUTH_REGISTER_URL']):?>
                        <div class="text-center mb-0">
                            <p>
                                <a class="text-center mb-0" href="<?= $arResult['AUTH_AUTH_URL'];?>" rel="nofollow">
                                    <?= Loc::getMessage('MAIN_AUTH_PWD_URL_AUTH_URL');?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if ($arResult['AUTH_AUTH_URL']):?>
                        <div class="text-center mb-0">
                            <p>
                                <a class="text-center mb-0" href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
                                    <?= Loc::getMessage('MAIN_AUTH_PWD_URL_REGISTER_URL');?>
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
	document.bform.<?= $arResult['FIELDS']['login'];?>.focus();
</script>
