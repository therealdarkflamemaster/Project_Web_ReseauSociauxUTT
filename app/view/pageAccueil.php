<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UTT Réseux Sociaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="lx dhb" />
    <meta name="keywords" content="lx dhb" />
    <meta name="author" content="lx dhb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <?php
    require('fragment/requireCSS.php');

    ?>

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">
    <?php
    require('fragment/fragmentHeader.php');
    ?>

    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../../public/images/image_pre1.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">

                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <div id='img'></div>
                            <div id='tem' style="color:#ffffff"></div>
                            <br>
                            <h1>Réseaux Sociaux de Université de Technologie de Troyes</h1>
                            <?php

                                include "../module/weather.php";
                            ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>



    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Comment fonctionner ?</h2>
                    <p>3 étapes à suivre</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                                                            <span class="icon">
                                                                    <i>1</i>
                                                            </span>
                        <h3>Login / S'inscrire</h3>
                        <p>Pressez le button en haut</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                                                            <span class="icon">
                                                                    <i>2</i>
                                                            </span>
                        <h3>Choisir vos connections </h3>
                        <p>Les cours de ce semestre, les activités de UTT</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                                                            <span class="icon">
                                                                    <i>3</i>
                                                            </span>
                        <h3>Commencer votre tour ici</h3>
                        <p>Communicater avec vos amis et vos profs</p>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="gtco-cover gtco-cover-sm" style="background-image: url(../../public/images/utt2.jpg)"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container text-center">
            <div class="display-t">
                <div class="display-tc">
                    <h1>Faites les liens avec les UTTiens </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Des UTTiens déjà chez nous</h2>
                    <p>Etudiantes, Etudiants, Profs, Personels ...</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="20">1</span>
                        <span class="counter-label">Etudiant(e)s</span>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="14" data-speed="5000" data-refresh-interval="10">3</span>
                        <span class="counter-label">Profs</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="6" data-speed="5000" data-refresh-interval="10">4</span>
                        <span class="counter-label">Personnels</span>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php
    require('fragment/fragmentFooter.php');
    ?>

</div>

<?php
require('fragment/requireJs.php');
?>

</body>
</html>


<!--
Widgets constructor dans le site

        <div id="openweathermap-widget-15"></div>
<script>
        window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
        window.myWidgetParam.push({
                id: 15,
                cityid: '2971548',
                appid: 'a18189e2a9f309ca13fee53dd431d2a9',
                units: 'metric',containerid: 'openweathermap-widget-15',
        });
        (function() {
                var script = document.createElement('script');
                script.async = true;script.charset = "utf-8";
                script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(script, s);  })();

</script>

-->
