<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User View</title>
  </head>
  <body>
    <?php



    $userPassword = "parabola123";
    $options = array(
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
      'cost' => 12,
    );
    $password_hash = password_hash($userPassword, PASSWORD_BCRYPT, $options);

        echo $password_hash;
     ?>


     <!--
     <p>Al rellenar este formulario daras de alta un usuario en nuestra plataforma, por ello, antes de utilizar nuestros servicios,
     <a href="#">lee</a> nuestras condiciones de uso y aceptación de políticas de tratamiento de datos de caracter personal</p>
     -->
     
  </body>
</html>
