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
    #main 
        {
            min-height: 80vh;
        }
  </style>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand logo" href="../index.php"><img src="../img/logos/logoQuala-sinfondo3.png" alt="" srcset=""></a>

    <button class="navbar-toggler " style="background-color: #01539F; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item active">
          <a class="nav-link  btn btn-danger" href="../index.php">Desconectarse</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container " id='main'>
    <header class="row pt-xs-2 pt justify-content-center">
      <div class="col h1">
        <center>
          <h1></h1>
        </center>
      </div>
    </header>
    <section class="row ">


    </section>

    <section class="contenedor-main row justify-content-around conte">

      <div class="card col-12 border-0 bg-transparent">
        <div class="card-header badge-info">
          Gestor de Clientes
        </div>
        <div class="card-header bg-light">
          <div class="row">
            <div class="col-lg-10 col-sm-12">
              <form action="Crud.php" method="POST">
                <div class="row">
                  <div class="col-lg-4 col-sm-6 mt-1">
                    <input type="text" class="form-control float-left" id="Buscar" name="Buscar" placeholder="Buscar...">
                  </div>
                  <div class="col-lg-2 col-sm-6 mt-1">
                    <select id="Tipo" name="Tipo" class="form-control">
                      <option value="ID">ID
                      </option>
                      <option value="NIT">NIT
                      </option>
                      <option value="Nombre">Nombre
                      </option>


                    </select>
                  </div>
                  <div class="col-lg-2 col-sm-6 mt-1">
                    <button type="submit" class="btn btn-outline-primary float-left btn-block" name="btnBuscar" id="btnBuscar" value="Buscar">Buscar</button>

                  </div>
                  <div class="col-lg-2 col-sm-6 mt-1">
                    <button type="submit" class="btn btn-outline-secondary float-left" name="btnListar" id="btnListar" value="Listar">Listar</button>
                  </div>

                </div>
              </form>
            </div>
            <div class="col-lg-2 float-right mt-1">

              <a href="registrar.html" class="btn btn-sm btn-outline-success  float-right">Nuevo Registro</a>




            </div>
          </div>





          </form>
        </div>
        <div class="card-body">
          <table class="table table-responsive-lg table-hover bg-light">

            <?php
            function publicar($registros, $bg )
            {
              echo "
              <thead class=".$bg.">

                <th>ID</th>
                <th>NIT</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Fecha Registro</th>
                <th></th>
              </thead>
              ";

              while ($reg = mysqli_fetch_array($registros)) {

                echo "<tr>";
                echo "<td>" . $reg['ID'] . "</td>";
                echo "<td>" . $reg['NIT'] . "</td>";
                echo "<td>" . $reg['Nombre'] . "</td>";
                echo "<td>" . $reg['Telefono'] . "</td>";
                echo "<td>" . $reg['Email'] . "</td>";
                echo "<td>" . $reg['Direccion'] . "</td>";
                echo "<td>" . $reg['Fecha_Registro'] . "</td>";
                echo "<td><a href='edit.php?id=" . $reg['ID'] . "' class='btn btn-sm btn-block btn-outline-info float-right '>Editar</a></td>";
                echo "</tr>";
              }
            }
            if ($_POST) {
              include "../php/usuarioBaseDatos.php";
              $bd = new usuarioBaseDatos();
              $usuario = $bd->usuario();
              $contraseña = $bd->contraseña();
              $tipo = $_POST['Tipo'];
              if ($tipo == "ID" or $tipo == "NIT") {
                $consulta = (int) $_POST['Buscar'];
                
              } else {
                $consulta = $_POST['Buscar'];
              }
              
              
              $conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
              die("Problemas con la conexión");
              

              if (isset($_POST['btnBuscar'])) {
                $bg="badge-primary";
                $registros = mysqli_query($conexion, "SELECT* FROM clientes WHERE " . $tipo . "= " . $consulta)
                  or die("Problemas en el select" . mysqli_error($conexion));
                if ($consulta == "") {
                  echo '<div class="alert alert-warning" role="alert">Digite Su Busqueda</div>';
                } else {
                  if (mysqli_num_rows($registros) == 0) {
                    echo '<div class="alert alert-danger" role="alert">Registro No Existe </div>';
                  } else {
                    echo'<span class="badge  badge-pill badge-primary">Numero De Registros Listados: '.mysqli_num_rows($registros) .'</span>';
                    publicar($registros, $bg);
                    mysqli_close($conexion);
                  }
                }
              }
              if (isset($_POST['btnListar'])) {
                $bg="badge-dark";
                $registros = mysqli_query($conexion, "SELECT* FROM clientes")
                  or die("Problemas en el select" . mysqli_error($conexion));
                if (mysqli_num_rows($registros) == 0) {
                  echo '<div class="alert alert-danger" role="alert">No Existen Ningun Registro</div>';
                } else {
                  echo'<span class="badge  badge-pill badge-secondary">Numero De Registros Listados: '.mysqli_num_rows($registros) .'</span>';
               
                  publicar($registros, $bg);
                  mysqli_close($conexion);
                }
              }
            }
            ?>



          </table>
        </div>
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


  <footer class="row  Sticky-bottom">
    <div class="col">
      <span>Copyright© 2019 - Página creada por AC|DC - Todos los derechos reservados</span>
    </div>

  </footer>



  <script src="../js/jquery-3.4.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>