<?php
  
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');


  
   
    $fname = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $msg = $_POST["message"];

    $date = date('d/m/y g:i a');


    include_once 'includes/functions.inc.php';

    if(eInputs($fname, $email, $phone, $msg) !== false){
        header("location:/demo/index.php?error=emptyinput");
        exit();
    }
    else{
        $sql = "INSERT INTO subscribes (fullname, email, phone, message, publishDate) VALUES ('$fname', '$email', '$phone', '$msg', '$date')";
        $result = $db->query($sql);
        header("location:/demo/index.php?error=none");
    }