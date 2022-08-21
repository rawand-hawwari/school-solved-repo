<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');


  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $sql = "SELECT role FROM user WHERE username = '$username' OR email='$username';";
    $result = $db->query($sql);
    $row = $result -> fetch_assoc();

    $role = $row['role'];
  }
  if(isset($_SESSION['username'])){
    header('location: /demo/admin/adminpage/productlist.php?error=youAreSignedin');
  }

?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>school solved </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="admin/adminpage/admin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </head>
  <body>

    <!-- header start -->
    <?php  include_once 'header.php'?>
    <!-- header end -->

    <!-- section 4 -->
    <section class="py-3 py-lg-5 livevedio">
      <div class="container">
        <div class="reels">
          <div class="row justify-content-start">
            <?php
              $sql = "SELECT * FROM products";
              $result = mysqli_query($db,$sql);

              while($row = $result -> fetch_assoc()){
                  $newprice = $row['price'] * ($row['sale']/100);  
                  echo "<div class='col-6 col-lg-3 my-3'>
                    <div class='sale'>
                      <div class='vid'>
                        <img src='" . $row['img'] . "' alt>
                        <div class='sale-wrapper d-flex justify-content-between pe-3'>
                          <h6 class='mt-2 ";
                          if($row['sale'] == 0) echo"fade";
                          echo "'>Sale</h6>
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
                          <h6><i class='fa fa-download'></i> " . $row['sale'] . " Sales</h6>
                          <div class='price'>
                            <h5 class='before'>$" . $row['price'] . "</h5>";
                            if($row['sale'] != 0) echo "<h5 class='after'>$" . $newprice . "</h5>";
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
    </section>
    <!-- end of section 4 -->


    <!-- footer start -->
    <?php  include_once 'footer.php'?>
    <!-- footer end -->

    <script src="jshome.js"></script> 
  </body>
</html>