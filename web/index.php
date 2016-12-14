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
    <script src="../popup/jquery.magnific-popup.js"></script>
    <link href="../popup/magnific-popup.css" rel="stylesheet">

    <style>

        body {
            background: url(../img/ocean.jpg) 0px 500px repeat-y;
            overflow-x: hidden;
        }
        @media (min-width: 400px) {
            body {
                background-image:url(../img/ocean.jpg); <!-- Plus -->
            }
        }

        @media (min-width: 500px) {
            body {
                background-image: url(../img/ocean.jpg); <!-- Ipad -->
            }
        }

        @media (min-width: 1000px) {
            body {
                background-image: url(../img/ocean.jpg);   <!-- Medium -->
            }
        }
        body{
            padding: 0;
        }
    </style>
    <script type="text/javascript">
        $(function(){
            $(window).resize(function(){
                $('.videobg').css({
                    height:$(window).height()*2,
                    width:($(window).height()*1.77)
                })
                //casos especiales
                if($('.videobg').outerWidth()<$(window).width() && $('.videobg').outerHeight()==$(window).height()){
                    //altura OK, ancho no suficiente, crezco en base al ancho
                    $('.videobg').css({
                        height:$(window).width()/1.77777,
                        width:($(window).width())
                    })
                }
                if($('.videobg').outerWidth()>$(window).width()){
                    //ancho video mayor que el ancho de la ventana, centrar
                    $('.videobg').css({
                        'margin-left':-(($('.videobg').outerWidth()-$(window).width())/2)
                    })
                }else{
                    //ancho video igual que de la ventana, sin centrar
                    $('.videobg').css({
                        'margin-left':0
                    })
                }
            });
            $(window).resize();
        });
    </script>
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
<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $('.videobg').css({
                height:$(window).height()*2,
                width:($(window).height()*1.77)
            })
            //casos especiales
            if($('.videobg').outerWidth()<$(window).width() && $('.videobg').outerHeight()==$(window).height()){
                //altura OK, ancho no suficiente, crezco en base al ancho
                $('.videobg').css({
                    height:$(window).width()/1.77777,
                    width:($(window).width())
                })
            }
            if($('.videobg').outerWidth()>$(window).width()){
                //ancho video mayor que el ancho de la ventana, centrar
                $('.videobg').css({
                    'margin-left':-(($('.videobg').outerWidth()-$(window).width())/2)
                })
            }else{
                //ancho video igual que de la ventana, sin centrar
                $('.videobg').css({
                    'margin-left':0
                })
            }
        });
        $(window).resize();
    });
</script>
    <?php require('header.php')?>
<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $('.videobg').css({
                height:$(window).height()*2,
                width:($(window).height()*1.77)
            })
            //casos especiales
            if($('.videobg').outerWidth()<$(window).width() && $('.videobg').outerHeight()==$(window).height()){
                //altura OK, ancho no suficiente, crezco en base al ancho
                $('.videobg').css({
                    height:$(window).width()/1.77777,
                    width:($(window).width())
                })
            }
            if($('.videobg').outerWidth()>$(window).width()){
                //ancho video mayor que el ancho de la ventana, centrar
                $('.videobg').css({
                    'margin-left':-(($('.videobg').outerWidth()-$(window).width())/2)
                })
            }else{
                //ancho video igual que de la ventana, sin centrar
                $('.videobg').css({
                    'margin-left':0
                })
            }
        });
        $(window).resize();
    });
</script><!--
<div class="" style="margin: -100px">
    <img src="" alt="">
    <div style="overflow-x: hidden;">

        <div class="hidden-sm hidden-xs">
            <img class="swingimageu" border="0" src="../img/WAVE%20PNG.png" width="80%">
            <img class="swingimagebu" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 1%; padding-left: 10%">
            <img class="swingimage" border="0" src="../img/WAVE%20PNG.png" width="80%">
            <img class="swingimageb" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 1%; padding-left: 10%">
            <img class="swingimage3" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 3%; padding-left: 10%">
            <img class="swingimage3b" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 4%; padding-left: 10%">
            <img class="swingimage2" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 5%; padding-left: 10%">
            <img class="swingimage2b" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 6%; padding-left: 10%">
            <img class="swingimage4" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 10%; padding-left: 10%">
            <img class="swingimage4b" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 11%; padding-left: 10%">
        </div>

        <div class="hidden-md hidden-xs hidden-lg">
            <img class="swingimageu" border="0" src="../img/WAVE%20PNG.png" width="80%">
            <img class="swingimagebu" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 1%; padding-left: 10%">
            <img class="swingimage" border="0" src="../img/WAVE%20PNG.png" width="80%">
            <img class="swingimageb-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 1%;">
            <img class="swingimage3-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 3%;">
            <img class="swingimage3b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 4%;">
            <img class="swingimage2-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 5%;">
            <img class="swingimage2b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 6%;">
            <img class="swingimage4-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 10%;">
            <img class="swingimage4b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 11%;">
            <img class="swingimageb-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 12%;  padding-left: 10%">
            <img class="swingimage3-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 13%; padding-left: 10%">
            <img class="swingimage3b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 14%; padding-left: 10%">
            <img class="swingimage2-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 15%; padding-left: 10%">
            <img class="swingimage2b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 16% padding-left: 10%">
            <img class="swingimage4-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 18%; padding-left: 10%">
            <img class="swingimage4b-p" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 20%; padding-left: 10%">
        </div>

        <div class="hidden-md hidden-sm hidden-lg">
            <img class="swingimageu" border="0" src="../img/WAVE%20PNG.png" width="80%">
            <img class="swingimageb-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 1%;">
            <img class="swingimage3-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 3%;">
            <img class="swingimage3b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 4%;">
            <img class="swingimage2-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 5%;">
            <img class="swingimage2b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 6%;">
            <img class="swingimage4-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 10%;">
            <img class="swingimage4b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 11%;">
            <img class="swingimageb-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 12%;  padding-left: 10%">
            <img class="swingimage3-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 13%; padding-left: 10%">
            <img class="swingimage3b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 14%; padding-left: 10%">
            <img class="swingimage2-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 15%; padding-left: 10%">
            <img class="swingimage2b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 16% padding-left: 10%">
            <img class="swingimage4-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 18%; padding-left: 10%">
            <img class="swingimage4b-movil" border="0" src="../img/WAVE%20PNG.png" width="80%" style="padding-top: 20%; padding-left: 10%">
        </div>

    </div>
</div>
-->
<div id="promo" style=" background-color: #F05F40;z-index:100000;margin:285px 0 0 0;width:100%;height: 100%">
</div>
<div class="container algt">
    <script>
        $("#btnContinue").click(function() {
            $('html, body').animate({
                scrollTop: $("#promo").offset().top
            }, 1000);
        });
    </script>
        <div align="center" style="color: #FFF; padding-top:70px"><h1 style="height: 50px;" class="display-3">Promociones</h1></div>
    <script>
        $("#btnContinue").click(function() {
            $('html, body').animate({
                scrollTop: $("#promo").offset().top
            }, 1000);
        });
    </script>
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <div class="row" style="background-color: rgba(0,0,0,0.5)">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://lorempixel.com/770/300/food/1/"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://lorempixel.com/770/300/food/2/"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://lorempixel.com/770/300/food/3/"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://lorempixel.com/770/300/food/4/"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://lorempixel.com/770/300/food/5/"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://lorempixel.com/770/300/food/6/"></div>
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

                        <div id="slide-content" style="display: none; color:white;">
                            <div id="slide-content-0">
                                <h2 style="color: #FFF;">Slider One</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" style="color: #FFF;">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-1">
                                <h2 style="color: #FFF;">Slider Two</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" style="color: #FFF;">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-2">
                                <h2 style="color: #FFF;">Slider Three</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" style="color: #FFF;">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-3">
                                <h2 style="color: #FFF;">Slider Four</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" style="color: #FFF;">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-4">
                                <h2 style="color: #FFF;">Slider Five</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" style="color: #FFF;">October 24 2016 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-5">
                                <h2 style="color: #FFF;">Slider Six</h2>
                                <p style="color: #FFF;">Lorem Ipsum Dolor</p>
                                <p class="sub-text" v>October 24 2016 - <a href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden-xs" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://lorempixel.com/170/100/food/1/"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://lorempixel.com/170/100/food/2/"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://lorempixel.com/170/100/food/3/"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://lorempixel.com/170/100/food/4/"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://lorempixel.com/170/100/food/5/"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://lorempixel.com/170/100/food/6/"></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div align="center" style="color: #FFF;"><h1 style="height: 50px;" class="display-3">Patrocinadores</h1></div>
        <div class="row no-gutter popup-gallery">
            <div class="col-xs-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="portfolio-box image">
                    <img src="../img/tumbtest2.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                        </div>
                        <div class="project-name hidden-xs">
                                Project Name
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="portfolio-box image">
                    <img src="../img/tumbtest1.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name hidden-xs">
                                Project Name
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="portfolio-box image">
                    <img src="../img/tumbtest.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name hidden-xs">
                                Project Name
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <?php require("footer.php"); ?>
<script src="../js/scrollreveal.min.js"></script>
<script src="../js/creative.min.js"></script>

</body>
</html>