<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');

   
   if (session_status() === PHP_SESSION_NONE) {
      session_start();
   }

   $sql = "SELECT id,password FROM user";
   $result = mysqli_query($db,$sql);
   // $row = $result -> fetch_assoc();

   if(isset($_SESSION['username'])){
      $user_check = $_SESSION['username'];
      
      $query = "SELECT email,username FROM user WHERE username = '$user_check' or email = '$user_check'";
      $ses_sql = $db->query($query);
      
      $row = $ses_sql -> fetch_assoc();
      if(!isset($row['username'])){
         $login_session = $row['email'];
      }
      else{
         $login_session = $row['username'];
      }
   }