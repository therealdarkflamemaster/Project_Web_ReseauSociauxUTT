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
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Personel<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Cours associés
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Amis
                            </a>
                        </li>

                    </ul>
                    <br>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Autre functions </span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Add cours
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                World Channel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"  onClick="showQR()">
                                <span data-feather="file-text"></span>
                                Ouvrir avec le smartphone QR code
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Infos personelles</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" id="QR" hidden>
                    <h1 class="h2">QR codes</h1>
                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h5 class="h5">UTT Moodle</h5>
                            <?php
                            include_once '../../../app/controller/ServiceController.php';
                            ServiceController::generateQRcode('https://moodle.utt.fr','Moodle');
                            ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h5 class="h5">UTT ENT</h5>
                            <?php
                            include_once '../../../app/controller/ServiceController.php';
                            ServiceController::generateQRcode('https://ent2.utt.fr','ENT');
                            ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h5 class="h5">UTT Etu</h5>
                            <?php
                            include_once '../../../app/controller/ServiceController.php';
                            ServiceController::generateQRcode('https://etu.utt.fr','Etu');
                            ?>
                        </div>
                    </div>
                </div>


                <script>
                    function showQR(){
                        var divElement = document.getElementById('QR');
                        if(divElement.hidden == false){
                            divElement.hidden = true;
                        }else{
                            divElement.hidden = false;
                        }
                    }
                </script>
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


