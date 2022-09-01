<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/session.php');

   if(!isset($_SESSION['username'])){
     header('location: index.php?error=youHaveNoAccessOnPage');
   }
   else{
    $username = $_SESSION['username'];
    $sql = "SELECT role FROM user WHERE username = '$username' OR email='$username';";
    $result = $db->query($sql);
    $row = $result -> fetch_assoc();

    $role = $row['role'];
    if($role != 'admin'){
     header('location: /admin/adminpage/dashboard.php?error=youHaveNoAccessOnPage');
    }
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
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">User List</span>
              </h4>
              
              
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between p-3">
                    <h5 class="m-0 align-self-center">Users Details</h5>
                    <button class="btn me-2 add" onclick="window.location.href ='addUser.php'">Add user</button>
                  </div>

                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                      <?php
                        if(isset($_GET['page'])){
                          $page = $_GET['page'];
                        }else $page="";
  
  
                        if($page == "" || $page == "1"){
                          $page="1";
                        }
  
                        $start = 5 * ($page - 1);
                        $rows = 5;
  
                        $sql = "SELECT * FROM user LIMIT $start,$rows";
                        $result = mysqli_query($db,$sql);

                        echo "<table border='1'class='table table-striped'>
                        <thead>
                        <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>Email</th>
                        <th>role</th>
                        <th>Last login</th>
                        </tr>
                        </thead>
                        <tbody>";
                        
                        while($row = $result -> fetch_assoc())
                        {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['firstname'] . "</td>";
                            echo "<td>" . $row['lastname'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['role'] . "</td>";
                            echo "<td>" . $row['lastlogin'] . "</td>";
                            echo '<td><button type="button" class="btn btn-outline-danger confirm-delete d-flex" data-bs-toggle="modal" data-bs-target="#confirm' . $row['id'] . '"><i class="far fa-trash-alt align-self-center"></i> Delete</button>
                                  <div class="modal fade" id="confirm' . $row['id'] . '" tabindex="-1">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">System</h5>
                                        </div>
                                        <div class="modal-body">
                                          <h4 class ="text-center">Are you sure you want to delete this data?</h4>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger px-3" data-bs-dismiss="modal">No</button>
                                          <a type="button" class="btn btn-success px-3" href="includes/delete.php?Message=' . $row['id'] . '">Yes</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div></td>
                                  ';
                            echo "</tr>";
                        }
                        echo "</tbody>
                              </table>";
                      ?>

                    </div>
                    <div class="card-footer p-3">
                      <?php
                        $sql2 = "SELECT * FROM user";
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

                        $pages = ceil($count/5);


                        echo'<ul class="pagination justify-content-center m-0">';
                        echo'<li class="page-item ';
                          if($prev == "0"){echo'disabled';} 
                        echo'"><a class="page-link" href="usertlist.php?page=' . $prev . '">Previous</a></li>';
                        for($b = 1; $b <= $pages; $b++){
                          echo'<li class="page-item"><a class="page-link" href="usertlist.php?page=' . $b . '">' . $b . '</a></li>';
                        }
                        echo'<li class="page-item ';
                          if($next == ($pages + 1)){echo'disabled';} 
                        echo'"><a class="page-link" href="usertlist.php?page=' . $next . '">Next</a></li>';
                        
                        echo'</ul>';
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

    <script src="../../jshome.js"></script> 
  </body>
</html>