<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de libreria</title>
  </head>
  <body>
    <?php
      $estilos= array();
      $db = @mysqli_connect('localhost','root','','biblioteca');
      $sql="SELECT Generos FROM generos";
      $consulta=mysqli_query($db, $sql);
      @mysqli_close($db);
      while ($cat=mysqli_fetch_object($consulta)){
    	   $estilos[]=$cat->Generos;
       };
     ?>

     <form action="consulta.php" method="post">
       <p>Seleccione la categoria </p>
       <select name="genero">
       <?php
         foreach($estilos as $codigo => $nombre){
           echo "<option> $nombre </option> ";
         }
       ?>
       </select><br>
       Valor minimo:<input type="text" name="minimo"><br>
       Valor maximo:<input type="text" name="maximo"><br>
       <input type="submit" value="Enviar">
       <input type="reset" value="Borrar">
      </form>

      <?php
        $procesando=isset($_POST['minimo'])?$_POST['minimo']:null;

        if($procesando!=null){
      		echo "Libros para "; echo $_POST['genero'];
      		$libros=array();
      		$tipo=$_POST['genero'];
      		$min=$_POST['minimo'];
      		$max=$_POST['maximo'];
      		$db = @mysqli_connect('localhost','root','','biblioteca');

          $sql="SELECT Titulo, NumeroUnidades FROM libros WHERE Genero='$tipo' AND NumeroUnidades >= '$min' AND  NumeroUnidades <= '$max'";
          $consulta=mysqli_query($db, $sql);
          @mysqli_close($db);

          echo "<table>";
          echo "<th>Titulo</th><th>Precio</th>";
          while ($lib=mysqli_fetch_object($consulta)){
            echo "<tr>";
            echo "<td>"; echo "$lib->Titulo";echo "</td>";echo "<td>"; echo "$lib->NumeroUnidades";echo "</td>";
            echo "<tr>";
          };
          echo "</table>";
        };
       ?>

  </body>
</html>
