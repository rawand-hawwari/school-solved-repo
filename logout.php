<?php

include(getcwd() . DIRECTORY_SEPARATOR . 'configration' . DIRECTORY_SEPARATOR . 'config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

session_destroy();

header("location: index.php?Message=successful_log_out");

?>