<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');

  $editorContent = $statusMsg = '';

  // File upload path
  $editorContent = $_POST['editor'];

  if(!empty($editorContent)){
    $date = date("d/m/y g:i a");
    $insert = $db->query("INSERT INTO articles (content, created) VALUES ('$editorContent', $date)");

    if($insert){
        header('location: ../articles.php?message=productSuccessfulyAdded');
    }else{
      header("location: ../addarticle.php?error=addfailed");
    }
  }else{
    header("location: ../addarticle.php?error=emptyInput");
  }
?>