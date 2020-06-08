<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage weather feature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="." />
    <meta name="keywords" content="." />
    <meta name="author" content="." />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <?php
    include_once "../../controller/config.php";

    require $root.'/app/view/fragment/requireCSS.php';

    ?>


</head>
<body>

<div class="gtco-loader"></div>

<div id="page">

    <?php
    require $root.'/app/view/fragment/fragmentHeaderLogin.php';
    ?>

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="height:75px">
        <div class="overlay"></div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                        <span>Formats</span>
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" >
                                <span data-feather="file"></span>
                                En JSON
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" >
                                <span data-feather="shopping-cart"></span>
                                En XML
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                                <span data-feather="shopping-cart"></span>
                                En HTML
                            </a>
                        </li>
                    </ul>
                    <br>
                    <span>Autre options</span>
                    <ul class="nav flex-column mb-2">

                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                                <span data-feather="file-text"></span>
                                Le temps dans la semaine
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" >
                                <span data-feather="file-text"></span>
                                Le temps dès maintennant
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <h1 class="h3">Le temps dès maintennant en 3 formats</h1>
                <div class="col-md-3">

                    <?php
                    include_once '../../controller/ServiceController.php';
                    ServiceController::openweather('XML');
                    ?>
                    <br />
                    <div style="color: #0adec0;"><b>En XML</b></div>
                </div>
                <div class="col-md-3">
                    <div id='imgjson'></div>
                    <div id='temjson' style="color:black"></div>
                    <?php
                    include_once '../../controller/ServiceController.php';
                    ServiceController::openweather('JSON');
                    ?>
                    <br />
                    <div style="color: #0adec0;"><b>En JSON</b></div>
                </div>
                <div class="col-md-3">
                    <?php
                    include_once '../../controller/ServiceController.php';
                    ServiceController::openweather('HTML');
                    ?>
                    <br />
                    <div  style="color: #0adec0;"><b>En HTML</b></div>
                </div>
                <div class="col-md-9">
                    <h1 class="h3">Le temps dans la semaine</h1>
                    <br />
                    <?php
                    include_once '../../controller/ServiceController.php';
                    ServiceController::openweather('Semaine');
                    ?>
                    <div  style="color: #0adec0;"><b>En Widget</b></div>
                </div>
            </main>
        </div>
    </div>



    <?php
    require $root.'/app/view/fragment/fragmentFooter.php';
    ?>
</div>
<?php
require $root.'/app/view/fragment/requireJs.php';
?>

</body>
</html>


