<?php

include 'components/connect.php';


?>
<?php include 'components/header.php'; ?>

<?php
      $pid = $_GET['pid'];
      $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
      $select_products->execute([$pid]);
      if ($select_products->rowCount() > 0) {
         while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
      ?>


<div class="flex-box">

        <div class="left">

        <form action="" method="post" class="box">
               <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>" >
               <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
               <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
               <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>"  width="100" height="100">
               
              
             
               
              

            <p>
            <div style=" padding: 0 150px;text-size-adjust: inherit;size: legal;font-size: 20px;"><?= $fetch_products['desc']; ?></div>
            </p>
     
            <div class="big-img">
            <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
            </div>
            <div class="images">
                <div class="small-img">
                    <img src="img/p1.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/p2.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/p3.png" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                    <img src="img/p4.png" onclick="showImg(this.src)">
                </div>
            </div>
        </div>

        <div class="right">
           
            <div class="pname"><div class="name"><?= $fetch_products['name']; ?></div></div>
   
            <div class="size">
            <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
            </div>
            
          
        </div>
    </div>
    </form>
    <?php
         }
      } else {
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>


    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>

   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>