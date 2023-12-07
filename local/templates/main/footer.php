<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php
global $USER;
if ($USER->IsAuthorized()) {
    require_once('personal_footer.php');
} else {
    require_once('not_authorized_footer.php');
}
?>
