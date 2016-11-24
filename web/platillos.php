<?php
require "db_helper.php";
$db=get_connection()?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/sucursales.js"></script>
    <script src="../js/galeria.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/galeria.css">
    <style type="text/css">
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
            background-image: url("../img/banner-menu2.png");
            -webkit-background-size: 100% auto;
            background-size: 100% auto;
            background-position: center top;
            background-origin: padding-box;
            background-repeat: no-repeat;
        }
        @media (min-width: 400px) {
            body {
                background-image: url("../img/banner-menu2.png");
            }
        }

        @media (min-width: 500px) {
            body {
                background-image: url("../img/banner-menu2.png");
            }
        }

        @media (min-width: 1000px) {
            body {
                background-image: url("../img/banner-menu.png");
            }
        }
    </style>
</head>
<body>

<?php require('headersecundario.php')?>
<div class="hidden-xs hidden-sm hidden-md">
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div class="hidden-xs hidden-sm hidden-lg">
    <br><br><br><br><br><br><br><br><br><br><br>
</div>
<div class="hidden-xs hidden-md hidden-lg">
    <br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div class="hidden-sm hidden-md hidden-lg">
    <br><br><br><br>
</div>
<?php
$stmt = $db->prepare('SELECT * FROM categorias_platillos');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="row">
        <?php $span=floor(12/$stmt->rowCount());
        foreach($results as $row): ?>
            <div class="col-xs-4 col-md-<?php echo $span?> container">
                <a href="muestra_platillos.php?id=<?php echo $row["id"]?>" class="muestra_galeria thumbnail">
                    <div class="row">
                        <img src="<?php echo $row["ruta_imagen"]?>" alt="<?php echo $row["nombre"]?>"
                             class="img-responsive col-md-6">
                        <div class="col-md-6">
                            <h4><?php echo $row["nombre"]?></h4>
                            <p>
                                <?php echo $row["descripcion"]?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div id="muestra_platillos" ></div>
</div>

<?php $stmt = $db->prepare('SELECT * FROM otras_categorias');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$span=floor(12/$stmt->rowCount());
?>

<div class="container">                     <!--TODO separar en filas (puede ser muchas categorias)-->
    <h2 class="hidden-xs">Tambi&eacuten tenemos</h2>
    <h3 class="hidden-sm hidden-md hidden-lg">Tambi&eacuten tenemos</h3>
    <div class="row">
        <?php foreach($results as $row): ?>
        <div class="thumbnail col-xs-4 col-md-<?php echo $span?>">
            <img src=<?php echo $row["ruta_imagen"];?>>
            <p><?php echo $row["descripcion"]?></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php require("footer.php"); ?>

</body>
</html>