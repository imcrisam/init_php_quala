<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Quala</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/general.css">



  <link rel="shortcut icon" href="../img/iconos/quala.ico" type="image/x-icon">
  <style>
    @media screen and (max-width:576px) {
      .container {
        width: 100%;
      }
    }

    .btn {
      margin-top: 5px;

    }
    #main 
        {
            min-height: 80vh;
        }
  </style>
</head>

<body>
  <?php
  $id = $_GET['id'];
  include "../php/usuarioBaseDatos.php";
      $bd = new usuarioBaseDatos();
      $usuario= $bd->usuario();
      $contraseña= $bd->contraseña();
      
      $conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
        die("Problemas con la conexión");


  $registros = mysqli_query($conexion, "SELECT* FROM clientes WHERE ID = " . $id)
    or die("Problemas en el select" . mysqli_error($conexion));

  $reg = mysqli_fetch_array($registros);
  ?>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand logo" href="../index.html"><img src="../img/logos/logoQuala-sinfondo3.png" alt="" srcset=""></a>

    <button class="navbar-toggler " style="background-color: #01539F; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item active">
        <a class="nav-link  btn btn-danger" href="../index.html">Desconectarse</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container" id='main'>
    <header class="row pt-xs-2 pt justify-content-center">
      
    </header>
    <section class="row ">


    </section>

    <section class="contenedor-main row justify-content-around conte">
      <div class="card col-12 border-0 bg-light">
        <div class="card-header bg-info">
        <h3>Registro Numero <?php echo $id ?></h3>
        </div>
        <div class="card-body">
        <form action="../php/Actualizar.php?id=<?php echo $id ?>" method="POST">
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="NIT">NIT</label>
              <input type="number" class="form-control" id="NIT" name="NIT" placeholder="NIT" value="<?php echo $reg['NIT'] ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="Nombre">Nombre</label>
              <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $reg['Nombre'] ?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $reg['Email'] ?>">
            </div>
            <div class="form-group col-md-4">
              <label for="Telefono">Telefono</label>
              <input type="number" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" value="<?php echo $reg['Telefono'] ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="Direccion">Direccion</label>
              <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" value="<?php echo $reg['Direccion'] ?>">
            </div>

          </div>

          <button type="submit" class="btn btn-outline-primary col-xl-3 col-md-5 col-12">Actualizar</button>
          <a href="###" class="btn btn-outline-warning col-xl-2 col-md-3 col-4" data-toggle="modal" data-target="#borrar">Borrar Registro</a>
          <div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="borrarLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="borrarLabel">¿Estas Seguro?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  El registro se borrara de la base de datos y no se podra recuperar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  <a href="../php/Eliminar.php?id=<?php echo $id ?>" type="button" class="btn btn-primary">Si</a>
                </div>
              </div>
            </div>
          </div>
          <a href="crud.php" class="btn btn btn-outline-danger float-right col-xl-1 col-md-2 col-7">Cancelar</a>




        </form>
        </div>
        
      </div>






    </section>


  </div>
  <section class="row ">
    <div class=" col-1 redes ">
      <a href="#" target="_blank"><img src="../img/iconos/fb-icon.bn.png" alt="" id='ficon'></a><br>
      <a href="#" target="_blank"><img src="../img/iconos/yt-icon-bn.png" alt="" id='yicon'></a><br>
      <a href="#" target="_blank"><img src="../img/iconos/instagram-icon-bn.png" alt="" id='iicon'></a><br>
      <a href="#" target="_blank"><img src="../img/iconos/in-icon.bn.png" alt="" id='incon'></a><br>

    </div>
  </section>


  <footer class="row Sticky-bottom">
    <div class="col">
      <span>Copyright© 2019 - Página creada por AC|DC - Todos los derechos reservados</span>
    </div>

  </footer>



  <script src="../js/jquery-3.4.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>



</html>