<?php
require "db_helper.php";
require "../librerias/Mobile_Detect.php";
$id_categoria=$_GET["id"];
$db=get_connection();
$stmt = $db->prepare('SELECT * FROM platillos where id_categoria=:id');
$stmt->execute(array(':id' => $id_categoria));
$results_platillos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt_titulo=$db->query('SELECT nombre FROM categorias_platillos WHERE id='.$id_categoria);
$titulo = $stmt_titulo->fetch(PDO::FETCH_ASSOC)["nombre"];
?>
<div class="col-xs-12">
    <h1 class="hidden-xs"><?php echo $titulo?></h1>
    <h3 class="hidden-sm hidden-md hidden-lg"><?php echo $titulo?></h3>
    <div class="well">
        <div id="carousel_thumbs" class="carousel slide" data-interval="false">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php
                $rows=$stmt->rowCount();
                $detect = new Mobile_Detect;
                $items_per_row=($detect->isMobile()?1:3);
                $span=floor(12/$items_per_row);
                $i=$items_per_row?>
                <script>elementos_por_slide=<?php echo $items_per_row ?>;</script>
                <?php for ($item_number=0;$item_number<$rows;):?>
                    <div class="item <?php if($item_number==0) echo "active";?>">
                        <div class="row">
                            <?php for($i=0;$i<$items_per_row&&$item_number<$rows;$i++,$item_number++):?>
                                <div id="carousel-selector-<?php echo $item_number?>" class="col-xs-<?php echo $span?> col-md-4">
                                    <a href="#" data-toggle="modal" data-target="#modal_galeria">
                                        <div class="caption">
                                            <p><?php echo $results_platillos[$item_number]['nombre']?></p>
                                        </div>
                                        <img src="<?php echo $results_platillos[$item_number]['ruta_imagen']?>"
                                             alt="<?php echo $results_platillos[$item_number]['descripcion']?>"
                                             class="img-responsive">
                                    </a>
                                </div>
                            <?php endfor?>
                        </div>
                        <!--/row-->
                    </div>
                <?php endfor?>
                <!--/item-->
            </div>
            <!--/carousel-inner-->
            <a class="left carousel-control" href="#carousel_thumbs" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel_thumbs" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/carousel_thumbs-->
    </div>
    <!--/well-->
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal_galeria" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1><?php echo $titulo?> </h1>
            </div>
            <div class="modal-body">
                <!-- Slider -->
                <div class="row">
                    <div >
                        <div id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div class="carousel slide" data-interval="false" id="carousel_big">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <?php for($i=0;$i<$rows;$i++):?>
                                            <div class="container item <?php if($i==0) echo 'active'?>"
                                                 data-slide-number=<?php echo $i?>>
                                                <div class="row">
                                                    <img class="img-responsive col-xs-3" src=<?php echo $results_platillos[$i]['ruta_imagen']?>>
                                                    <h3><?php echo $results_platillos[$i]['nombre']?></h3>
                                                    <p class="col-xs-3">
                                                        <?php echo $results_platillos[$i]['descripcion']?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#carousel_big" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel_big" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slider-->
                </div>
            </div>
        </div>
    </div>
</div>
