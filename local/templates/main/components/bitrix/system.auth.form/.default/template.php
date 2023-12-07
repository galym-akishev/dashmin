<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

CJSCore::Init();
?>

<div>
    <form action="<?=$arResult["AUTH_URL"]?>">
        <?php foreach ($arResult["GET"] as $key => $value): ?>
            <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?php endforeach ?>
        <?=bitrix_sessid_post()?>
        <input type="hidden" name="logout" value="yes" />
        <input type="submit" class="dropdown-item" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
    </form>
</div>
