<?php

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

?>

<?php if($USER->IsAuthorized()): ?>
    <p>
        <?= GetMessage("MAIN_REGISTER_AUTH") ?>
    </p>
<?php else:?>

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
                    <h3><?=GetMessage("AUTH_REGISTER")?></h3>
                </div>
                <?php
                if (!empty($arResult["ERRORS"])):
                    foreach ($arResult["ERRORS"] as $key => $error)
                        if (intval($key) == 0 && $key !== 0)
                            $arResult["ERRORS"][$key] =
                                str_replace("#FIELD_NAME#",
                                    "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;",
                                    $error);

                    ShowError(implode("<br />", $arResult["ERRORS"]));
                    ?>
                <?php endif ?>
                <form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
                    <?php if($arResult["BACKURL"] <> ''): ?>
                        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?php endif; ?>
                    <?php foreach ($arResult["SHOW_FIELDS"] as $FIELD): ?>
                                <?php
                                    switch ($FIELD)
                                    {
                                        case "PASSWORD": ?>
                                            <div class="form-floating mb-3">
                                                <input
                                                        id="<?=$FIELD?>"
                                                        size="30"
                                                        type="password"
                                                        name="REGISTER[<?=$FIELD?>]"
                                                        value="<?=$arResult["VALUES"][$FIELD]?>"
                                                        class="form-control"
                                                        placeholder=""
                                                />
                                                <label for="<?=$FIELD?>">
                                                    <?=GetMessage("REGISTER_FIELD_".$FIELD)?>
                                                    <?php if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?>
                                                        <span class="starrequired">*</span>
                                                    <?php endif ?>
                                                </label>
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
                                            </div>
                                            <?php
                                                break;
                                        case "CONFIRM_PASSWORD": ?>
                                            <div class="form-floating mb-3">
                                                <input
                                                        id="<?=$FIELD?>"
                                                        size="30"
                                                        type="password"
                                                        name="REGISTER[<?=$FIELD?>]"
                                                        value="<?=$arResult["VALUES"][$FIELD]?>"
                                                        autocomplete="off"
                                                        class="form-control"
                                                        placeholder=""
                                                />
                                                <label for="<?=$FIELD?>">
                                                    <?=GetMessage("REGISTER_FIELD_".$FIELD)?>
                                                    <?php if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?>
                                                        <span class="starrequired">*</span>
                                                    <?php endif ?>
                                                </label>
                                            </div>
                                        <?php
                                            break;
                                        default: ?>
                                        <div class="form-floating mb-3">
                                            <input
                                                id="<?=$FIELD?>"
                                                size="30"
                                                type="text"
                                                name="REGISTER[<?=$FIELD?>]"
                                                value="<?=$arResult["VALUES"][$FIELD]?>"
                                                class="form-control"
                                                placeholder=""
                                            />
                                            <label for="<?=$FIELD?>">
                                                <?=GetMessage("REGISTER_FIELD_".$FIELD)?>
                                                <?php if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?>
                                                    <span class="starrequired">*</span>
                                                <?php endif ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                ?>
                    <?php endforeach ?>
                    <input
                            type="submit"
                            class="btn btn-primary py-3 w-100 mb-4"
                            name="register_submit_button"
                            value="<?=GetMessage("AUTH_REGISTER")?>"
                    />
                </form>
                <p>
                    <?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
                </p>
                <p>
                    <span class="starrequired">* </span><?=GetMessage("AUTH_REQ")?>
                </p>
                <p class="text-center mb-0"><a href="/personal/auth/">Есть аккаунт?</a></p>
                <p class="text-center mb-0"><a href="/personal/auth/reset_password.php">Забыл пароль?</a></p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    try {
        document.getElementById("LOGIN").focus();
    }
    catch(e) {
    }
</script>