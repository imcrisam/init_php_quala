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


    <div class="container " id='main'>

        <section class="contenedor-main row justify-content-around ">
            <div class="card col-12 border-0 bg-light pb-3 ">
                <div class="card-header badge-info mb-3">
                    <center>
                        <h3>Registro De Nuevo Usuario</h3>
                    </center>
                </div>
                <form action="registrarUsuario.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Nombre">Identificacion</label>
                            <input type="number" class="form-control" id="id" name="id" placeholder="Identificacion">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Apellido">Apellido</label>
                            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Confirme Contraseña</label>
                            <input type="password" class="form-control" id="conContraseña" name="conContraseña" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="Usuario">Usuario</label>
                            <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pin">Pin De Seguridad</label>
                            <input type="password" class="form-control" id="pin" name="pin" placeholder="pin">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-outline-primary col-xl-2 col-md-4 col-12" name="registrar" id="registrar" value="registrar">Registrar</button>
                    <button type="reset" class="btn btn-outline-info col-xl-1 col-md-2 col-4">Limpiar</button>
                    <a href="login.php" class="btn btn btn-outline-danger float-right col-xl-1 col-md-2 col-7">Cancelar</a>

                    <?php
                    if ($_POST) {

                        if (isset($_POST['registrar'])) {

                            include "../php/usuarioBaseDatos.php";

                            $bd = new usuarioBaseDatos();
                            $usuario = $bd->usuario();
                            $contraseña = $bd->contraseña();

                            $conexion = mysqli_connect("localhost", "$usuario", "$contraseña", "quala") or
                                die("Problemas con la conexión");

                            if ($_POST['Contraseña'] == $_POST['conContraseña']) {
                                if ($_POST['pin'] == 0000) {

                                    mysqli_query($conexion, "insert into usuarios(idUsu, nombreUsu, apellidoUsu, contrausu, usuario) values 
                   ('$_POST[id]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Contraseña]','$_POST[Usuario]')")
                                        or die("Problemas en el select" . mysqli_error($conexion));

                                    mysqli_close($conexion);

                                    
                                    echo "<div class='alert alert-success' role='alert'>
                                    Registro Correctamente
                                  </div>";
                                    
                                } else {
                                    echo "<div class='alert alert-danger' role='alert'>
                                El pin Es Incorrecto
                              </div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>
                                Contraseñas no son iguales
                              </div>";
                            }
                        }
                    }

                    ?>





                </form>
            </div>






        </section>


    </div>



    <footer class="row Sticky-bottom">
        <div class="col">
            <span>Copyright© 2019 - Página creada por AC|DC - Todos los derechos reservados</span>
        </div>

    </footer>



    <script src="../js/jquery-3.4.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>



</html>