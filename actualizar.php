<?php

include 'conexion.php';

$id=$_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$contraseña=$_GET['clave'];
$usuario=$_GET['usuario'];
$categoria=$_GET['categoria'];

$verificar = mysqli_query($conexion,"SELECT * from usuarios where id='$id'");

$queryUpdate = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Correo='$correo', Contraseña='$contraseña', Usuario='$usuario', Categoria='$categoria' WHERE id=$id";

$resultadoUpdate = mysqli_query($conexion,$queryUpdate);

if($resultadoUpdate){
    echo "Se actualizaron los datos exitosamente";
}
else{
    echo "No se pudieron actualizar los datos";
}

?>