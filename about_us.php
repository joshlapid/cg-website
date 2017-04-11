<!DOCTYPE html>
<?php $title = 'About Us'; ?>
<!-- Head -->
<?php include('head.php'); ?>

    <!-- Navigation -->
    <?php include('navbar.php'); ?>

    <!-- About the Corrao Group -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="img/parallax-bg-1.jpg">
      <div class="container parallax-overlay">
        <div class="container">

          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center parallax-content">Corporate Timeline</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <img id="corporate-timeline" src="img/timeline.png" alt="" class="img-responsive center-block">
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Our Locations Image -->
    <div class="container-fluid location-container">
      <div class="container">

        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Our Customers</h1>
          </div>
        </div>

        <!-- Locations Map -->
        <div class="row">
          <div class="col-sm-12">
            <img src="img/locations_map.png" alt="" class="img-responsive center-block" style="margin-bottom: 40px;">
          </div>
        </div>

      </div>

      <div class="container-fluid" style="border-top: 1px solid rgba(0,0,0,0.2); padding-bottom: 0px;">
        <div class="container">

          <div class="row">

            <div id="our-locations-header" class="col-sm-12 text-center">
              <h1>Our Locations</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 text-center">
              <p>Headquarters - San Diego, California</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 text-center">
              <p>Irvine, California</p>
            </div>
            <div class="col-sm-6 text-center">
              <p>San Jose, California</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 text-center">
              <p>Atlanta, Georgia</p>
            </div>
            <div class="col-sm-6 text-center">
              <p>Toronto, Canada</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Contact Us -->
    <?php include('contact_us.php'); ?>

    <!-- Our Certifications -->
    <?php include('our_certifications.php'); ?>

    <!-- Footer -->
    <?php include('footer.php'); ?>
