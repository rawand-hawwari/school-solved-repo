<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/session.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');

  include_once 'functions.inc.php';


  $targetDir = "/image/";
  $fileName = $_POST['file'];
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  $name = $_POST['name'];
  $details = $_POST['details'];
  $price = $_POST['price'];
  $sale = $_POST['sale'];

  if (isset($_GET['Message'])) {
    if (allEmpty($fileName, $name, $details, $price, $sale)){
        header('location: ../productlist.php?error=emptyInputs');
        exit;
    }
    else{
        $date =date('d/m/y g:i a');
        $sql = "UPDATE products SET updateDate ='$date' WHERE id = ". $_GET['Message'];
        $db->query($sql);

        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes) || empty($fileName)){
            if(!empty($fileName)){
                $sql = "UPDATE products SET img ='$targetFilePath' WHERE id = ". $_GET['Message'];
                $db->query($sql);
                header('location: ../productlist.php?error=none');
            }
            if(!empty($name)){
                $sql = "UPDATE products SET name = '$name' WHERE id = ". $_GET['Message'];
                $db->query($sql);
                header('location: ../productlist.php?error=none');
            }
            if(!empty($details)){
                $sql = "UPDATE products SET details = '$details' WHERE id = ". $_GET['Message'];
                $db->query($sql);
                header('location: ../productlist.php?error=none');
            }
            if(!empty($price)){
                $sql = "UPDATE products SET price = '$price' WHERE id = ". $_GET['Message'];
                $db->query($sql);
                header('location: ../productlist.php?error=none');
            }
            if(!empty($sale)){
                $sql = "UPDATE products SET sale = '$sale' WHERE id = ". $_GET['Message'];
                $db->query($sql);
                header('location: ../productlist.php?error=none');
            }else{
                header('location: ../productlist.php?error=WrongImgFile');
            }
        }
    }  
}

    else{
        header('location:' . $_SERVER['HTTP_REFERER'] . '?error=failedtoUpdate');
    }

