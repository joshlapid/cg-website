<!DOCTYPE html>
<html>
	<head>
		<title>Corrao Group - Optimizing Salesforce</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CDN's -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/style.css">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	</head>
	<body>
		<!-- Navigation -->
    <?php include('navbar.php'); ?>

		<!-- Header - Rotating Images -->
		<div id="myCarousel" class="carousel slide">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">

				<div class="item active">
					<div class="overlay"></div>
					<img src="img/slider1.jpg" alt="" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<div class="center-block">
								<h1 class="carousel-heading">Salesforce Optimization</h1>
								<h3 class="carousel-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
								<button class="carousel-button btn btn-default" type="button" name="button">READ MORE</button>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="overlay"></div>
					<img src="img/slider2.jpg" alt="" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<div class="center-block">
								<h1 class="carousel-heading">Heading</h1>
								<h3 class="carousel-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
								<button class="carousel-button btn btn-default" type="button" name="button">READ MORE</button>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="overlay"></div>
					<img src="img/slider3.jpg" alt="" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<div class="center-block">
								<h1 class="carousel-heading">Heading</h1>
								<h3 class="carousel-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
								<button class="carousel-button btn btn-default" type="button" name="button">READ MORE</button>
							</div>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>

			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
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
