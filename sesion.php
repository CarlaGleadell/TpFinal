<?php

include 'conexion.php';

$usuario=$_GET['usuario'];
$contraseña=$_GET['clave'];

$verificar = mysqli_query($conexion,"SELECT Contraseña from usuarios where Usuario='$usuario'");
$tabla = mysqli_fetch_array($verificar);

if($tabla["0"] != null && $tabla["0"] == $contraseña){
    echo "Bienvenidx 😎 ";
}
else{
    echo "Clave incorrecta 😥";
}

?>