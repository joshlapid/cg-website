<!DOCTYPE html>
<?php $title = 'About Us'; ?>
<!-- Head -->
<?php include('head.php'); ?>

    <!-- Navigation -->
    <?php include('navbar.php'); ?>

    <!-- About the Corrao Group -->
    <div class="container-fluid parallax-window" data-parallax="scroll" data-image-src="img/parallax-bg-1.jpg">
      <div class="container">

        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center parallax-content">About the Corrao Group</h1>
          </div>
        </div>

        <div class="row image-padding">
          <div class="col-sm-12">
            <img src="img/placeholder-large.jpg" alt="" class="img-responsive center-block">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <p class="text-center parallax-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

      </div>
    </div>
    <!-- Our Locations Image -->
    <div class="container container-padding">

      <div class="row">
        <div class="col-sm-12">
          <img src="img/placeholder-large.jpg" alt="" class="img-responsive center-block">
        </div>
      </div>

    </div>

    <!-- Our Services -->
    <div class="container-fluid our-services-container parallax-window" data-parallax="scroll" data-image-src="img/parallax-bg-2.jpg">
      <div class="container">

        <div class="row">
          <div class="col-sm-8">
            <h2 class="text-center parallax-content">Our Services</h2>
            <p class="parallax-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div id="contact-us" class="col-sm-4 contact-us-form">

            <h2 class="text-center parallax-content">Contact Us</h2>
            <form action="">

              <div class="form-group row">
                <label for="inputFirstName" class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputFirstName">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputLastName" class="col-sm-4 col-form-label">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputLastName">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputEmail">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputCompany" class="col-sm-4 col-form-label">Company</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputCompany">
                </div>
              </div>

              <button type="submit" class="center-block default-button">SUBMIT</button>

            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>
