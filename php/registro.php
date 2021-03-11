<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=../html/Crud.php"> 
    <title>Registro</title>
</head>
<body>
<?php

include "usuarioBaseDatos.php";
      $bd = new usuarioBaseDatos();
      $usuario= $bd->usuario();
      $contraseña= $bd->contraseña();
      
      $conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
        die("Problemas con la conexión");



$Fecha = date("y-m-d h:i:s");
mysqli_query($conexion, "insert into clientes(NIT, Nombre, Telefono, Email, Direccion, Fecha_Registro) values 
                   ('$_REQUEST[NIT]','$_REQUEST[Nombre]','$_REQUEST[Telefono]','$_REQUEST[Email]','$_REQUEST[Direccion]', '$Fecha' )")
  or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

echo "<h2>Registro Correctamente</h2>";
echo "<h3>Espere Unos Segundos</h3>";

?>
</body>
</html>