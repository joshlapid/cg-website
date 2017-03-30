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
				<div class="col-sm-4 flipcard-header-line"></div>
				<div class="col-sm-4 text-center">
					<h1 class="flipcard-header">Salesforce</h1>
				</div>
				<div class="col-sm-4 flipcard-header-line"></div>
			</div>
			<div class="row flipcard-row">
				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/person-logo.png" alt="" >
								<h2 class="flipcard-caption">NEW TO SALESFORCE</h2>
							</div>
							<div class="back">
								<p>In order to successfully grow and adopt your Salesforce instance company-wide, a solid foundation is required.</p>
								<a class="flipcard-link" href="new_to_salesforce.html"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/speedometer-logo.png" alt="">
								<h2 class="flipcard-caption">OPTIMIZING SALESFORCE</h2>
							</div>
							<div class="back">
								<p>Once Salesforce has been adopted amongst your initial , it’s time to optimize your SF instance.</p>
								<a class="flipcard-link" href="optimizing_salesforce.html"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 text-center">
					<div class="flipcard-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipcard">
							<div class="front">
								<img class="img-responsive center-block flipcard-image" src="img/globe-logo.png" alt="">
								<h2 class="flipcard-caption">SALESFORCE EXPANSION</h2>
							</div>
							<div class="back">
								<p>Grow your Salesforce company-wide to ensure ROI is exceeded, and business is better than ever. Utilize 3rd party solutions...</p>
								<a class="flipcard-link" href="salesforce_expansion.html"><button class="default-button">LEARN MORE</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Flipcard Mobile -->
		<div class="container flipcard-mobile-container container-padding">
			<div class="row">

				<a href="new_to_salesforce.html">
					<div class="col-xs-4 text-center">
						<img class="img-responsive center-block flipcard-image" src="img/person-logo.png" alt="" >
						<h2 class="flipcard-caption">NEW TO SALESFORCE</h2>
					</div>
				</a>

				<a href="optimizing_salesforce.html">
					<div class="col-xs-4 text-center">
						<img class="img-responsive center-block flipcard-image" src="img/speedometer-logo.png" alt="">
						<h2 class="flipcard-caption">OPTIMIZING SALESFORCE</h2>
					</div>
				</a>

				<a href="salesforce_expansion.html">
					<div class="col-xs-4 text-center">
						<img class="img-responsive center-block flipcard-image" src="img/globe-logo.png" alt="">
						<h2 class="flipcard-caption">SALESFORCE EXPANSION</h2>
					</div>
				</a>

			</div>
		</div>

		<!-- Our Customers -->
		<div class="container-fluid parallax-window our-customers-container" data-parallax="scroll" data-image-src="img/parallax-bg-1.jpg" >
			<div class="parallax-overlay">
				<h1 class="text-center parallax-content">Our Customers</h1>
				<div class="row">
					<div class="col-sm-12">
						<img class="img-responsive center-block our-customers-image" src="img/placeholder-large.jpg" alt="">
					</div>
				</div>
			</div>
		</div>

		<!-- Salesforce Footprint -->
		<div class="container container-padding">
			<h1 class="text-center salesforce">Salesforce Footprint</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<!-- Footer -->
    <?php include('footer.php'); ?>
