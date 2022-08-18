<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

   if(!isset($_SESSION['username'])){
     header('location: /demo/product.php?error=youHaveNoAccessOnPage');
   }
   else{
    $username = $_SESSION['username'];
    $sql = "SELECT role FROM user WHERE username = '$username' OR email='$username';";
    $result = $db->query($sql);
    $row = $result -> fetch_assoc();

    $role = $row['role'];
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
            <?php  include_once '../../header.php';?>
            <!-- /header -->
            
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y mt-5">
              <section class="livevedio">
                <div class="p-3 p-lg-1 content">
                  <h6>Courses</h6>
                  <h2>Video in Live Action</h2>
                  <p>Problems trying to resolve the conflict between 
                    the two major realms of Classical physics: Newtonian mechanics </p>
                </div>  
                <div>
                  <a class="btn add" href="addProduct.php">Add Product</a>
                </div>
                <div class='reels'>
                  <div class='row justify-content-start'>
                    <?php
                      $sql = "SELECT * FROM products";
                      $result = mysqli_query($db,$sql);

                      while($row = $result -> fetch_assoc()){
                          $newprice = $row['price'] * $row['sale'];  
                          echo "<div class='col-6 col-lg-3 my-3'>
                            <div class='sale'>
                              <div class='vid'>
                                <img src='" . $row['img'] . "' alt>
                                <div class='sale-wrapper d-flex justify-content-between pe-3'>
                                  <h6 class='mt-2 ";
                                  if($row['sale'] == 0.00) echo"fade";
                                  echo "'>Sale</h6>
                                  <button type='button' class='btn btn-danger confirm-delete' data-bs-toggle='modal' data-bs-target='#confirm" . $row['id'] . "'><i class='far fa-trash-alt'></i> Delete</button>
                                  <div class='modal fade' id='confirm" . $row['id'] . "' tabindex='-1'>
                                    <div class='modal-dialog'>
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <h5 class='modal-title'>System</h5>
                                        </div>
                                        <div class='modal-body'>
                                          <h4 class ='text-center'>Are you sure you want to delete this data?</h4>
                                        </div>
                                        <div class='modal-footer'>
                                          <button type='button' class='btn btn-danger px-3' data-bs-dismiss='modal'>No</button>
                                          <a type='button' class='btn btn-success px-3' href='includes/delete.php?Message=" . $row['id'] . "'>Yes</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class='text-center buttons'>
                                  <button onclick='changeicon(this)' class='btn heart'><i class='far fa-heart'></i></button>
                                  <button class='btn cart'><i class='fa fa-shopping-cart'></i></button>
                                  <button class='btn eye'><i class='fas fa-eye'></i></button>
                                </div>
                              </div>
                              <div class='px-4 describe'>
                                <div class='pt-3 pt-lg-3 rate'>
                                  <h6 >Expert instruction</h6>
                                  <p><i class='fas fa-star text-warning'></i>  4.9</p>               
                                </div>
                                  <h5>" . $row['name'] . "</h5>
                                  <p>" . $row['details'] . "</p>
                                  <h6><i class='fa fa-download'></i> " . $row['sale']*100 . " Sales</h6>
                                  <div class='price'>
                                    <h5 class='before'>$" . $row['price'] . "</h5>";
                                    if($row['sale'] != 0.00) echo "<h5 class='after'>$" . $newprice . "</h5>";
                                  echo" </div>                        
                                  <a href='#' class='btn btn-outline-primary rounded-pill' type='submit'>Learn More <i class='fas fa-angle-right'></i></a>
                                </div>
                              </div>
                            </div>";
                      }
                    ?>
                  </div>
                </div>

                      </div>
                      <!-- /Account -->
                    </div>
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

    <script src="/demo/jshome.js"></script> 
  </body>
</html>