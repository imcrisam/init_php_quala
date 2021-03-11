<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Quala</title>
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/general.css">



  <link rel="shortcut icon" href="img/iconos/quala.ico" type="image/x-icon">
  <style>
    @media screen and (max-width:576px) {
      .container {
        width: 100%;
      }
    }
    
  </style>
</head>

<body>
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand logo" href="index.php"><img src="img/logos/logoQuala-sinfondo3.png" alt="" srcset=""></a>

    <button class="navbar-toggler " style="background-color: #01539F; " type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Quienes Somos </a>
        </li>
        <li class="nav-item dropdown bg ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="html/Alimentos.html">Alimentos</a>
            <a class="dropdown-item" href="html/Bebidas.html">Bebidas</a>
            <a class="dropdown-item" href="html/Postres.html">Postres</a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="html/validar_contacto.php">Contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary" href="html/login.php">Ingresar</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container" id='main'>
    <div class="card border-0 badge-secondary">
      <div class="card-header mx-auto badge-light">
       <h3 class=""> ¿Quienes Somos?</h3>
      </div>
      <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="img/mision.png" alt="Vision">
                    <img class="d-block w-100" src="img/vision.png" alt="Vision">
                </div>
                <div class="carousel-item active">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item d-block w-100" src="video/Himno Quala Colombia - 2018 - En 4k!.mp4"
                          allowfullscreen></iframe>
                      </div>
                </div>
                
              </div>
              <a class="carousel-control-prev h-75" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next h-75" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>
    </div>

   
    


  
  </div>
  <section class="row ">
    <div class=" col-1 redes ">
      <a href="https://www.facebook.com/QUALA-249025615565821/" target="_blank"><img src="img/iconos/fb-icon.bn.png" alt="" id='ficon'></a><br>
      <a href="https://www.youtube.com/channel/UCDoN_PzNAZLv24FW5ZneiQA" target="_blank"><img src="img/iconos/yt-icon-bn.png" alt="" id='yicon'></a><br>
      <a href="https://www.instagram.com/qualacolombia/" target="_blank"><img src="img/iconos/instagram-icon-bn.png" alt="" id='iicon'></a><br>
      <a href="https://www.linkedin.com/company/quala-s-a-?trk=tyah&trkInfo=tarId%3A1415646509356%2Ctas%3AQuala%2Cidx%3A2-1-6" target="_blank"><img src="img/iconos/in-icon.bn.png" alt="" id='incon'></a><br>

    </div>
  </section>


  <footer class="row sticky-bottom">
    <div class="col">
      <span>Copyright© 2019 - Página creada por AC|DC - Todos los derechos reservados</span>
    </div>

  </footer>



  <script src="js/jquery-3.4.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>