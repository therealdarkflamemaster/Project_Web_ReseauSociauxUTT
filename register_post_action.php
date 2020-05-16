<?php
	$username = $_POST["name"];
	$email = $_POST["email"];
	$option_identity = $_POST["identity"];
	if($option_identity == "etudiant"){
		$identity = "etudiant(e)";
	}else if ($option_identity == "prof"){
		$identity ="Professeur";
	}else{
		$identity ="Personel";
	}
?>




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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="height:100px">
		<div class="overlay"></div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4 animate-box">
					<h3>Vos  Informations</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-12">
								<label  for="name">UserName : </label>
								<?php print($username); ?>
								
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label  for="email">Email :</label>
								<?php print($email); ?>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="identity">Votre identité :</label>
								<?php
									echo ("$identity");
								?>
							</div>
						</div>

					</form>		
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Autre information nécessaire</h3>
						<!-- FORM -->
						
					<form ><!-- method="post" action="register_post_action2.php" -->
						<div class="row form-group">
							<div class="col-md-12">
								<a href="#" onClick="twitterShare()">Partage dans Twitter!</a>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="identity">Localisation à Troyes (Optional)</label>
								<select name="identity" class="form-control">
									<option selected value="A">A: Campus UTT</option>
									<option value="B">B: Au centre-ville</option>
									<option value="C">C: Terrasse</option>
									<option value="D">D: Hôpital</option>
									<option value="E">E: CROUS</option>
									<option value="F">F: Centre Sportif de Aube</option>
									<option value="G">G: Carrefour</option>
									
								</select>
								 <a href="#" class="btn btn-primary" onClick="openMap()">Ou choisir dans Google Map</a>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="pwd">Choisissez votre cours associés </label>
								<select multiple class="form-control" name="cours">
                                    <option selected >LO07</option>
                                    <option>IF03</option>
                                    <option>IF15</option>
                                    <option>LO10</option>
                                </select>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" id="sumbit" value="Submit" class="btn btn-primary" >
							
						</div>

					</form>	
					</div>
					<script>
						function openMap(){
							var url ="http://localhost/ReseauSociauxUTT/map.html";
							openwindow(url,"Open in Google Map",1000,500);
						}

						function openwindow(url,name,iWidth,iHeight){
							var url;                                
							var name;                           
							var iWidth;                          
							var iHeight;                        
							var iTop = (window.screen.availHeight-30-iHeight)/2;       
							var iLeft = (window.screen.availWidth-10-iWidth)/2;          
							window.open(url,name,'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
						}

					</script>

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
	<script>
		$('#myModal').on('shown.bs.modal', function () {
  		$('#myInput').trigger('focus')
		})
	</script>
	
	</body>
</html>


