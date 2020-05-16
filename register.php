<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register your account</title>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/utt3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
						    
							<span class="intro-text-small">Bienvenue (Au dessous)</span>
							<h1>S'inscrirez maintenant!</h1>	
							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Vos  Informations</h3>
					<!-- FORM -->
					<form method="post" action="register_post_action.php">
						<div class="row form-group">
							<div class="col-md-12">
								<label  for="name">UserName</label>
								<input type="text" name="name" id ="name" class="form-control" >
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label  for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="xxx@utt.fr" onkeyup="validate_mail()">
								<span id="check_email"></span>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="pwd">Password</label>
								<input type="password" name="pwd" id="pwd1" class="form-control" placeholder="votre mot de passe">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="pwd">Password Confirmation</label>
								<input type="password" id="pwd2" class="form-control" placeholder="Confirmer votre mot de passe" onkeyup="validate_pass()" />
								<span id="hint_pass"></span>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="identity">Votre identité dans l'utt</label>
								<select name="identity" class="form-control">
									<option selected value="etudiant">Etudiant(e)</option>
									<option value="prof">Professeur</option>
									<option value="personel">Personel</option>
								</select>
							</div>
						</div>

						
						<div class="form-group">
							<input type="submit" id="sumbit" value="Submit" class="btn btn-primary" disabled>
						</div>

					</form>		
					<script>

						function validate_mail(){
							var mail = document.getElementById("email").value;
							if(mail.includes('@utt.fr')){
								document.getElementById("check_email").innerHTML="<font color='green'>Validé</font>"
								document.getElementById("sumbit").disabled = false;
							}else{
								document.getElementById("check_email").innerHTML="<font color='red'>Utlisez l'email @utt.fr</font>"
								document.getElementById("sumbit").disabled = true;
							}
						}

						function validate_pass(){
							var pwd1 = document.getElementById("pwd1").value;
							var pwd2 = document.getElementById("pwd2").value;
							if(pwd1 == pwd2){
								document.getElementById("hint_pass").innerHTML="<font color='green'>Confirmed</font>"
								document.getElementById("sumbit").disabled = false;
							}else{
								document.getElementById("hint_pass").innerHTML="<font color='red'>Unconfirmed</font>"
								document.getElementById("sumbit").disabled = true;
							}
						}

						
					</script>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">12 rue de Marie Curie</li>
							<li class="phone"><a href="tel://066666666"></a>06 66 66 66 66</li>
                            <li class="email"><a href="mailto:shengxiang.li@utt.fr">shengxiang.li@utt.fr</a></li>
							
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>



	<!-- </div> -->

	</div>

	<?php 
		require('requireJs.php');
	?>

	</body>
</html>


