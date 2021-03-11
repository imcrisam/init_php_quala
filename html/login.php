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

    .h1 {
      color: white;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="../index.php"><img src="../img/logos/logoQuala-sinfondo3.png" alt="" srcset=""></a>
    <button class="navbar-toggler " style="background-color: #01539F; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="../index.php">Quienes Somos </a>
        </li>
        <li class="nav-item dropdown bg ">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="Alimentos.html">Alimentos</a>
            <a class="dropdown-item " href="Bebidas.html">Bebidas</a>
            <a class="dropdown-item" href="Postres.html">Postres</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Contactenos.html">Contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-outline-primary " href="login.php">Ingresar</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container " id='main'>
    <div class="d-flex justify-content-center">

      <div class="card bg-transparent border-0 ">
        <div class="card-header bg-transparent ">
          <img src="../img/logos/file.jpg" alt="" width="250px;" clase="">
        </div>
        <form method="POST" action="#">
          <div class="card-body border-0">

            <div class="form-group">

              <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-block btn-primary btnx" name="Iniciar" id="Iniciar" value="Iniciar" data-target="#iniciar" data-whatever="@fat">Iniciar</button>

          </div>
          <div class="card-footer row">

            <div class="col-12 ">
              <div class="row justify-content-between">
                <div class="col ">
                  
                  <a  href="RegistrarUsuario.php" class="btn btn-info " >Registrar<a>
                </div>
                <div class="col ">
                  <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#bd" data-whatever="@fat">BaseDatos</button>

                </div>
              </div>
            </div>

          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col ">
                <a href="../index.php" class=" btn btn-danger btn-block">Cerrar</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>




  </div>


  <div class="modal fade" id="bd" tabindex="-1" role="dialog" aria-labelledby="bd" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bd">Administrador de Base De Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="login.php">
          <div class="modal-body">

            <div class="form-group">

              <input type="text" class="form-control" id="usuabd" name="usuabd" placeholder="Usuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="Contrabd" name="Contrabd" placeholder="Contraseña">
            </div>

          </div>
          <div class="modal-footer">
            <a href="../php/crearbd.php" class="btn btn-sm btn-outline-dark ">Crear BaseDatos</a>
            <button type="submit" class="btn btn-block btn-primary" name="guardar" id="guardar" value="guardar">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </form>



      </div>
    </div>


  </div>
  





  </div>
  </div>
  <section class="row ">
    <div class=" col-1 redes ">
      <a href="https://www.facebook.com/QUALA-249025615565821/" target="_blank"><img src="../img/iconos/fb-icon.bn.png" alt="" id='ficon'></a><br>
      <a href="https://www.youtube.com/channel/UCDoN_PzNAZLv24FW5ZneiQA" target="_blank"><img src="../img/iconos/yt-icon-bn.png" alt="" id='yicon'></a><br>
      <a href="https://www.instagram.com/qualacolombia/" target="_blank"><img src="../img/iconos/instagram-icon-bn.png" alt="" id='iicon'></a><br>
      <a href="https://www.linkedin.com/company/quala-s-a-?trk=tyah&trkInfo=tarId%3A1415646509356%2Ctas%3AQuala%2Cidx%3A2-1-6" target="_blank"><img src="../img/iconos/in-icon.bn.png" alt="" id='incon'></a><br>
    </div>
  </section>

  <?php
  if ($_POST) {
    if (isset($_POST['Iniciar'])){
include "../php/usuarioBaseDatos.php";
      $bd = new usuarioBaseDatos();
      $usuario= $bd->usuario();
      $contraseña= $bd->contraseña();
      
      $conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
        die("Problemas con la conexión");
        $registros = mysqli_query( $conexion, "SELECT contrausu from usuarios WHERE usuario='".$_POST['Usuario']."'"   )
        or die("Problemas en el select" . mysqli_error($conexion));
      
        if ($reg = mysqli_fetch_array($registros)){
          if($reg['contrausu']==$_POST['Contraseña'] ){
            echo "<div class='alert alert-success' role='alert'>
            Correcto
          </div>";
           echo ' <meta http-equiv="refresh" content="0; url=crud.php">';
          

          }else{
            echo "<div class='alert alert-danger' role='alert'>
                                Contraseña Incorrecta
                              </div>";
          }

        }else{
          echo "<div class='alert alert-danger' role='alert'>
                                Usuario No existe
                              </div>";
        }
        mysqli_close($conexion);
    }



    if (isset($_POST['guardar'])) {
      $usu = fopen("../bd/usuario.txt", "w") or
      die("Problemas en la creacion");
    $contra = fopen("../bd/contra.txt", "w") or
      die("Problemas en la creacion");
      $usuario = $_POST['usuabd'];
      $contraseña = $_POST['Contrabd'];
      fputs($usu, $usuario);
      fclose($usu);

      fputs($contra, $contraseña);
      fclose($contra);
    }
  }

  ?>
  <footer class="row Sticky-bottom">
    <div class="col">
      <span>Copyright© 2019 - Página creada por AC|DC - Todos los derechos reservados</span>
    </div>

  </footer>



  <script src="../js/jquery-3.4.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>