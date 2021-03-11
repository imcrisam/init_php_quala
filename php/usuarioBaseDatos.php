<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>
  <?php

  class usuarioBaseDatos
  {
    
  
     
    public function usuario()
    {
      $usu = fopen("../bd/usuario.txt", "r") or
    die("Problemas en la creacion");
      
      if (!feof($usu)) {
        $linea = fgets($usu);
      $usuario=nl2br($linea);
      
      fclose($usu);
      }else{
        $usuario ="";
      }
      return $usuario;
    }
        
    public function contraseña()
    {
      $contra = fopen("../bd/contra.txt", "r") or
    die("Problemas en la creacion");
      if(!feof($contra)) {
        $linea = fgets($contra);
      $contraseña=nl2br($linea);
      fclose($contra);
      
      }else{
        $contraseña="";
      }
      return $contraseña;
    }

    
  }
  ?>
</body>

</html>