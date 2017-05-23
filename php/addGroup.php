<?php
  $GropuName = htmlspecialchars(trim(strip_tags($_POST['GropuName'])));
  $content = htmlspecialchars(trim(strip_tags($_POST['content'])));
  $minAge = htmlspecialchars(trim(strip_tags($_POST['minAge'])));
  $maxAge = htmlspecialchars(trim(strip_tags($_POST['maxAge'])));
  $genre = htmlspecialchars(trim(strip_tags($_POST['genre'])));

  $connection = mysqli_connect('127.0.0.1','root','','melomanos') or die(header("Locatiosn: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

  $sql = "INSERT INTO `groups` (`id`, `name`, `description`, `minAge`, `maxAge`, `numVisitas`, `img`, `numMiembros`, `estilo`)
          VALUES (NULL, '$GropuName', '$content', '$minAge', '$maxAge', '0', NULL, '0', '$genre')";

  mysqli_query($connection,$sql) or die(header("Location: ../fail.php"));
  mysqli_close($connection);
  header("Location: ../adminview.php");
?>
