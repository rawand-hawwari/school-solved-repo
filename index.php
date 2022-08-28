<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/session.php');


  if (isset($_GET['Message'])) {
    if($_GET['Message'] == "successful_log_out"){

      echo'<button type="button" class="btn btn-primary d-none show-error" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>';
      echo'<div class="modal fade" id="exampleModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">ERROR</h5>
                </div>
                <div class="modal-body">
                  <p>user have logged out.</p>
                </div>
                <div class="modal-footer">
                  <a type="button" class="btn btn-primary" href="index.php">OK</a>                  
                </div>
              </div>
            </div>
          </div>
        ';
    }
  }
  if(isset($_SESSION['username'])){
    // header('location: /admin/adminpage/dashboard.php?error=youAreSignedin');
  }

?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>school solved </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>

    <!-- header start -->
    <?php  include_once 'header.php'?>
    <!-- header end -->


    <!-- heading start -->
    <section class="head">
      <div class="d-flex justify-content-between container-xxl">
        <div class="headcont">
          <h5>online training</h5>
          <h1>25K+ STUDENTS TRUST US</h1>
          <h4>Our goal is to make online education work for everyone</h4>
          <div class=" button">
            <a href="#" class="btn btn-outline-primary rounded m-1" type="submit">Get Quote Now</a>
            <a href="#" class="btn btn-outline-primary rounded m-1" type="submit">Learn More</a>
          </div>
        </div>
      

        <img class="img-fluid d-none d-md-block" src="image/pic-1.jpg" alt="">
      </div>
    </section>
    <!-- heading end -->

    <!-- section 1 -->
    <section class="cards">
      <div class="container card-info">
        <div class="row justify-content-center d-lg-flex flex-direction-col ">
          <div class="col-9 col-lg-3 mx-3 promo-card">
            <img src="image/icon-1.png" alt="">
            <h3>Certified Teacher</h3>
            <p>The gradual accumulation of 
              information about atomic and 
              small-scale behaviour...</p>
          </div>
          <div class="col-9 col-lg-3 mx-3 promo-card">
            <img src="image/icon-2.png" alt="">
            <h3>2,769 online courses</h3>
            <p>The gradual accumulation of 
              information about atomic and 
              small-scale behaviour...</p>
          </div>
          <div class="col-9 col-lg-3 mx-3 promo-card">
            <img src="image/icon-3.png" alt="">
            <h3>2,769 online courses</h3>
            <p>The gradual accumulation of 
              information about atomic and 
              small-scale behaviour...</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 1 -->

    <!-- section 2 -->
    <section class="d-flex justify-content-between text-center p-3 mt-2 mt-lg-5 packages">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-12 col-lg-5">
            <img src="image/pic-2.jpg" alt="" width="269px" height="352px">
          </div>

          <div class="col-12 col-lg-6">
            <div class="packagecont me-2 me-lg-5 text-start">
              <h2 >Approdable Packages</h2>
          
              <p >Problems trying to resolve the conflict between 
                the two major realms of Classical physics: 
                Newtonian mechanics </p>
              <a href="#" class="nav-link">Learn More <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 2 -->

    <!-- section 3 -->
    <section class="d-flex justify-content-between text-center p-3 mt-1 mt-lg-5 packages">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-12 col-lg-6">
            <div class="packagecont me-2 me-lg-5 text-start">
              <h2 >Approdable Packages</h2>
              
              <p >Problems trying to resolve the conflict between 
                the two major realms of Classical physics: 
                Newtonian mechanics </p>
              <a href="#" class="nav-link">Learn More <i class="fas fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-12 col-lg-5">
            <div id="packagevid" class="container">
              <div class="vedio">
                <img src="image/pic-5.jpg" alt="" class="img-fluid">
                <button id="play" onclick="magnificPopup()" class="btn btn-sm btn-block"><i class="fas fa-play"></i></button>
                <!-- popup video -->
                <div class="modal is-hide popvid">
                  <iframe width="80%" height="80%"  src="https://www.youtube.com/embed/QmpTkkaKYSU" frameborder="0" allowfullscreen></iframe>
                  <a class="modal-close js-modal-close close">X</a>
                </div>

                
              </div>
            </div>
          </div>

          <!-- <div id="popup">
            <video src="https://youtu.be/BFw80kvCA-Q"></video>
          </div> -->
        </div>
      </div>
    </section>
    <!-- end of section 3 -->

    <!-- section 4 -->
    <?php  include_once 'admin/adminpage/includes/productpreview.php'?>
    <!-- end of section 4 -->

    <!-- section 5 -->
    <section class="py-3 py-lg-1 test">
      <div class="container p-3 p-lg-1  rating">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="text-start cont">
              <h6>Testimonials</h6>
              <h2>Our Popular Courses</h2>
              <p>Problems trying to resolve the conflict between 
                the two major realms of Classical physics: Newtonian mechanics </p>
            </div>
          </div>
        </div>
        <div class="text-center rates">
          <div class="row d-flex justify-content-center">
            <div class="col-7 col-lg-5">
              <div class="p-4 rate">
                <img src="image\pic-3.jpg" alt="" width="128px" height="128px">
                <p class="px-3 px-lg-5">Slate helps you see how many more days 
                  you need to work to reach your financial 
                  goal for the month and year.</p>
                <div class="stars">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="far fa-star text-warning"></i>
                </div>
                <h5>Regina Miles</h5>
                <h6>Designer</h6>
              </div>
            </div>

            <div class="col-7 col-lg-5">
              <div class="p-4 rate">
                <img src="image\pic-4.jpg" alt="" width="128px" height="128px">
                <p class="px-3 px-lg-5">Slate helps you see how many more days 
                  you need to work to reach your financial 
                  goal for the month and year.</p>
                <div class="stars">
                  <i class="fa fa-solid fa-star text-warning"></i>
                  <i class="fa fa-solid fa-star text-warning"></i>
                  <i class="fa fa-solid fa-star text-warning"></i>
                  <i class="fa fa-solid fa-star text-warning"></i>
                  <i class="fa fa-regular fa-star text-warning"></i>
                </div>
                <h5>Regina Miles</h5>
                <h6>Designer</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 5 -->

    <!-- section 6 -->
    <section class="py-3 py-lg-5 news">
      <div class="container searchnews">
        <div class="row d-flex justify-content-center">
          <div class="col-10 col-lg-5">
            <div class="text-center letter">
              <h6>Newsletter</h6>
              <h3>Our Experts Teacher</h3>
              <p>Problems trying to resolve the conflict between 
                the two major realms of Classical physics: Newtonian mechanics </p>
            </div>
          </div>

          <div class="col-12 col-lg-8 pt-5">
            <div>
              <form class="mb-3 submetion" action="admin/adminpage/subscribes.php" method="post">
                <input type="text" name="fullName" class="form-control mr-sm-2 m-2 name" placeholder="Full Name">
                <input id="email" name="email" class="form-control mr-sm-2 m-2" type="email" placeholder="Email" aria-label="Email">
                <input name="phone" class="form-control mr-sm-2 phone m-2" type="phone" placeholder="Phone Number (555) 555 5555" pattern="\(\d{3}\) \d{3} \d{4}">
                <input name="message" class="form-control mr-sm-2 msg m-2" type="text" placeholder="message">
                <button id="subscribe" class="btn" type="submit">Subscribe</button> <br>
                
                <div class="popup d-none">
                  <div id="warning" class="d-none">
                    <p class="icn"><i class="fas fa-exclamation-circle"></i></p>
                    <p class="msg"><em>Error</em> There is no email entered</p>
                    <button type="button" class="btn ok">OK</button>

                  </div>

                  <div id="valid" class="d-none">
                    <p class="icn"><i class="fas fa-check-circle"></i></p>
                    <p class="msg">Email is Valid and you have successfuly subscribed</p>
                    <button type="button" class="btn ok">OK</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of section 6 -->


    <!-- footer start -->
    <?php  include_once 'footer.php'?>
    <!-- footer end -->   
    <script src="jshome.js"></script> 
  </body>
</html>


