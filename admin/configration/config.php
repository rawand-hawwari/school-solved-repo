<?php
   $dbServername="localhost";
   $dbUsername="root";
   $dbPassword="123qwe";
   $dbName="schoolSolved";

   $db=mysqli_connect($dbServername,$dbUsername,$dbPassword);
   mysqli_select_db($db,$dbName);

   // $sql = "SELECT id,password FROM user";
   // $result = mysqli_query($db,$sql);
   // $row = $result -> fetch_assoc();

   // foreach($row['password'] as $value){
   //    $pwd= $row['password'];
   //    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

   //    var_dump("$hashedpwd");die;
   //    $id = $row['id'];
   //    $query = "INSERT INTO user (password) VALUE ('$hashedpwd') WHERE id = '$id'";
   //    $result = mysqli_query($db,$query);
   // }
?>