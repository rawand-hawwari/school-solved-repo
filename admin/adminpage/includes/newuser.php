<?php
  
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');


  
   
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $pwd = $_POST["password"];
    $cwd = $_POST["confirmpwd"];


    include_once 'functions.inc.php';


    if(emptyInputs($fname, $lname, $username, $email, $role, $pwd, $cwd) !== false){
      header("location:../addUser.php?error=emptyinput");
      exit();
    }
    if(invalidUsername($username) !== false){
        header("location:../addUser.php?error=invaliduid");
        exit();
    }    
    if(invalidEmail($email) !== false){
        header("location:../addUser.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $cwd) !== false){
        header("location:../addUser.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExist($db, $username, $email) !== false){
        header("location:../addUser.php?error=usernametaken");
        exit();
    }

    createUser($db, $fname, $lname, $username, $email, $pwd, $role);

