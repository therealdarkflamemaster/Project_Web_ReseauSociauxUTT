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
    include "../../controller/config.php";

    require $root.'/app/view/fragment/requireCSS.php';
	?>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<?php
        require $root.'/app/view/fragment/fragmentHeader.php';
	?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../../../public/images/utt3.jpg)">
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
                    <!-- FORM -->
                    <form method="post" action="./register_post_action.php">
                        <div class="col-md-6 animate-box">
                            <h3>Vos  Informations</h3>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label  for="name">UserName</label>
                                    <input type="text" id="user" name="user"  class="form-control" >
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
                                    <input type="password"  id="pwd1" class="form-control" placeholder="votre mot de passe">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="pwd">Password Confirmation</label>
                                    <input type="password" id="pwd2" name="password" class="form-control" placeholder="Confirmer votre mot de passe" onkeyup="validate_pass()" />
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

                        </div>

                        <div class="col-md-6 col-md-push-1 animate-box">

                            <h3>Autre information nécessaire</h3>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <a href="#" onClick="twitterShare()">Partage dans Twitter!</a>
                                    </div>

                                </div>





                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="localisation">Localisation à Troyes (Optional)</label>
                                        <select name="localisation" class="form-control" id="localisation">
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
                                        <label for="cours">Choisissez votre cours associés </label>
                                        <select multiple class="form-control" name="cours" id="cours">
                                            <option selected >LO07</option>
                                            <option>IF03</option>
                                            <option>IF15</option>
                                            <option>LO10</option>
                                        </select>
                                    </div>
                                </div>

						
						<div class="form-group">
							<input type="submit" id="sumbit" name="submit" value="Submit" class="btn btn-primary" disabled>
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

                        function twitterShare(){
                            var url = "https://twitter.com/share?text=J'ai une bonne expérience dans le UTT Réseux Sociaux. N'hésitez pas à connaître shengxiang.li@utt.fr";
                            openwindow(url,"Twitter Share",500,350);
                        }

                        function openMap(){
                            var url ="http://localhost/ReseauSociauxUTT/map.html";
                            openwindow(url,"Open in Google Map",1000,500);
                        }

                        function openwindow(url,name,iWidth,iHeight){
                            var url;
                            var name;
                            var iWidth;
                            var iHeight;
                            var iTop = (window.screen.availHeight-30-iHeight)/2 ;
                            var iLeft = (window.screen.availWidth-10-iWidth)/2;
                            window.open(url,name,'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
                        }

						
					</script>


				</div>
			</div>
		</div>
	</div>



	<!-- </div> -->

	</div>

	<?php
        require $root.'/app/view/fragment/requireJs.php';
	?>

	</body>
</html>


