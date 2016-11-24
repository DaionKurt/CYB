<?php
/**
 * Created by PhpStorm.
 * User: carlo
 * Date: 28/09/2016
 * Time: 03:49 PM
 */

echo '
    <nav class="navbar navbar-test navbar-fixed-top" id="menu" style="z-index: 10; -webkit-border-radius: ;-moz-border-radius: ;border-radius: 0;">
        <div class="container-fluid">
            <div class="navbar-header" style="padding-left: 1em">
                <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar"  style="background-color: white"></span>
                    <span class="icon-bar"  style="background-color: white"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white">
                    <img class="img-responsive pull-left hidden-md hidden-lg" src="../img/logox.png" alt="" width="25px" style="padding:0;margin:0;border:0;float: left">&nbsp;&nbsp;Chiles & Beer</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="sucursales.php"><span class="glyphicon glyphicon-flag"></span> &nbsp;Sucursales</a></li>
                    <li><a href="platillos.php"><span class="glyphicon glyphicon-cutlery"></span> &nbsp;Menú</a></li>
                    <li><a href="servicios.php"><span class="glyphicon glyphicon-gift"></span> &nbsp;Servicios</a></li>
                    <li><a href="franquicias.php"><span class="glyphicon glyphicon-briefcase"></span> &nbsp;Franquicias</a></li>
                    <li><a href="acerca.php"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;Acerca de</a></li>
                    <li><a href="contacto.php"><span class="glyphicon glyphicon-envelope"></span> &nbsp;   Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
';
?>