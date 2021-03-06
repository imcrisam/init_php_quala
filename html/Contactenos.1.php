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
          <a class="nav-link active" href="validar_contacto.php">Contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary" href="login.php">Ingresar</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container" id='main'>

    <section class="row ">


    </section>


    <div class="card col-12 cartas  bg-transparent border-0">
      <div class="card-header rounded-pill">
        <header class="row pt-xs-2 pt justify-content-center ">
          <div class="col h1">
            <center>
              <h1>Contactanos</h1>
            </center>
          </div>
        </header>
      </div>
      <div class="card-body ">
        <section class="contenedor-main row justify-content-around conte">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-row">

              <div class="form-group col-md-6 badge-dark rounded-pill">
                <label for="Nombres">Nombres</label>
                <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres">
              </div>
              <div class="form-group col-md-6 badge-dark rounded-pill">
                <label for="Apellidos">Apellidos</label>
                <input type="text" class="form-control" name="Apellidos" id="Apellidos" placeholder="Apellidos">
              </div>
            </div>

            <div class="form-row ">
              <div class="form-group col-md-8 badge-dark rounded-pill">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="example@gmail.com">
              </div>
              <div class="form-group col-md-4 badge-dark rounded-pill">
                <label for="Pais">Tipo De Solicitud</label>
                <select id="tipo" name="tipo" class="form-control">
                  <option selected>Seleccione...</option>
                  <option>Queja
                  </option>
                  <option>Reclamo
                  </option>
                  <option>Solicitud
                  </option>
                  <option>Sugerencia
                  </option>

                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 badge-dark rounded-pill">
                <label for="Pais">Pais</label>
                <select id="Pais" name="Pais" class="form-control">
                  <option selected>Seleccione su pais</option>
                  <option>Brasil</option>
                  <option>Colombia</option>
                  <option>Ecuador</option>
                  <option>Guatemala</option>
                  <option>Mexico</option>
                  <option>Peru</option>
                  <option>Rep. Dominicana</option>
                  <option>Venezuela</option>
                </select>
              </div>
              <div class="form-group col-md-4 badge-dark rounded-pill">
                <label for="Departamento">Departamento</label>
                <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Departamento">
              </div>

              <div class="form-group col-md-4 badge-dark rounded-pill">
                <label for="Ciudad">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 badge-dark rounded-pill">
                <label for="Mensaje">Mensaje</label>
                <textarea class="form-control" id="Mensaje" name="Mensaje" rows="6"></textarea>
              </div>

            </div>

            <div class="form-group">
              <div class="form-check badge-dark rounded">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  <a target="_blank" href="http://www.quala.com.co/wp-content/uploads/2013/12/Quala_Politica_Privacidad.pdf"> He le??do y acepto la Pol??tica Legal de QUALA S.A. y la Pol??tica de Privacidad, Tratamiento y Protecci??n de
                    Datos Personales de QUALA S.A.</a>

                </label>
              </div>
            </div>
            <?php if (!empty($errores)) : ?>
            <div class="alert alert-danger">
              <?php echo $errores; ?>
            </div>
          <?php elseif ($enviado) : ?>
            <div class="alert alert-success">
              Tu mensaje ha sido enviado correctamente.


            </div>
          <?php endif ?>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
          </form>

          



        </section>
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


  <footer class="row Sticky-bottom">
    <div class="col">
      <span>Copyright?? 2019 - P??gina creada por AC|DC - Todos los derechos reservados</span>
    </div>

  </footer>



  <script src="../js/jquery-3.4.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>