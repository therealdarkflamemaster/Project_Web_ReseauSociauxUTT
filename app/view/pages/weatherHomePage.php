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
    <link rel="stylesheet" href="<?php echo $root.'/public/css/dashboard.css'; ?>">

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
                            <a class="nav-link" href="#" onclick="generate('json')">
                                <span data-feather="file"></span>
                                En JSON
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="generate('xml')">
                                <span data-feather="shopping-cart"></span>
                                En XML
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="generate('html')">
                                <span data-feather="shopping-cart"></span>
                                En HTML
                            </a>
                        </li>
                    </ul>
                    <br>
                    <span>Autre options</span>
                    <ul class="nav flex-column mb-2">

                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span data-feather="file-text"></span>
                                Le temps dans la semaine
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >
                                <span data-feather="file-text"></span>
                                Le temps dès maintennant
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div id='img'></div>
                <div id='tem' style="color:#ffffff"></div>
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
<script src="<?php $root.'/public/js/dashboard.js'?>"></script>
</body>
</html>


