<?php
/**
 * Created by PhpStorm.
 * User: carlo
 * Date: 28/09/2016
 * Time: 07:28 AM
 */
echo '
   <div style="width: 100%; max-width: 100%; overflow-x: hidden">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="overflow-x: hidden">
            <div class="container-fluid" style="overflow-x: hidden">
                <div class="navbar-header" style="overflow-x: hidden">
                    <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar"  style="background-color: white"></span>
                        <span class="icon-bar"  style="background-color: white"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Chiles & Beer</a>
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
                   <ul class="nav navbar-nav navbar-right">
                      <li id="fla"><a href="#" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> &nbsp;LGBT</a></li>
                   </ul> 
                </div>
            </div>
        </nav>
        
        </div>
        <header style="overflow: hidden;">

        <div class="header-content">
            <div align="left">
                    <img class="swingimagesun pull-left" border="0" src="../img/sun2.png" width="30%" style="z-index: -2;" >

            </div>

        <video class="videobg" autoplay muted loop poster="../eh5v.files/html5video/ultbeach.jpg" id="bgvid" title="ultbeach" style=" overflow: hidden;
">
            <source src="../eh5v.files/html5video/ultbeach.m4v" type="video/mp4" />
            <source src="../eh5v.files/html5video/ultbeach.webm" type="video/webm" />
            <source src="../eh5v.files/html5video/ultbeach.ogv" type="video/ogg" />
            <source src="../eh5v.files/html5video/ultbeach.mp4" />
		</video> 
             <div class="header-content-inner">
                <div class="hidden-xs hidden-sm">
                        <img class="img-responsive swingimage2T" src="../img/logox.png" alt="" style="width: 30%; position:relative;">
                </div>
                <div class="hidden-md hidden-lg" align="center">
                    <img class="img-responsive fadein" src="../img/logox.png" alt="" style="width: 70%; position:relative;">
                    <br><br>
                </div>
                <h1 id="homeHeading" class="swingimage3T" style=" position:relative; padding-top: 5px">Algo diferente</h1>
                <p>El verdadero sabor del mar en tu mesa</p>
                <a href="#promo" class="btn btn-primary btn-xl page-scroll fadein hidden-sm hidden-xs" id="btnContinue">Presiona aquí para ver más</a>
                <a href="#promo" class="btn btn-primary btn-xl page-scroll fadein hidden-md hidden-lg" id="btnContinue">Presiona aquí para ver más</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <img class="img-responsive swingimageT hidden-xs hidden-sm" src="../img/te.png" alt="" style="width: 40%; position:relative;">
    </header>
    
';

?>