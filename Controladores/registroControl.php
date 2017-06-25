<?php

/* 
INSERT INTO `tienda`.`persona` (`persona_id`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `genero`, `email`) 
  VALUES ('2', 'Kevin Alexander', 'Lupera Bravo', '0951726777', '1997-02-26', 'masculino', 'kevin.luperab@ug.edu.ec');

  INSERT INTO `tienda`.`usuario` (`usuario_id`, `usuario`, `clave`, `persona_id`) VALUES ('3', 'KevinL777', 'abcde', '2');

 *  */

if (isset($_POST['botonRegistrar'])) {
    //Leer parametros
    $usuario=  filter_input(INPUT_POST, "cedulaBuscada");
if(!empty($usuario)){
        //validar con Base de datos
        $usuarioObjeto=buscarUsuario($usuario);
        if(isset($usuarioObjeto)&&!empty($usuarioObjeto)){
            //TRABAJO CON SESIONES
            $_SESSION['usuarioBuscado']=$usuarioObjeto;
            header("Location:datosUsuario.php");
            exit;
        }else{
            echo '<h2>Usuario no encontrado</h2>'; 
            $_SESSION["usuarioBuscado"] = "";
        header("Location:datosUsuario.php");
            exit;
        }
    }else {
        //echo '<h2>Usuario no encontrado</h2>';  
        $_SESSION["usuarioBuscado"] = "";
        header("Location:datosUsuario.php");
        exit;
    }
} 
function buscarUsuario($user) {
    //Permite incluir un archivo dentro de otro
    include("modelo/conexion.php");
    $sentencia = "SELECT usuario_id,usuario,cedula,nombre,apellido,genero,email,fecha_nacimiento "
            . "FROM usuario,persona where usuario_id=persona.persona_id and cedula=".$user;
    // Ejecuta la sentencia SQL 
    $resultado = mysqli_query($link, $sentencia);
    //echo $sentencia;
    if (!$resultado) {
        die("Error: no se pudo realizar la consulta");
    }

    $fila = mysqli_fetch_assoc($resultado);
    //validacion
    if(!isset($fila)){
        // Liberar resultados
        mysqli_free_result($resultado);
        // Cerrar la conexión
        mysqli_close($link);
        return;
    }
    //creacion de un objeto
    $usuario = new Usuario($fila['usuario_id'], 
            $fila['usuario'], 
            $fila['nombre'], 
            $fila['apellido'],
            $fila['cedula'],
            $fila['fecha_nacimiento'], 
            $fila['email'],
            $fila['genero']);

    // Liberar resultados
    mysqli_free_result($resultado);
    // Cerrar la conexión
    mysqli_close($link);

    return $usuario;
}
