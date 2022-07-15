<?php

$conexion = mysqli_connect("localhost", "root", "", "bdconfbsas");

if(mysqli_connect_errno()){ 
    echo "Error en la conexión con la BD";
}
else{
    echo "Conexión exitosa con la BD";
    echo "<br>";
}

$consultas = mysqli_query( $conexion, "select * from usuarios");
?>