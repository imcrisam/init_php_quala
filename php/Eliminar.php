<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../html/Crud.php ">
    <title>Registro</title>

</head>

<body>
    <?php

    $id = $_GET['id'];
    include "usuarioBaseDatos.php";
      $bd = new usuarioBaseDatos();
      $usuario= $bd->usuario();
      $contraseña= $bd->contraseña();
      
      $conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
        die("Problemas con la conexión");


    

    mysqli_query($conexion,"DELETE FROM clientes WHERE ID=" . $id)
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "<h2>Elimino Correctamente</h2>";
    echo "<h3>Espere Unos Segundos</h3>";

    ?>
</body>

</html>