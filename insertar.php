<?php
include 'conexion.php';

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$contraseña=$_GET['clave'];
$usuario=$_GET['usuario'];
$categoria=$_GET['categoria'];


$sqlinsert = "INSERT INTO usuarios (id, Nombre, Apellido, Correo, Contraseña, Usuario, Categoria) 
VALUES (NULL,'$nombre','$apellido','$correo','$contraseña','$usuario','$categoria')";

$insert = mysqli_query($conexion, $sqlinsert );

if($insert){
    echo "Registrado correctamente 👌";
}
else{
    echo "Ocurrió un error 😒";
}

?>