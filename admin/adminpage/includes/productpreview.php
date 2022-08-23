<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/demo/session.php');

?>

<section class="py-3 mt-5 px-2 py-lg-5 livevedio">
  <div class="container p-3 p-lg-1">
    <div class="p-3 p-lg-1 content">
      <h6>Courses</h6>
      <h2>Video in Live Action</h2>
      <p>Problems trying to resolve the conflict between 
        the two major realms of Classical physics: Newtonian mechanics </p>
      <div class="d-flex justify-content-end">
        <?php 
          if(!isset($_SESSION['username'])){
            echo'<a href="/demo/product.php">See More <i class="fas fa-angle-right"></i></a>';
          }
          else{                    
            echo'<a href="/demo/admin/adminpage/productlist.php">See More <i class="fas fa-angle-right"></i></a>';
          }
        ?>
      </div>
    </div>

    <div class="reels">
      <div class="row justify-content-center">
        <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($db,$sql);
            // $row = $result -> fetch_assoc();

            $i = 0;
            while($row = $result -> fetch_assoc()){
            if($i == 4){
                break;;
            }
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
            $i++;
            }
        ?>
      </div>
    </div>
  </div>
</section>