<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

   if(!isset($_SESSION['username'])){
     header('location: /demo/index.php?error=youHaveNoAccessOnPage');
     exit;
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

    <link rel="stylesheet" href="/demo/style.css">
    <link rel="stylesheet" href="/demo/admin/adminpage/admin.css">
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
          <?php  include_once '../../header.php';?>
          <!-- /header -->
          
          <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y pt-5 mt-5">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Account</span>
              </h4>
              
              
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <!-- <h5 class="card-header">Users Details</h5> -->
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <?php
                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM user where username = '$username' OR email = '$username' ";
                        $result = mysqli_query($db,$sql);

                        echo '<div class="row">';

                      while($row = $result -> fetch_assoc()){
                        echo '<div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 class="text-dark mt-2">Name: ' . $row['firstname'] . " " . $row['lastname'] . '</h4>
                                    <p class="text-secondary">' . $row['username'] . '</p>
                                </div>
                                <div class="card-header p-4">
                                    <h5 class="text-dark">Email: ' . $row['email'] . '</h5>
                                    <h5 class="text-dark">Role: ' . $row['role'] . '</h5>
                                </div>

                                <div class= "card-footer text-end">
                                    <a class="btn me-2 add" href="editprofile.php">Edit</a>
                                </div>
                            </div>
                            </div>';
                      }
                        echo '</div>';
                      ?>

                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
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

    <script src="/demo/jshome.js"></script> 
  </body>
</html>