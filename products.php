<?php include 'components/connect.php'; ?>
<?php include 'components/header.php'; ?>


  <!-- ======= Breadcrumbs ======= -->
  <section  class="breadcrumbs mt-0">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Product</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Product</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

   


    <!-- ======= Pricing Section ======= -->
    <section id="products" class="products">
      <div class="container">

        <div class="section-title">
          <h2>Products</h2>
          <p>Our Products</p>
        </div>

        <div class="row">
           
          
            <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
            ?>  
     
      <form action="" method="post" class="col-lg-2 m-4 mt-lg-0">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">

         <div class="pic"><img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="" width="200" height="200"></div>
         
         
         <div class="name"><?= $fetch_products['name']; ?></div>
         <p href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
       
 
            <div class="btn-wrap">
              <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>"  class="btn-buy" >Read More</a>
            </div>
      </form>                         

          <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
            ?>
      </div> 
    </div>      

    </section><!-- End Pricing Section -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <button class="btn">Learn More</button>
  
            <div class="col-lg-8 entries">           
  
              
  
             
  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    
    <div class="container">
      

      <div class="row faq-item d-flex align-items-stretch">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>What is clamp Meter</h4>
        </div>
        <div class="col-lg-7">
          <p>
          A clamp meter is an electrical test tool that combines a basic digital multimeter with a current sensor.</p>
        </div>
      </div><!-- End F.A.Q Item-->

      <div class="row faq-item d-flex align-items-stretch">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>What is digital multimeter</h4>
        </div>
        <div class="col-lg-7">
          <p>
          A digital multimeter is a test tool used to measure two or more electrical values—principally voltage (volts), current (amps) and resistance (ohms). It is a standard diagnostic tool for technicians in the electrical/electronic industries.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->
      <div class="row faq-item d-flex align-items-stretch">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>what is thermal scanner</h4>
        </div>
        <div class="col-lg-7">
          <p>
          The Thermal Scan Monitoring System is an infrared imaging system designed to carry out the thermal imaging of the contact wire.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->
      <div class="row faq-item d-flex align-items-stretch">
        <div class="col-lg-5">
          <i class="bx bx-help-circle"></i>
          <h4>What is insulation tester</h4>
        </div>
        <div class="col-lg-7">
          <p>
          Insulation testers use a high voltage, low current DC charge to measure the resistance within wires and motor windings.
          </p>
        </div>
      </div><!-- End F.A.Q Item-->



 


    </div>
  </section><!-- End Frequently Asked Questions Section -->
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4 mt-5">
  
              <div class="sidebar">           
                <h3 class="sidebar-title">Tags</h3>
                <div class="sidebar-item tags">
                  <ul>
                    <li><a href="#">App</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Smart</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div><!-- End sidebar tags-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->


   
      <?php include 'components/footer.php'; ?>