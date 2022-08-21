<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');

  include_once 'functions.inc.php';


  $uid = $_POST['uid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];

  $oldpwd = $_POST['oldpwd'];
  $newpwd = $_POST['newpwd'];
  $cpwd = $_POST['cpwd'];

  if(!isset($_SESSION['username'])){
    header('location: /demo/home.php?error=youHaveNoAccessOnPage');
  }
  else{
      $username = $_SESSION['username'];

      $sql = "SELECT * FROM user WHERE username = '$username'";
      $result = mysqli_query($db,$sql);
      $row = $result -> fetch_assoc();

      if(isempty($uid, $fname, $lname, $email, $oldpwd, $newpwd, $cpwd)){
        header('location: ../editprofile.php?error=emptyInputs');
      }
      else{
        if(!empty($uid)){
            $sql = "UPDATE user SET username ='$uid' WHERE username = '$username' OR email = '$username'";
            $db->query($sql);

            if($_SESSION['username'] != $row['username']){
                $_SESSION['username'] = $username;
            }
            header('location: ../profile.php?error=none');
        }
        if(!empty($fname)){
            $sql = "UPDATE user SET firstname ='$fname' WHERE username = '$username' OR email = '$username'";
            $db->query($sql);
            header('location: ../profile.php?error=none');
        }
        if(!empty($lname)){
            $sql = "UPDATE user SET lastname ='$lname' WHERE username = '$username' OR email = '$username'";
            $db->query($sql);
            header('location: ../profile.php?error=none');
        }
        if(!empty($email)){
            $sql = "UPDATE user SET email ='$email' WHERE username = '$username' OR email = '$username'";
            $db->query($sql);
            
            if($_SESSION['username'] != $row['email']){
                $_SESSION['username'] = $email;
            }
            header('location: ../profile.php?error=none');
        }
        if(!empty($oldpwd)){
            if(!password_verify($mypassword, $row['password'])){
                header('location: ../profile.php?error=wrongPassword');
            }
            else{
                if(empty($newpwd) || empty($cpwd)){
                    header('location: ../profile.php?error=noNewPasswordValue');
                }else{
                    if(pwdMatch($pwd, $cwd) !== false){
                        header("location:../profile.php?error=newpasswordsdontmatch");
                    }else{
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $sql = "UPDATE user SET password ='$hashedPwd' WHERE username = '$username'";
                        $db->query($sql); OR email = '$username'
                        header('location: ../profile.php?error=none');
                    }
                }
            }
        }
      }
  }

