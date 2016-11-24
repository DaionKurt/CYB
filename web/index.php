<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../img/logo.png"/>
    <meta charset="UTF-8">
    <title>Chiles & Beer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/sucursales.js"></script>

    <style>
        *{
            overflow-x:hidden !important;
        }
        body {
            background-image: url(../img/bg40.png), url(../img/bg6.png);
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
            background-position: center top;
            background-repeat: no-repeat, repeat-y;
        }
        @media (min-width: 400px) {
            body {
                background-image: url(../img/bg40.png), url(../img/bg6.png); <!-- Plus -->
            }
        }

        @media (min-width: 500px) {
            body {
                background-image: url(../img/bg39.png), url(../img/bg6.png); <!-- Ipad -->
            }
        }

        @media (min-width: 1000px) {
            body {
                background-image: url(../img/bg41.png), url(../img/bg6.png);   <!-- Medium -->
            }
        }

    </style>
</head>
<body>
<div class="se-pre-con"></div>

<!--
    <nav class="navbar">
            <div class="navbar-header pull-left" style="padding-left: 1em;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar"  style="background-color: white"></span>
                    <span class="icon-bar"  style="background-color: white"></span>
                </button>


            </div>
            <div class="collapse navbar-collapse" id="myNavbar" align="center">
                <ul class="nav navbar-nav">
                    <lo><a href="#"><pr>Sucursales</pr></a></lo>
                    <lo><a href="#"><pr style="padding: 1em;">Menú</pr></a></lo>
                    <lo><a href="#"><pr>Servicios</pr></a></lo>
                    <a class="hidden-xs hidden-md hidden-lg" href="#"><img class="img-responsive" src="../img/logox.png" alt="" width="80%" style="padding: 1em 7em"></a>
                    <a class="hidden-xs hidden-sm" href="#"><img src="../img/logox.png" alt="" width="30%" style="padding:5em"></a>
                    <lo><a href="#"><pr>Franquicias</pr></a></lo>
                    <lo><a href="#"><pr>Acerca de</pr></a></lo>
                    <lo><a href="#"><pr>Contacto</pr></a></lo>
                </ul>
            </div>
    </nav>
<div align="center">
    <a class="hidden-sm hidden-md hidden-lg" href="#"><img src="../img/logox.png" alt="" width="70%" style="padding-bottom:5em;"></a>

</div>

-->
    <?php require('header.php')?>


<div class="container">
    <div class="hidden-xs hidden-sm hidden-md">
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="hidden-xs hidden-sm hidden-lg">
        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="hidden-xs hidden-md hidden-lg">
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="hidden-sm hidden-md hidden-lg">
        <br><br><br><br><br>
    </div>
        
        <div align="center" style="color: #FFF;"><h1 style="height: 50px;" class="display-3">Promociones</h1></div>
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <div class="row">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300"></div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" style="height: 50px;"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"  style="height: 50px;"></span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4" id="carousel-text"></div>

                        <div id="slide-content" style="display: none;">
                            <div id="slide-content-0">
                                <h2 style="color: #FFF;">Slider One</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-1">
                                <h2 style="color: #FFF;">Slider Two</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-2">
                                <h2 style="color: #FFF;">Slider Three</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-3">
                                <h2 style="color: #FFF;">Slider Four</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-4">
                                <h2 style="color: #FFF;">Slider Five</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-5">
                                <h2 style="color: #FFF;">Slider Six</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2016 - <a href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden-xs" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100"></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div align="center" style="color: #FFF;"><h1 style="height: 50px;" class="display-3">Patrocinadores</h1></div>
        <div class="row">
            <div class="col-xs-3 col-md-3"><img class="img-responsive" src="http://placehold.it/170x170&text=one" alt=""></div>
            <div class="col-xs-3 col-md-3"><img class="img-responsive" src="http://placehold.it/170x170&text=two" alt=""></div>
            <div class="col-xs-3 col-md-3"><img class="img-responsive" src="http://placehold.it/170x170&text=three" alt=""></div>
            <div class="col-xs-3 col-md-3"><img class="img-responsive" src="http://placehold.it/170x170&text=four" alt=""></div>
        </div>
        <br><br>
    </div>
    <?php require("footer.php"); ?>
</body>
</html>