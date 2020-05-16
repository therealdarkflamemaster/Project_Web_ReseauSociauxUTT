<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KENGSINI Pricing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="." />
	<meta name="keywords" content="." />
	<meta name="author" content="." />


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<?php
		require('requireCSS.php');
	?>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<?php 
		require('./header.php');
	?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Plans for renting</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Choose The Best Plan For You</h2>
					<p>We have the lowest prize for renting in the world..</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Economy</h2>
						<div class="price"><sup class="currency">$</sup>1000<small>/day</small></div>
						<p>The smallest car with the economist prize for you.</p>
						<hr>
						<ul class="pricing-info">
							<li>Hyundai</li>
							<li>Fiat</li>
							<li>KIA</li>
							<li>JEEP</li>
						</ul>
						<a href="rentcar.php" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Regular</h2>
						<div class="price"><sup class="currency">$</sup>2000<small>/day</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Toyota</li>
							<li>Fort</li>
							<li>Peugeot</li>
							<li>Volkswagen</li>
						</ul>
						<a href="rentcar.php" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">Popular</div>
						<h2 class="pricing-plan">Luxury</h2>
						<div class="price"><sup class="currency">$</sup>5000<small>/day</small></div>
						<p>The best car we can offer to our best costomer</p>
						<hr>
						<ul class="pricing-info">
							<li>Audi</li>
							<li>BMW</li>
							<li>Benz</li>
							<li>DS</li>
						</ul>
						<a href="rentcar.php" class="btn btn-primary btn-sm">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		require('./footer.php');
	?>

	</div>

	<?php 
		require('requireJs.php');
	?>

	</body>
</html>


