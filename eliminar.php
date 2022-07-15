<?php

include 'conexion.php';


$id = $_GET['id'];

$querydelete = "DELETE FROM usuarios WHERE id=$id";


$resultadoDelete = mysqli_query($conexion,$querydelete);



if($resultadoDelete){
    echo "Se elimino exitosamente";
}else{
    echo "No se pudo eliminar";
}



?>