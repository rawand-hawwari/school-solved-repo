<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/session.php');
?>
<section class="header">
  <header>
    <div class="box-container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-xxl">
          <?php if(!isset($_SESSION['username'])) {
            echo'<a class="navbar-brand" href="#">BrandName</a>';
          }
          ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse <?php if(isset($_SESSION['username'])){echo'headercont';}?>" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <?php if(!isset($_SESSION['username'])) {
                    echo'<a class="nav-link active" aria-current="page" href="index.php">Home</a>';
                  }
                  else {
                    echo'<a class="nav-link active" aria-current="page" href="/admin/adminpage/dashboard.php">Home</a>';
                  }
                ?>
              </li>
              <li class="nav-item">
              <?php if(!isset($_SESSION['username'])) {
                    echo'<a class="nav-link" href="product.php">Product</a>';
                  }
                  else {
                    echo' <a class="nav-link" href="/admin/adminpage/productlist.php">Product</a>';
                  }
                ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <div class="login-wrapper d-block d-lg-flex login-out">
            <?php if(!isset($_SESSION['username'])) {
              echo '<a class="nav-link login" href="login.php">Login</a>
              <a class="btn btn-primary rounded" href="#" >join us <i class="fas fa-arrow-right"></i></a> ';
            }else {
              include_once 'admin/adminpage/usermenu.php';
            }?>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
</section>