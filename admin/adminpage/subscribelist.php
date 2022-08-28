<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

   if(!isset($_SESSION['username'])){
     header('location: index.php?error=youHaveNoAccessOnPage');
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
    <?php
        // include_once('../../header.php');
        include_once('menu.php');
    ?>
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
                  <h5 class="m-0 align-self-center">Subscription List</h5>
                </div>
                <div class='card-body row justify-content-start mt-4'>
                  <?php

                    if(isset($_GET['page'])){
                      $page = $_GET['page'];
                    }else $page="";


                    if($page == "" || $page == "1"){
                      $page="1";
                    }

                    $start = 10 * ($page - 1);
                    $rows = 10;

                    $sql = "SELECT * FROM subscribes LIMIT $start,$rows";
                    $result = mysqli_query($db,$sql);

                    $sql = "SELECT * FROM subscribes";
                    $result = mysqli_query($db,$sql);

                    echo '<div class="row">';

                    while($row = $result -> fetch_assoc()){
                      echo '<div class="col-md-6">
                          <div class="card mb-4">
                              <div class="card-header">
                                  <h3 class="text-dark mt-2">' . $row['fullname'] . '</h3>
                                  <p class="text-secondary mb-0">' . $row['email'] . '</p>
                                  <p class="text-secondary">' . $row['phone'] . '</p>
                              </div>
                              <div class="card-header">
                                  <h5 class="text-dark">' . $row['message'] . '</h5>
                              </div>
                              <p class="card-footer text-secondary mb-0">' . $row['publishDate'] . '</p>
                          </div>
                          </div>';
                    }
                      echo '</div>';
                  ?>
                </div>
                <div class="card-footer p-3">
                  <?php
                  $sql2 = "SELECT * FROM subscribes";
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

                  $pages = ceil($count/10);


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

          <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="../../jshome.js"></script> 
  </body>
</html>