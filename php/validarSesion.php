<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/general.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar</title>
</head>
<body>
<?php
include "usuarioBaseDatos.php";
$bd = new usuarioBaseDatos();
$bd->leer();
$conexion=$bd->conectar();


$bd = new usuarioBaseDatos();
$usuario= $bd->usuario();
$contraseña= $bd->contraseña();

$conexion = mysqli_connect("remotemysql.com","$usuario" ,"$contraseña","$usuario") or
  die("Problemas con la conexión");
  $registros = mysqli_query( $conexion, "SELECT* WHERE usuario=".$_POST['Usuario']   )
  or die("Problemas en el select" . mysqli_error($conexion));
  echo $registros;
  if ($reg = mysqli_fetch_array($registros)){
    if($reg['contrausu']==$_POST['Contraseña'] ){
      header("location: crud.php");
      echo "<div class='alert alert-danger' role='alert'>
      Contraseña Incorrecta
    </div>";

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
?>

</body>
</html>