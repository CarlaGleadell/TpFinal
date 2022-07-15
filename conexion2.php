

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="text-align: center; margin-left: 5%; margin-right: 5%;">
<headers>
<!--inicio del nav-->
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgba(60,68,71,255)">
            <div class="container-fluid">
            <img src="img/codoacodo.png" alt="" width="90" height="50" class="d-inline-block align-text-top">
              <a class="navbar-brand" href="#">Conf Bs As</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="index.html">La conferencia</a>
                  <a class="nav-link" href="#">Los oradores</a>
                  <a class="nav-link" href="#">El lugar y la fecha</a>
                  <a class="nav-link disable">Conviértete en orador</a>
                  <a class="nav-link" style="color:rgba(25,135,84,255);" href="indexTicket.html">Comprar tickets</a>
                  <a class="nav-link" style="color:rgba(25,135,84,255);" href="iniciosesion.html">Iniciar Sesion</a>
                  <a class="nav-link" style="color:rgb(221, 39, 39)" href="admin.php">Administrador</a>
                </div>
              </div>
            </div>
          </nav>
<!--fin del nav-->
    </header>  

    <?php
include 'conexion.php';



$usuario = $_GET['usuario'];
$password = $_GET['clave'];

if($usuario=="admin" && $password=="1234"){

  echo "Bienvenido Admin🙂";



?>
<main style="text-align: center; margin-left: 5%; margin-right: 5%;">    
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Usuario</th>
        <th scope="col">Categoría</th>
    </tr>
    </thead>
    <tbody>
        <?php while( $tabla = mysqli_fetch_array($consultas)) { ?> 
        <tr  >
            <th scope="row"> <?php echo $tabla['id']; ?> </th>   
            <th scope="row"> <?php echo $tabla['Nombre']; ?> </th> 
            <th scope="row"> <?php echo $tabla['Apellido']; ?> </th> 
            <th scope="row"> <?php echo $tabla['Correo']; ?> </th> 
            <th scope="row"> <?php echo $tabla['Contraseña']; ?> </th>
            <th scope="row"> <?php echo $tabla['Usuario']; ?> </th>
            <th scope="row"> <?php echo $tabla['Categoria']; ?> </th> 
        </tr>
        <?php } ?>
    </tbody>
    </table>

        <form action="eliminar.php" method="GET" style="margin-left: 40%; margin-right: 40%;">
            <div class="mb-3">
                <label for="Si desea eliminar un dato ingrese el id correspondiente:"></label>
                <input type="text" name="id" placeholder="id" class="form-control" id="id" aria-describedby="First name">
                </div>
            <br>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="submit" class="btn btn-primary" style="background-color:#97c93e; border-color: #97c93e;">Eliminar</button>
                </div>
            </div>
          </form>

          <form action="actualizar.php" method="GET" style="margin-left: 40%; margin-right: 40%;">
            <div class="mb-3">
                <label for="Si desea editar un dato ingrese el id correspondiente:"></label>
                <input type="text" name="id" placeholder="id del usuario que desea editar" class="form-control" id="id" aria-describedby="First name">
            </div>
            <div class="mb-3">
                <input  type="text" class="form-control" id="nombre" name="nombre" placeholder="Nuevo nombre" aria-label="First name">
            </div>
            <div class="mb-3">
                <input  type="text" class="form-control" id="apellido" name="apellido" placeholder="Nuevo apellido" aria-label="Last name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Nuevo correo"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Nueva contraseña"  >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nuevo nombre de Usuario" aria-label="User name">
            </div>
            <select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
                <option name="categoria" value="Ninguna">Ninguna</option>
                <option name="categoria" value="Estudiante">Estudiante</option>
                <option name="categoria" value="Trainee">Trainee</option>
                <option name="categoria" value="Junior">Junior</option>
            </select>
            <br>  
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" style="background-color:#97c93e; border-color: #97c93e;">Editar</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>

<?php
}else{
    echo "Usuario o contraseña incorrecta☹️";
}
?>