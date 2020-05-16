<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>UTT Réseux Sociaux log-in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="lx dhb" />
	<meta name="keywords" content="lx dhb" />
	<meta name="author" content="lx dhb" />

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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/utt1.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">						
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Log in</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Log in</h3>
											<form method="post" action="verif.php" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="email">Email UTT</label>
														<input type="email" name="email" id="email" class="form-control">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="pwd">Password</label>
														<input type="password" name="pwd" id="pwd" class="form-control">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														    <input type="submit" class="btn btn-primary btn-block" value="Log in">
													</div>
												</div>
	                                                                                            

											</form>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="zhuce"> Vous êtes nouveau ? </label>
                                                    <a href="./register.php">
                                                        <input type="button" class="btn btn-primary btn-block" value="S'inscrirez maintenant!">
                                                    </a>
                                                </div>
                                            </div>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>											
				</div>
			</div>
		</div>
	</header>
	

	<?php 
		require('./footer.php');
	?>

	</div>

	<?php 
		require('requireJs.php');
	?>

	</body>
</html>



