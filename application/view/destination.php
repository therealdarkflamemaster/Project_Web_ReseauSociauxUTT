<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HomePage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="." />
	<meta name="keywords" content="." />
	<meta name="author" content="." />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<?php
		require('framework/core/requireCSS.php');
	?>


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<?php 
			require('framework/core/header.php')
		?>
		
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(/public/images/utt1.png)">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="row row-mt-15em">

							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1>Destination</h1>	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</header>
		
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Our Available Destination</h2>
						<p>qi shi neng keng ni de di fang bing bu duo.</p>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_1.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_1.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>New York, USA</h2>
								<p>Really fantastic city in north America.</p>
								
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_2.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Seoul, South Korea</h2>
								<p>A good city for shopping.</p>
								
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_3.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Paris, France</h2>
								<p>A big city with fashions.</p>
								
							</div>
						</a>
					</div>


					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_4.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Sydney, Australia</h2>
								<p>Everyone will loves to live here.</p>
								
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_5.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_5.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Athen, Greece</h2>
								<p>Such a romantic place to live.</p>
								
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="images/img_6.jpg" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/img_6.jpg" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2>Barcelona, Spain</h2>
								<p>A wonderful football city.</p>
								
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php 
			require('framework/core/footer.php');
		?>
	</div>
	<?php 
		require('framework/core/requireJs.php');
	?>
	</body>
</html>


