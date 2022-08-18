<?php
// Include the database configuration file
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

$statusMsg = '';

// File upload path
$targetDir = "/demo/image/";
$fileName = $_POST['file'];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$name = $_POST['name'];
$details = $_POST['details'];
$price = $_POST['price'];
$sale = $_POST['sale'];

include_once 'functions.inc.php';


if(!emptyForm($targetFilePath, $name, $details, $price, $sale)){

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        
        // Insert image file name into database
        $sql = "INSERT INTO products (img, name, details, price, sale) VALUES ('$targetFilePath', '$name', '$details', $price, $sale)";
        $result = $db->query($sql);
        // $insert = $db->query("INSERT INTO products (img, name, details, price, sale) VALUES ('$targetFilePath', '$name', '$details', '$price', '$sale'");
        if($result){
            header("location:../addProduct.php?error=productSuccessfulyAdded");
        }else{
            header("location:../addProduct.php?error=addfailed");
        }
    }else{
        header("location:../addProduct.php?error=WrongImgFile");
    }
}else{
    header("location:../addProduct.php?error=emptyInput");
}

// Display status message
echo $statusMsg;
?>