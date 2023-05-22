
<?php

include 'components/connect.php';


?>
<?php include 'components/header.php'; ?>

<?php
$pid = $_GET['pid'];
$select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
$select_products->execute(array($pid));
if ($select_products->rowCount() > 0) {
    while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
  

?>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">

    <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>" width="100" height="100">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">


 

                <div class="swiper-slide">
                    <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            </form>

          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h1><?= $fetch_products['name']; ?></h1>
              <ul>
                <li><strong>Brand</strong>: </li>
                <li><strong>Branch</strong>:</li>
                <li><strong>Category</strong>: </li>
                <li><strong>Status</strong>: Out Of Stock</li>
                <li><strong>Price</strong>:</li>
    
              </ul>

              <b>Share this Product :</b> 
                <div id="footer" style="background-color: white !important; padding: 0px!important;">
                <div class="footer-top" style="background-color: white !important; padding: 0px!important;">            
                <div class="footer-info" style="background-color: white !important; padding: 0px!important;">  
                      
              <div class="social-links mt-3" >
                <a href="#" class="twitter "><i class="bx text-dark bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx text-dark bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx text-dark bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx text-dark bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx text-dark  bxl-linkedin"></i></a>
              </div>
            </div>        
        </div>


        
    </div>
    </div>
            
          </div>


          

        </div>

      </div>




    </section><!-- End Portfolio Details Section -->


 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex ">
            <ul id="portfolio-flters">
              <li data-filter=".filter" class="filter-active">Overview</li>
              <li data-filter=".filter-Specifications">Specifications</li>
              <li data-filter=".filter-Features">Features</li>
              <li data-filter=".filter-web">Resources</li>
              <li data-filter=".filter-web">Reviews</li>

            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

            <div class="w80 portfolio-item filter-Specifications">
            
            <h1><?= $fetch_products['name']; ?></h1>

            <p></p>
            
            </div>

        <div class="row portfolio-container">

        <div class="w80 portfolio-item filter-Specifications">
         
         <h1>Specifications:</h1>
         <p><?= $fetch_products['specifications']; ?></p>
           
       </div>

          <div class="w80 portfolio-item filter-Features">
         
            <h1>Features:</h1>
            <p><?= $fetch_products['features']; ?></p>
              
          </div>

          <div class="w80 portfolio-item filter-resources">
         
         <h1>Resources:</h1>
         <p><?= $fetch_products['resources']; ?></p>
           
       </div>

        </div>

      </div>


    
    </section><!-- End Portfolio Section -->

    <?php
    }
} else {
    echo '<p class="empty">No products added yet!</p>';
}
?>



    <?php include 'components/footer.php'; ?>



</body>

</html>