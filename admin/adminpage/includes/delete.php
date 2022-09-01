<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/session.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');

  $table = "";

  if (str_contains($_SERVER['HTTP_REFERER'], 'userlist')) {
    $table = 'user';
  }
  else if (str_contains($_SERVER['HTTP_REFERER'], 'productlist')) {
    $table = 'products';
  }

  if (isset($_GET['Message'])) {
      $sql = "DELETE FROM " . $table . " WHERE id = " . $_GET['Message'] . ";";
      $db->query($sql);
      header('location: ' . $_SERVER['HTTP_REFERER']);
  }
  else {
    header('location:' . $_SERVER['HTTP_REFERER'] . '?error=failedtodelete');
  }

