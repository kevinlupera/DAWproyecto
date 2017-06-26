<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-FACTURACION</title>
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <div id="facturacion" class="contenedor-fact">
            <section id='contenedor'>
            <section class="uno">
                <div class="principal">
                    <h2><i>"Consigue los mejores productos al menor costo"</i></h2>
                    <img src="" alt=""/>
                </div>
            </section>
            <section class="dos">
                <div class="secundaria">
                    <p></p>
                    <img src="" alt=""/>
                </div>
            </section>
            </section>
            <aside id="barraLateral">
                <h3>Datos de la Factura</h3>
                <form method="post" action="" onsubmit="">
                    <label for="idCliente"><h5>Cedula o RUC:</h5></label>
                    <input type="text" name="idCliente" id="campo_idCliente" onkeypress="validaSoloNumeros()" maxlength="10"
                           placeholder="Cliente" required/><br/>
                    <label for="nombre"><h5>Nombre del Cliente:</h5></label>
                    <input type="text" name="nombre" id="campo_nombreCliente" onkeypress="validaSoloLetras()"
                           placeholder="Nombre" required><br/>
                    <label for="direccion"><h5>Direccion:</h5></label>
                    <input type="text" name="direccion" id="campo_dirCliente" onkeypress="validaLetrasNumeros()"
                           placeholder="Av. a y calle b maz. 122 villa 000" required><br/>
                    <label for="telefono"><h5>Telefono:</h5></label>
                    <input type="text" name="telefono" id="campo_telCliente" onkeypress="validaSoloNumeros()" maxlength="10"
                           placeholder="0987654321" required><br/>
                    <input type="submit" value="Registrar" name="botonRegistrar">
                    <input type="reset" value="Limpiar">
                </form>
            </aside>
        </div>
        <?php
            $usuarioObjeto=$_SESSION['usuario'];//ALMACENADO 
            if(strcmp($usuarioObjeto->getUsu_usuario(),"admin")==0){
                echo "
                    <script type='text/javascript\'>
                    var nodoDiv = document.getElementById('facturacion'); 
                    nodoDiv.style.visibility=hidden;
                    if ( nodoDiv.hasChildNodes())
                    {
                        while (nodoDiv.childNodes.length >= 1 )
                        {
                        nodoDiv.removeChild( cell.firstChild );
                        }
                    }
                    </script>
                ";
            }
            else {echo"<h1>USUARIO SIN PRIVILEGIO</h1>";}
        ?>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>
