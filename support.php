<?php include 'components/header.php'; ?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-0">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Support Form</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Support Form</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >
      <div class="container">   
 
          <div class="col-lg-8 mt-5 mt-lg-0 w-100" >

            <form action="forms/contact.php" method="post" role="form" class="php-email-form ">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" name="lestName" id="lname" placeholder="Your Lest Name" class="form-control"  required>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" name="lestName" id="lname" placeholder="Your Lest Name" class="form-control"  required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control " name="Description" rows="5" placeholder="Description" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>

          </div>
    </div>

      
    </section><!-- End Contact Section -->


  <?php include 'components/footer.php'; ?>