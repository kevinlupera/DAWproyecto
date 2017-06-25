<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-USUARIOS</title>
        <link rel="stylesheet" href="estilos/estilos3.css"/> 
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <form method="post" action="" onsubmit="">
            <input id="mysearch" name="searchitem" type="search" placeholder="Cédula o RUC.." maxlength="10" 
                   onkeypress="validaSoloNumeros()" required/>
            <input type="submit" value="Buscar" name="botonBuscar" style="width: 10%;">
        </form>
        <div class="contenedor">
            
            
            <div class="contenedorUsuario">
            <div class="usuario" id="usuario1">
                <a href="#" class="fotoUsuario"><img src="imagenes/user-image.png" alt="User" style="height:100px;"></a>
                <div class="infoUsuario">
                    <span id="nombreUsuario1">Juan Sanchez</span><br/>
                    <span id="nombreUsuario1">0931551555</span>
                </div>
                <div class="opciones">
                    <a href="#" onclick=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <a href="#" onclick=""><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Compras</a>
                    <a href="#" onclick=""><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Bloquear</a>
                    <a href="#" onclick=""><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                </div>
            </div>
            <div class="usuario" id="usuario2">
                <a href="#" class="fotoUsuario"><img src="imagenes/user-image.png" alt="User" style="height:100px;"></a>
                <div class="infoUsuario">
                    <span id="nombreUsuario2">Juan2 Sanchez</span><br/>
                    <span id="nombreUsuario2">0931551555</span>
                </div>
                <div class="opciones">
                    <a href="#" onclick=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <a href="#" onclick=""><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Compras</a>
                    <a href="#" onclick=""><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Bloquear</a>
                    <a href="#" onclick=""><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                </div>
            </div>
            <div class="usuario" id="usuario3">
                <a href="#" class="fotoUsuario"><img src="imagenes/user-image.png" alt="User" style="height:100px;"></a>
                <div class="infoUsuario">
                    <span id="nombreUsuario3">Juan3 Sanchez</span><br/>
                    <span id="nombreUsuario3">0931551555</span>
                </div>
                <div class="opciones">
                    <a href="#" onclick=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <a href="#" onclick=""><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Compras</a>
                    <a href="#" onclick=""><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Bloquear</a>
                    <a href="#" onclick=""><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                </div>
            </div>
            <div class="usuario" id="usuario4">
                <a href="#" class="fotoUsuario"><img src="imagenes/user-image.png" alt="User" style="height:100px;"></a>
                <div class="infoUsuario">
                    <span id="nombreUsuario4">Juan4 Sanchez</span><br/>
                    <span id="nombreUsuario4">0931551555</span>
                </div>
                <div class="opciones">
                    <a href="#" onclick=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <a href="#" onclick=""><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Compras</a>
                    <a href="#" onclick=""><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Bloquear</a>
                    <a href="#" onclick=""><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                </div>
            </div>
            <div class="usuario" id="usuario5">
                <a href="#" class="fotoUsuario"><img src="imagenes/user-image.png" alt="User" style="height:100px;"></a>
                <div class="infoUsuario">
                    <span id="nombreUsuario5">Juan5 Sanchez</span><br/>
                    <span id="nombreUsuario15">0931551555</span>
                </div>
                <div class="opciones">
                    <a href="#" onclick=""><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <a href="#" onclick=""><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Compras</a>
                    <a href="#" onclick=""><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Bloquear</a>
                    <a href="#" onclick=""><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                </div>
            </div>
            </div>
        </div>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>