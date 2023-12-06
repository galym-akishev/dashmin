<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

if($arResult["PHONE_REGISTRATION"])
{
	CJSCore::Init('phone_auth');
}
?>

<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">

                <?php
                    if (!empty($arParams["~AUTH_RESULT"]))
                    {
                        ?>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                        </div>
                        <div>
                            <h3><?=GetMessage("AUTH_CHANGE_PASSWORD")?></h3>
                        </div>
                        <?php
                            ShowMessage($arParams["~AUTH_RESULT"]);
                    }
                ?>

                <?php if($arResult["SHOW_FORM"]): ?>
                    <form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
                        <?php if ($arResult["BACKURL"] <> ''): ?>
                            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                        <?php endif ?>
                        <input type="hidden" name="AUTH_FORM" value="Y">
                        <input type="hidden" name="TYPE" value="CHANGE_PWD">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                        </div>
                        <div>
                            <h3><?=GetMessage("AUTH_CHANGE_PASSWORD")?></h3>
                        </div>

                        <div class="form-floating mb-3">
                            <input
                                    id="USER_LOGIN"
                                    type="text"
                                    class="form-control"
                                    name="USER_LOGIN"
                                    maxlength="50"
                                    value="<?=$arResult["LAST_LOGIN"]?>"
                                    placeholder=""
                            />
                            <label for="USER_LOGIN">
                                <?=GetMessage("AUTH_LOGIN")?>
                                <span class="starrequired">*</span>
                            </label>
                        </div>

                        <?php if($arResult["USE_PASSWORD"]): ?>
                            <div class="form-floating mb-3">
                                <input
                                        id="USER_CURRENT_PASSWORD"
                                        type="text"
                                        class="form-control"
                                        name="USER_CURRENT_PASSWORD"
                                        maxlength="255"
                                        value="<?=$arResult["USER_CURRENT_PASSWORD"]?>"
                                        placeholder=""
                                />
                                <label for="USER_CURRENT_PASSWORD">
                                    <?=GetMessage("sys_auth_changr_pass_current_pass")?>
                                    <span class="starrequired">*</span>
                                </label>
                            </div>
                        <?php else: ?>
                            <div class="form-floating mb-3">
                                <input
                                        id="USER_CHECKWORD"
                                        type="text"
                                        class="form-control"
                                        name="USER_CHECKWORD"
                                        maxlength="50"
                                        value="<?=$arResult["USER_CHECKWORD"]?>"
                                        placeholder=""
                                />
                                <label for="USER_CHECKWORD">
                                    <?=GetMessage("AUTH_CHECKWORD")?>
                                    <span class="starrequired">*</span>
                                </label>
                            </div>
                        <?php endif ?>
                        <div class="form-floating mb-3">
                            <input
                                    id="USER_PASSWORD"
                                    type="text"
                                    class="form-control"
                                    name="USER_PASSWORD"
                                    maxlength="255"
                                    value="<?=$arResult["USER_PASSWORD"]?>"
                                    placeholder=""
                            />
                            <label for="USER_PASSWORD">
                                <?=GetMessage("AUTH_NEW_PASSWORD_REQ")?>
                                <span class="starrequired">*</span>
                            </label>
                        </div>
                        <?php if($arResult["SECURE_AUTH"]): ?>
                            <span class="bx-auth-secure" id="bx_auth_secure" title="<?= GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
                                <span class="bx-auth-secure-icon"></span>
                            </span>
                            <noscript>
                            <span class="bx-auth-secure" title="<?= GetMessage("AUTH_NONSECURE_NOTE")?>">
                                <span class="bx-auth-secure-icon bx-auth-secure-unlock"></span>
                            </span>
                            </noscript>
                            <script type="text/javascript">
                                document.getElementById('bx_auth_secure').style.display = 'inline-block';
                            </script>
                        <?php endif ?>
                        <div class="form-floating mb-3">
                            <input
                                    id="USER_CONFIRM_PASSWORD"
                                    type="text"
                                    class="form-control"
                                    name="USER_CONFIRM_PASSWORD"
                                    maxlength="255"
                                    value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"
                                    placeholder=""
                            />
                            <label for="USER_CONFIRM_PASSWORD">
                                <?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?>
                                <span class="starrequired">*</span>
                            </label>
                        </div>
                        <input
                                type="submit"
                                name="change_pwd"
                                class="btn btn-primary py-3 w-100 mb-4"
                                value="<?=GetMessage("AUTH_CHANGE")?>"
                        />
                    </form>
                    <p>
                        <?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
                    </p>
                    <p>
                        <span class="starrequired">* </span><?=GetMessage("AUTH_REQ")?>
                    </p>
                <?php endif ?>
                <div class="text-center mb-0">
                    <a href="/personal/auth/">
                        <b><?=GetMessage("AUTH_AUTH")?></b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
