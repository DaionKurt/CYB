<!doctype html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../img/logo.png"/>
    <meta charset="UTF-8">
    <title>Chiles & Beer - Franquicias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/sucursales.js"></script>
</head>
<body class="gult">
<div class="se-pre-con"></div>

<?php require('headersecundario.php')?>

<div class="container">
    <div class="row">
        <h1>Únete a nosotros!</h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>Forma parte de la franquicia Chiles&Beer&reg;</h3>
            <div style="text-align: justify;">
                <p>Al unirte a nosotros, formas parte de la familia Chiles&Beer&reg;, y te ofrecemos:</p>
                <ul>
                    <li>Contrato de franquicia por 3 años, renovable.</li>
                    <li>Derechos de uso de marca y explotación del concepto.</li>
                    <li>Capacitación y asesoría constante.</li>
                    <li>Impresos institucionales: menús, invitaciones y tarjetas de presentación.</li>
                    <li>Beneficios pactados con socios comerciales</li>
                    <li>Manuales de operación</li>
                    <li>Visitas para asesorías sobre el loca, capacitación, preapertura y apertura (incluir viáticos dentro y fuera de la república mexicana)</li>
                </ul>
                <p>La cuota de franquicia incluye: </p>
                <ul>
                    <li>Estudio de factibilidad en la zona donde tenga pensado poner la franquicia (Investigación de mercado especializada para el local) </li><li>Publicidad de apoyo por parte de nosotros, para anunciar la apertura de la nueva unidad</li><li>Inversión mínima y grandes utilidades</li><li>Promoción institucional</li><li>Actualización constante
                    </li>
                </ul>
                <p>Si te interesa todo lo anterior y quieres unirte a una de las mejores marcas de comida típica fusión mariscos, esta es tu oportunidad, solo envíanos tu nombre y tu correo de contacto seguro, para que podamos ponernos en comunicación e iniciar el negocio de tu vida.</p>
                <h3>Llena el formulario</h3>
            </div>
            <form class="main-form" id="formulario-franquicia" method="post" action="send_mail_franquicia.php" accept-charset="utf-8">
                <input class="form-control" type="email" name="email" id="email-franquicia" value="" placeholder="Correo electrónico" required >
                <input class="form-control" type="text" name="nombre" id="nombre-franquicia" value="" placeholder="Nombre" required="">
                <div align="center">
                    <br>
                    <input class="btn btn-danger btn-xl " type="submit" name="submit" id="submit-franquicia" value="Enviar solicitud">
                </div>
                <div class="alert fade in" id="alert-franquicia" style="display: none;">
                    <a href="#" class="close" aria-label="cerrar">&times;</a>
                    <span class="alert-content"></span>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

<?php require("footer.php"); ?>
</body>
</html>