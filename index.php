<!DOCTYPE html>

<?php
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>

<?php $title = 'Corrao Group'; ?>
<!-- Head -->
<?php include('head.php'); ?>

		<!-- Navigation -->
    <?php include('navbar.php'); ?>

		<!-- Header - Rotating Images -->
		<!-- <div id="carousel-desktop">
			<?php include('carousel-desktop.php'); ?>
		</div>
		<div id="carousel-mobile">
			<?php include('carousel-mobile.php'); ?>
		</div> -->

    <!-- Main Banner -->
    <div id="main-banner" class="container-fluid parallax-window">
      <div class="container header-overlay">
        <div class="container">

          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center parallax-content" style="color: white;">Corrao Group</h1>
            </div>
          </div>

        </div>
      </div>
    </div>


		<!-- Live Images - 3 Flipping Cards -->
		<div class="container">

      <?php if ($chrome || $firefox || $safari) { ?>

			<div class="row">
				<div class="col-sm-3 flipcard-header-line"></div>
				<div class="col-sm-6 text-center">
					<h1 class="flipcard-header" style="font-size: 3vw;">Custom Solutions</h1>
				</div>
				<div class="col-sm-3 flipcard-header-line"></div>
			</div>

			<div class="row flipcard-row">
				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div id="front-new" class="front">
								<h2 class="flipcard-caption">New to</br>Salesforce</h2>
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
							<div id="front-optimizing" class="front">
								<h2 class="flipcard-caption">Optimizing Salesforce</h2>
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
							<div id="front-expansion" class="front">
								<h2 class="flipcard-caption">Salesforce Expansion</h2>
							</div>
							<div class="back flipcard-right">
								<p>Expand the Salesforce platform across all of your departments: Marketing, Service, Accounting, Operations, and more.</p>
								<a class="flipcard-link" href="salesforce_expansion.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

    <?php } else { ?>

      <div class="row">
				<div class="col-sm-3 flipcard-header-line"></div>
				<div class="col-sm-6 text-center">
					<h1 class="flipcard-header" style="font-size: 3vw;">Custom Solutions</h1>
				</div>
				<div class="col-sm-3 flipcard-header-line"></div>
			</div>

			<div class="row flipcard-row">
				<div class="col-xs-4 text-center">
					<div class="flipcard-container-ie">
						<div class="flipcard-ie">
							<div id="front-new" class="front-ie">
								<h2 class="flipcard-caption">New to</br>Salesforce</h2>
							</div>
							<div class="back-ie flipcard-left">
								<p>Establish a foundation on Salesforce Cloud to ensure your business processes are well defined, transferred over, and optimized.</p>
								<a class="flipcard-link" href="new_to_salesforce.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard-ie">
							<div id="front-optimizing" class="front-ie">
								<h2 class="flipcard-caption">Optimizing Salesforce</h2>
							</div>
							<div class="back-ie">
								<p>Have a solid Salesforce foundation and ready to take it to the next level? Leverage our team for advanced custom configuration and training. </p>
								<a class="flipcard-link" href="optimizing_salesforce.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard-ie">
							<div id="front-expansion" class="front-ie">
								<h2 class="flipcard-caption">Salesforce Expansion</h2>
							</div>
							<div class="back-ie flipcard-right">
								<p>Expand the Salesforce platform across all of your departments: Marketing, Service, Accounting, Operations, and more.</p>
								<a class="flipcard-link" href="salesforce_expansion.php"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

    <?php } ?>

		</div>

		<!-- Flipcard Mobile -->
		<div class="container flipcard-mobile-container">

			<div class="row">
				<a href="new_to_salesforce.php">
					<div class="col-xs-4 text-center flipcard-mobile-left" style="background-color: #9bb901">
						<img class="img-responsive center-block flipcard-image" src="img/Tiles/nts.png" alt="" >
						<h2 class="flipcard-caption">NEW TO SALESFORCE</h2>
					</div>
				</a>

				<a href="optimizing_salesforce.php">
					<div class="col-xs-4 text-center">
						<img class="img-responsive center-block flipcard-image" src="img/Tiles/os.png" alt="">
						<h2 class="flipcard-caption">OPTIMIZING SALESFORCE</h2>
					</div>
				</a>

				<a href="salesforce_expansion.php">
					<div class="col-xs-4 text-center flipcard-mobile-right" style="background-color: #f6c500">
						<img class="img-responsive center-block flipcard-image" src="img/Tiles/se.png" alt="">
						<h2 class="flipcard-caption">SALESFORCE EXPANSION</h2>
					</div>
				</a>
		  </div>

		</div>

		<!-- Our Customers -->
		<div class="container-fluid parallax-window our-customers-container" data-parallax="scroll" data-image-src="img/parallax-bg-1.jpg" >
      <div class="container parallax-overlay">
        <div class="container">

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
    						<div class="ticker-number-static">5/5</div>
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
  			<p class="text-justify">With 15 years of being in business, our Salesforce footprint has reached over 720 national clients, completed 1300+ projects, and have comprised a team of cross-industry experts dedicated to helping clients exceed their Salesforce expectations. Our expertise of the Salesforce platform comes from being everyday power users of the products we implement and train on, giving us insight into the everyday needs of Salesforce customers.</p>
  			<p class="text-justify">Corrao Group will translate your company’s day to day activities into an implementation plan that spans the breadth of Salesforce capabilities. We identify and optimize the functionality that will make the greatest impact in each phase of your growth on the business platform.</p>

  		</div>
    </div>

    <!-- Contact Us -->
    <?php include('contact_us.php'); ?>

    <!-- Certifications -->
    <?php include('our_certifications.php'); ?>

		<!-- Footer -->
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="assets/number_ticker.js"></script>
