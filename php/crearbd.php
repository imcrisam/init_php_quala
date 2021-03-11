<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../html/login.php"> 
    <title>Registro</title>
</head>
<body>
<?php
include "usuarioBaseDatos.php";

$bd = new usuarioBaseDatos();
$usuario= $bd->usuario();
$contraseña= $bd->contraseña();

$conexion = mysqli_connect("remotemysql.com","OWPtHyXAIQ" ,"SR64WeqAZS") or
  die("Problemas con la conexión");
  mysqli_query($conexion, "CREATE DATABASE quala");
  mysqli_close($conexion);
  $conexion = mysqli_connect("remotemysql.com","OWPtHyXAIQ" ,"SR64WeqAZS","OWPtHyXAIQ") or
  die("Problemas con la conexión");
mysqli_query($conexion, "CREATE TABLE `clientes` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NIT` varchar(30) NOT NULL,
    `Nombre` varchar(30) DEFAULT NULL,
    `Telefono` varchar(15) DEFAULT NULL,
    `Email` varchar(30) DEFAULT NULL,
    `Direccion` varchar(30) DEFAULT NULL,
    `Fecha_Registro` datetime DEFAULT NULL,
    PRIMARY KEY (`ID`),
    UNIQUE KEY `NIT` (`NIT`)
  )")
  or die("Problemas en el create" . mysqli_error($conexion));
  mysqli_query($conexion, "CREATE TABLE `usuarios` (
    `idUsu` varchar(20) NOT NULL,
    `nombreUsu` varchar(30) DEFAULT NULL,
    `apellidoUsu` varchar(30) DEFAULT NULL,
    `contrausu` varchar(30) DEFAULT NULL,
    `usuario` varchar(20) DEFAULT NULL,
    PRIMARY KEY (`idUsu`),
    UNIQUE KEY `usuario` (`usuario`)
  ) ")
  or die("Problemas en el create" . mysqli_error($conexion));
  mysqli_query($conexion, " INSERT INTO `clientes` (`ID`, `NIT`, `Nombre`, `Telefono`, `Email`, `Direccion`, `Fecha_Registro`) VALUES

  (3, '1098794129', 'Carlos', '3184521654', 'cfchaparro@hotmail.com', 'calle 109 #31-25', '2019-07-12 06:15:43'),
  (4, '1098572416', 'Jorgue Luis|', '3184045182', 'jluis-@hotmail.com', 'lebrija vereda3', '2019-07-12 06:16:38'),
  (5, '12454654', 'Tienda DoÃ±a Juana', '3201522526', 'Donajuana@gmail.com', 'calle 15 #25-56', '2019-07-12 06:59:37'),
  (6, '2564', 'Exito', '315256253', 'exito@exito.com', 'calle58 #68-52', '2019-07-12 07:00:13'),
  (7, '2561489', 'aturo', '3180256253', 'aturo@gmail.com', 'calle 80 #85-60', '2019-07-12 07:01:05');")
  or die("Problemas en el create" . mysqli_error($conexion));


  mysqli_close($conexion);

echo "<h2>Base De Datos Creada</h2>";
echo "<h3>Espere Unos Segundos</h3>";


?>
</body>
</html>