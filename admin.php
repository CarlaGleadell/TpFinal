<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body >

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
<main style="text-align: center; margin-left: 30%; margin-right: 30%;">
<h1>Ingreso a la base de datos</h1>
        <form action="conexion2.php" method="GET">
                <div class="mb-3">
                  <input type="text" name="usuario" placeholder="usuario (admin)" class="form-control" id="exampleInputEmail1" aria-describedby="First name">
                </div>
                <div class="mb-3">
                  <input type="password" name="clave" placeholder="clave (1234)" class="form-control" id="exampleInputPassword1">
                </div>
            <br>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="submit" class="btn btn-primary" style="background-color:#97c93e; border-color: #97c93e;">Ingresar</button>
                </div>
            </div>
          </form>
</main>


</body>
</html>