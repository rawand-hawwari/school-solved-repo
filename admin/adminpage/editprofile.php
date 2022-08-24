<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');


  if(!isset($_SESSION['username'])){
    header('location: /demo/index.php?error=youHaveNoAccessOnPage');
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
    <link rel="stylesheet" href="admin.css">
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

  <body class="adduser-page">
  
    <!-- header and menu -->
    <?php  include_once 'menu.php'?>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Edit your product /</span>
                " Products
              </h4>
              
              
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Product Details</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" action="includes/updateprofile.php" method="POST">
                        <div class="row flex-column">
                          <div class="mb-3 col">
                            <label for="uid" class="form-label">Username</label>
                            <input class="form-control" type="text" id="uid" name="uid"/>
                          </div>
                          <div class="mb-3 col">
                            <label for="fname" class="form-label">First name</label>
                            <input class="form-control" type="text" id="fname" name="fname"/>
                          </div>
                          <div class="mb-3 col">
                            <label for="lname" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname"/>
                          </div>
                          <div class="mb-3 col">
                            <label for="email" class="form-label">Update email</label>
                            <input type="text" class="form-control" id="email" name="email"/>
                          </div>
                          <!-- <div class="mb-3 col">
                            <label for="secondemail" class="form-label">Add another email</label>
                            <input type="text" class="form-control" id="secemail" name="secemail"/>
                          </div> -->
                          <div class="mb-3 col">
                            <label for="password" class="form-label">Change password</label>
                            <input type="text" class="form-control mb-4" id="oldpwd" name="oldpwd" placeholder="Old password"/>
                            <input type="text" class="form-control mb-4" id="newpwd" name="newpwd" placeholder="New password"/>
                            <input type="text" class="form-control mb-4" id="cpwd" name="cpwd" placeholder="Confirm password"/>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn me-2 add" name="submit ">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary" onclick='window.location.href ="profile.php"'>Cancel</button>
                        </div>
                      </form>
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
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="/demo/jshome.js"></script> 
  </body>
</html>