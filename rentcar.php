<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" >
        	<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">
						<div class="row row-mt-15em">

							<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1>rent a car</h1>	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</header>
        <?php 
        	require('./footer.php');
        ?>
        <?php 
			require('requireJs.php');
		?>
    </body>
</html>
