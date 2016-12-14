<!doctype html>
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

</head>
<body class="maint">
<div class="se-pre-con"></div>

<?php require('headersecundario.php')?>

            <div class="container">
                <div class="jumbotron">
                    <h1>Queremos saber de ti</h1>
                    <p>Chiles&Beer&reg; es una empresa que se preocupa por el bienestar y deleite del cliente, saber lo que opinas
                    hará que podamos ser mejores para ti</p>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-wrapper">
                            <div class="my-form">
                                <div class="col-sm-6 no-padding">
                                    <img src="../img/logox.png" class="img-responsive center-block hidden-xs" alt="" width="30%" style="padding-top: 1em;">
                                    <div class="info">
                                        <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="https://cdn2.iconfinder.com/data/icons/thesquid-ink-40-free-flat-icon-pack/64/envelope-2-128.png" class="img-responsive center-block" alt="">
                                                    <div class="container">
                                                        <div class="carousel-caption">
                                                            <p style="font-size: large">No te preocupes, no usaremos tu información</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="https://cdn2.iconfinder.com/data/icons/thesquid-ink-40-free-flat-icon-pack/64/cup-128.png" class="img-responsive center-block" alt="">
                                                    <div class="container">
                                                        <div class="carousel-caption">
                                                            <p style="font-size: large">Buscamos ser los #1 en lo que hacemos...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="https://cdn2.iconfinder.com/data/icons/thesquid-ink-40-free-flat-icon-pack/64/diploma-128.png" class="img-responsive center-block" alt="">
                                                    <div class="container">
                                                        <div class="carousel-caption">
                                                            <p style="font-size: large">...Y te lo vamos a demostrar</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-bg">
                                    <div class="main-form">
                                        <h1 class="display-4">Contáctanos</h1>


                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="login">
                                                    <p>Ansiamos conocer tus dudas, quejas o sugerencias</p>
                                                    <form id="formulario-contacto" method="post" action="send_mail.php" accept-charset="utf-8">
                                                        <input class="form-control" type="email" name="email" id="email" value="" placeholder="Correo electrónico" required >
                                                        <input class="form-control" type="text" name="asunto" id="asunto" value="" placeholder="Asunto" required >
                                                        <span><br>Comentarios</span>
                                                        <textarea class="form-control" name="mensaje" rows="10" id="mensaje" required style="height: 100px;"required></textarea>
                                                        <div align="center">
                                                            <input class="btn btn-default btn-xl sr-button" type="submit" name="submit" id="submit" value="Enviar mensaje"  style="background-color: #dc2b19;color: #ffffff;">
                                                        </div>
                                                        <div class="alert fade in" id="alert-mail" style="display: none;">
                                                            <a href="#" class="close" aria-label="cerrar">&times;</a>
                                                            <span class="alert-content"></span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
            </div>
<?php require("footer.php"); ?>
</body>
</html>