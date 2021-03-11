<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="REFRESH" CONTENT=""> 
    <title>Registro</title>
</head>
<body>
<?php
include "usuarioBaseDatos.php";

$bd = new usuarioBaseDatos();
$usuario= $bd->usuario();
$contraseña= $bd->contraseña();

$conexion = mysqli_connect("localhost", "$usuario", "$contraseña", "quala") or
  die("Problemas con la conexión");

 if($_REQUEST['Contraseña'] == $_REQUEST['conContraseña']) {
     if($_REQUEST['pin']==0000){

mysqli_query($conexion, "insert into usuarios(idUsu, nombreUsu, apellidoUsu, contrausu, usuario) values 
                   ('$_REQUEST[id]','$_REQUEST[Nombre]','$_REQUEST[Apellido]','$_REQUEST[Contraseña]','$_REQUEST[Usuario]')")
  or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);
 
echo "<h2>Registro Correctamente</h2>";
echo "<h3>Espere Unos Segundos</h3>";
     } else{
         echo "pin es incorrecto";
     }
 }else{
     echo "Contraseñas no son iguales";
 }
?>
</body>
</html>