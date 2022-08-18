<?php
  
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');


  
   
    $fname = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $msg = $_POST["message"];


    include_once 'includes/functions.inc.php';

    if(eInputs($fname, $email, $phone, $msg) !== false){
        header("location:/demo/home.php?error=emptyinput");
        exit();
    }
    else{
        $sql = "INSERT INTO subscribes (fullname, email, phone, message) VALUES ('$fname', '$email', '$phone', '$msg')";
        $result = $db->query($sql);
        header("location:/demo/home.php?error=none");
    }