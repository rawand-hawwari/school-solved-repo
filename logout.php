<?php

include(getcwd() . DIRECTORY_SEPARATOR . 'configration' . DIRECTORY_SEPARATOR . 'config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

session_destroy();

header("location: index.php?Message=successful_log_out");

?>