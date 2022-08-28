<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

   if(!isset($_SESSION['username'])){
     header('location: product.php?error=youHaveNoAccessOnPage');
   }
   else{
    $username = $_SESSION['username'];
    $sql = "SELECT role FROM user WHERE username = '$username' OR email='$username';";
    $result = $db->query($sql);
    $row = $result -> fetch_assoc();

   }
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Account settings - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="/admin/adminpage/admin.css">
    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body class="user-page"> 
    <!-- Menu -->
    <?php  include_once 'menu.php';?>
    <!-- / Menu -->

    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- header -->
            <?php  include_once '../../header.php'?>
            <!-- /header -->
            
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y mt-5">
              <section class="livevedio">
                <div class='reels card mb-4 mt-5'>
                  <div class="card-header d-flex justify-content-between p-4">
                    <h5 class="m-0 align-self-center">Article List</h5>
                    <a class="btn add" href="addarticle.php">Add new article</a>
                  </div>
                  <div class='card-body row justify-content-start'>
                    <?php

                      if(isset($_GET['page'])){
                        $page = $_GET['page'];
                      }else $page="";


                      if($page == "" || $page == "1"){
                        $page="1";
                      }

                      $start = 6 * ($page - 1);
                      $rows = 6;

                      $sql = "SELECT * FROM articles LIMIT $start,$rows";
                      $result = mysqli_query($db,$sql);
                      
                      echo '<div class="row">';

                      while($row = $result -> fetch_assoc()){
                        echo '<div class="col-md-6">
                                <div class="card mb-4">
                                  <div class="card-body">' . 
                                    $row['content'] . 
                                 '</div>
                                  <div class="card-footer text-secondary mb-0">
                                  <p>' . $row['created'] . '</p>';
                                 if($row['updated'] != NULL){
                                  echo 'Last update ' . $row['updated'];  
                                 }

                        echo     '</div>
                                </div>
                              </div>';
                      }
                      echo '</div>';
                    ?>

                  </div>
                  <div class="card-footer p-3">
                    <?php
                    $sql2 = "SELECT * FROM articles";
                    $resl = mysqli_query($db,$sql2);
                    $count = $resl->num_rows;

                    if(isset($_GET['page'])){
                      $page = $_GET['page'];
                    }else $page="";


                    if($page == "" || $page == "1"){
                      $page="1";
                    }

                    $next = $page + 1;
                    $prev = $page - 1;

                    $pages = ceil($count/6);


                    echo'<ul class="pagination justify-content-center m-0">';
                    echo'<li class="page-item ';
                      if($prev == "0"){echo'disabled';} 
                    echo'"><a class="page-link" href="articles.php?page=' . $prev . '">Previous</a></li>';
                    for($b = 1; $b <= $pages; $b++){
                      echo'<li class="page-item"><a class="page-link" href="articles.php?page=' . $b . '">' . $b . '</a></li>';
                    }
                    echo'<li class="page-item ';
                      if($next == ($pages + 1)){echo'disabled';} 
                    echo'"><a class="page-link" href="articles.php?page=' . $next . '">Next</a></li>';
                    
                    echo'</ul>';
                    ?>
                  </div>
                </div>
              </section>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php  include_once '../../footer.php'?>
            <!-- / Footer -->

          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
    </div>

    <script src="../../jshome.js"></script> 
  </body>
</html>