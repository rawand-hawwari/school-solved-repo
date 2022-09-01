<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

  if(!isset($_SESSION['username'])) {
    header('location: index.php?error=youHaveNoAccessOnPage');
  }

  $id;
  if (isset($_GET['Message'])) {
    $id = $_GET['Message'];
  }
  else {
    header('location: /admin/adminpage/productlist.php?error=noItemSelected');
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

    <link rel="stylesheet" href="../../scss/style.css">
    <link rel="stylesheet" href="../../scss/admin.css">
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
                <span class="text-muted fw-light">Edit Product/</span>
                " Products
              </h4>
              <?php

                $sql = "SELECT * FROM products WHERE id = " . $id;
                $result = mysqli_query($db,$sql);
                $row = $result -> fetch_assoc();
              ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Product Details</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" action=<?php echo"includes/updateproduct.php?Message=".$id ?> method="POST">
                        <div class="row flex-column">
                          <div class="mb-3 col">
                            <label for="image" class="form-label">Image:</label>
                            <input class="form-control" type="file" name="file">
                          </div>
                          <div class="mb-3 col">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="<?php echo $row['name']?>" aria-describedby="button-addon1" name="name"/>
                              <button class="btn btn-outline-primary" type="button" id="button-addon1">Change</button>
                            </div>
                          </div>
                          <div class="mb-3 col">
                            <label for="deatils" class="form-label">Details</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="<?php echo $row['details']?>" aria-describedby="button-addon2" name="details"/>
                              <button class="btn btn-outline-primary" type="button" id="button-addon2">Change</button>
                            </div>
                          </div>
                          <div class="mb-3 col">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="<?php echo $row['price']?>" aria-describedby="button-addon3" name="price"/>
                              <button class="btn btn-outline-primary" type="button" id="button-addon3">Change</button>
                            </div>
                          </div>
                          <div class="mb-3 col">
                            <label for="sale" class="form-label">Sale in decimal</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="<?php echo $row['sale']?>" aria-describedby="button-addon4" name="sale"/>
                              <button class="btn btn-outline-primary" type="button" id="button-addon4">Change</button>
                            </div>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn me-2 add" name="submit ">Save Changes</button>
                          <button type="reset" class="btn btn-outline-secondary" onclick='window.location.href ="/admin/adminpage/productlist.php"'>Cancel</button>
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
          </div>
        </div>
        <!-- / Layout page -->
      </div>
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

    <script src="../../jshome.js"></script>
  </body>
</html>