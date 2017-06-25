<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-CESTA</title>
        <!--<style>
           
        </style>-->
        <link rel="stylesheet" href="estilos/estilos2.css"/> 
    </head>
    <body>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?> 
        <?php include("modelo/funciones.php");
            $usuario=$_SESSION['usuario'];
            $usuario_id=$usuario->getUsu_id();
            $arreglo_ordenes= obtener_ordenes($usuario_id);
            
            
        ?>
        <div class="contenedor">
            <section id="contenedorCesta">
                <div id="infoProducto">
                    <h3 id="descripcion">Descripcion</h3>
                    <h3 id="cantidad">Cantidad</h3>
                    <h3 id="precio">Precio</h3>
                </div>
            <?php
               
                for ($x=0;$x<count($arreglo_ordenes); $x++){
                    echo "<div class='productoCesta' id='producto".($x+1)."'>";
                        echo "<div class='productoImg'>";
                            echo "<a href='#'><img src='imagenes/arduinoR1.jpg' alt='Arduino uno' style='height:140px;'></a>";
                            echo "<a href='#' class='productoLink'>Arduino uno R3</a>";
                        echo "</div>";
                        echo "<div class='productoCantidad'>";
                            echo "<form action='' class='formCantidad'>";
                                echo "<span class='valor'>".$arreglo_ordenes[$x]->getCantidad()."</span>";
                                echo "<span class='unidad'> Pieza<span/>";
                            echo "</form>";
                        echo "</div>";
                        echo "<div class='productoPrecio'>";
                            echo "<span class='valor'>".$arreglo_ordenes[$x]->getPrecio()."<span/>";
                            echo "<span class='separador'>/<span/>";
                            echo "<span class='unidad'>Pieza<span/>";
                        echo "</div>";
                            echo "<div class='btQuitar'>";
                                echo "<a href='#' onclick='quitarProducto(".($x+1).")'><i class='fa fa-times' aria-hidden='true'></i>&nbsp;Quitar</a>";
                            echo "</div>";
                    echo "</div>"; 
                }           
            ?>
                <div id="totalProductos">
                    <h3 id="etiquetatotal">Total</h3>
                    <span id="cantidadProductosTotal">xxx</span>
                    <span id="montoTotal">US $xxx.xx</span>
                </div>
            </section>     
        </div>
        <?php include("codigos/footer.php")?> 
        
    </body>
</html>
