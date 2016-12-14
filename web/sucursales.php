<!DOCTYPE html>
<?php
require("db_helper.php");
$db=get_connection();
$stmnt=$db->query("SELECT * FROM sucursales");
$span=floor(12/$stmnt->rowCount());/**TODO Modificar span**/
?>
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
    <script >
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                draggable:true,
                zoomControl:true
            });
        }
        function muestraFuncionGeo(element, trigger) {
            var esChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
            if(esChrome){document.getElementById(element).style.display = 'none'};
            trigger.style.display = 'none';
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhfzDY4vjR01hGuGwsdbqlU9iHa-sA8pI&callback=initMap&libraries=geometry"
        async defer></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        #map {
            height: 30em;
        }
        .navbar-nav>li>a{
            color: #FFF;
        }
        .navbar-nav>li>a:hover{
            background-color: #ba2b19;
        }
        .navbar-nav>li>a:focus{
            background-color: #ba2b19;
        }
        body{
            background-image: url("../img/rt.jpg");
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
            background-position: center top;
            background-origin: padding-box;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        @media (min-width: 400px) {
            body {
                background-image: url("../img/rt.jpg");
            }
        }

        @media (min-width: 500px) {
            body {
                background-image: url("../img/rt.jpg");
            }
        }

        @media (min-width: 1000px) {
            body {
                background-image: url("../img/rt.jpg");
            }
        }
    </style>
</head>

<body onload="muestraFuncionGeo('chrome', this); return false;">
<div class="se-pre-con"></div>
    <?php require('headersecundario.php')?>
    <img src="../img/banner-suc.png" style="width: 100%; height: auto"></img>
<br><br>
    <div class="container">
        <div class="row">
            <?php foreach ($stmnt as $row):?>
                <div class="col-xs-4 col-md-<?php echo $span?> thumbnail">
                    <a class="muestra_sucursales" href="<?php echo "get_sucursal.php?id=".$row["id"]?>">
                        <img src="<?php echo $row["ruta_imagen"]?>" alt=<?php echo $row["nombre"]?> class="img-responsive">
                        <div align="center"><p><?php echo $row["nombre"]?></p></div>
                    </a>
                </div>
            <?php endforeach?>
        </div>
        <div class="row">
            <div class="col-xs-12 panel" id="despliega-sucursal" style="border: #f17e00 solid 1px">
                <div class="panel-heading">Lorem ipsum</div>
                <div class="panel-body"> Dolor et sit amet</div>
            </div>
            <div align="center" class="col-xs-12" id="chrome">
                <button class="btn btn-danger" id="muestra-mas-cercana">Ubica tu sucursal m&aacutes cercana</button>
                <br><br>
            </div>
        </div>
        <div id="map" class="map col-xs-12 "></div>
        <br><br>
    </div>
    <br><br>
    <?php require("footer.php"); ?>

</body style="background-image: url('../img/banner-suc.png');">
</html>