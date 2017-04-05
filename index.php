<!DOCTYPE html>
<?php $title = 'Corrao Group'; ?>
<!-- Head -->
<?php include('head.php'); ?>

		<!-- Navigation -->
    <?php include('navbar.php'); ?>

		<!-- Header - Rotating Images -->
		<div id="carousel-desktop">
			<?php include('carousel-desktop.php'); ?>
		</div>
		<div id="carousel-mobile">
			<?php include('carousel-mobile.php'); ?>
		</div>

		<!-- Live Images - 3 Flipping Cards -->
		<div class="container">

			<div class="row">
				<div class="col-sm-3 flipcard-header-line"></div>
				<div class="col-sm-6 text-center">
					<h1 class="flipcard-header">Salesforce</h1>
				</div>
				<div class="col-sm-3 flipcard-header-line"></div>
			</div>

			<div class="row flipcard-row">
				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="" >
								<h2 class="flipcard-caption">NEW TO SALESFORCE</h2>
							</div>
							<div class="back flipcard-left">
								<p>Establish a foundation on Salesforce Cloud to ensure your business processes are well defined, transferred over, and optimized.</p>
								<a class="flipcard-link" href="new_to_salesforce.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="">
								<h2 class="flipcard-caption">OPTIMIZING SALESFORCE</h2>
							</div>
							<div class="back">
								<p>Have a solid Salesforce foundation and ready to take it to the next level? Leverage our team for advanced custom configuration and training. </p>
								<a class="flipcard-link" href="optimizing_salesforce.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="">
								<h2 class="flipcard-caption">SALESFORCE EXPANSION</h2>
							</div>
							<div class="back flipcard-right">
								<p>Expand the Salesforce platform across all of your departments: Marketing, Service, Accounting, Operations, and more.</p>
								<a class="flipcard-link" href="salesforce_expansion.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Flipcard Mobile -->
		<div class="container flipcard-mobile-container">

			<div class="row">
				<a href="new_to_salesforce.php">
					<div class="col-xs-4 text-center flipcard-mobile-left">
						<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="" >
						<h2 class="flipcard-caption">NEW TO SALESFORCE</h2>
					</div>
				</a>

				<a href="optimizing_salesforce.php">
					<div class="col-xs-4 text-center">
						<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="">
						<h2 class="flipcard-caption">OPTIMIZING SALESFORCE</h2>
					</div>
				</a>

				<a href="salesforce_expansion.php">
					<div class="col-xs-4 text-center flipcard-mobile-right">
						<img class="img-responsive center-block flipcard-image" src="img/placeholder.jpg" alt="">
						<h2 class="flipcard-caption">SALESFORCE EXPANSION</h2>
					</div>
				</a>
		  </div>

		</div>

		<!-- Our Customers -->
		<div class="container-fluid parallax-window our-customers-container" data-parallax="scroll" data-image-src="img/parallax-bg-1.jpg" >
      <div class="container">

  			<div class="parallax-overlay">
  				<h1 class="text-center parallax-content">Our Customers</h1>
  				<div class="row parallax-content text-center">
  					<div class="col-sm-3">
              <div class="ticker-number" data-counter="720">0</div>
  						<p># of Customers</p>
  					</div>
  					<div class="col-sm-3">
  						<div class="ticker-number" data-counter="1300">0</div>
  						<p>Projects</p>
  					</div>
  					<div class="col-sm-3">
  						<div class="ticker-number" data-counter="5" style="display: inline;">0</div><div class="ticker-number2" style="display: inline;">/5</div>
  						<p>Salesforce AppExchange Score</p>
  					</div>
  					<div class="col-sm-3">
  						<div class="ticker-number" data-counter="890">0</div>
  						<p># of Cancer Transportation Rides Donated</p>
  					</div>
  				</div>
  			</div>

      </div>
		</div>

		<!-- Salesforce Footprint -->
    <div class="container-fluid">
  		<div class="container">

  			<h1 class="text-center salesforce">Salesforce Footprint</h1>
  			<p class="">With 15 years of being in business, our Salesforce footprint has reached over 720 national clients, completed 1300+ projects, and have comprised a team of cross-industry experts dedicated to helping clients exceed their Salesforce expectations. Our expertise of the Salesforce platform comes from being everyday power users of the products we implement and train on, giving us insight into the everyday needs of Salesforce customers.</p>
  			<p class="">Corrao Group will translate your company’s day to day activities into an implementation plan that spans the breadth of Salesforce capabilities. We identify and optimize the functionality that will make the greatest impact in each phase of your growth on the Salesforce platform.</p>

        <div class="row">
          <div class="col-xs-12 text-center">
            <h2>Our Certifications</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-xs-offset-1">
            <img class="img-responsive" src="img/placeholder.jpg" />
          </div>
          <div class="col-xs-2">
            <img class="img-responsive" src="img/placeholder.jpg" />
          </div>
          <div class="col-xs-2">
            <img class="img-responsive" src="img/placeholder.jpg" />
          </div>
          <div class="col-xs-2">
            <img class="img-responsive" src="img/placeholder.jpg" />
          </div>
          <div class="col-xs-2">
            <img class="img-responsive" src="img/placeholder.jpg" />
          </div>
        </div>

  		</div>
    </div>

    <!-- Contact Us -->
    <?php include('contact_us.php'); ?>

		<!-- Footer -->
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="assets/number_ticker.js"></script>
