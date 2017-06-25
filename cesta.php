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
        <div class="contenedor">
            <section id="contenedorCesta">
                <div id="infoProducto">
                    <h3 id="descripcion">Descripcion</h3>
                    <h3 id="cantidad">Cantidad</h3>
                    <h3 id="precio">Precio</h3>
                </div>
                <div class="productoCesta" id="producto1">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(1)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto2">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(2)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto3">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(3)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto4">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(4)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
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
