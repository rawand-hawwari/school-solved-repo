<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/session.php');


  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $sql = "SELECT role FROM user WHERE username = '$username' OR email='$username';";
    $result = $db->query($sql);
    $row = $result -> fetch_assoc();

    $role = $row['role'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>school solved </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="/admin/adminpage/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
  <body>
    <!-- Menu -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
        <a href="#" class="app-brand-link">
          <span class="app-brand-text demo menu-text fw-bolder ms-2">BrandName</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
          <a href="/admin/adminpage/dashboard.php" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Home</div>
          </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Layouts</div>
          </a>
        </li>

        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item">
          <a href="/admin/adminpage/productlist.php" class="menu-link">
            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
            <div data-i18n="Account Settings">Products</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-coin"></i>
            <div data-i18n="Authentications">Pricing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-envelope"></i>
            <div data-i18n="Misc">Contact</div>
          </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- User List -->
        <?php
          if($role == 'admin'){
            echo'<li class="menu-item">
                  <a href="userlist.php" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-group"></i>
                    <div data-i18n="Basic">User list</div>
                  </a>
                </li>';
          }
        ?>
        <!-- Articles -->
        <li class="menu-item">
          <a href="articles.php" class="menu-link">
            <i class="menu-icon tf-icons bx bx-file"></i>
            <div data-i18n="User interface">Articles</div>
          </a>
        </li>

        <!-- Subscription -->
        <li class="menu-item">
          <a href="subscribelist.php" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-reader"></i>
            <div data-i18n="Extended UI">Subscription</div>
          </a>
        </li>
        
        <!-- Cards -->
        <li class="menu-item">
          <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Cards</div>
          </a>
        </li>
      </ul>
    </aside>
  </body>
</html>