
<?php

  $from = htmlspecialchars(trim(strip_tags($_POST['from'])));
  $toGroup = htmlspecialchars(trim(strip_tags($_POST['toGroup'])));
  $to = htmlspecialchars(trim(strip_tags($_POST['to'])));
  $topic = htmlspecialchars(trim(strip_tags($_POST['topic'])));
  $content = htmlspecialchars(trim(strip_tags($_POST['content'])));

  $connection = mysqli_connect('127.0.0.1','root','','melomanos') or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

  if ($toGroup === "NULL") {
    echo "user";
    $sql = "INSERT INTO messages (`id`, `fromid`, `toid`, `toGroup`, `topic`, `content`, `fromDate`)
            VALUES (NULL, '$from', '$to', NULL, '$topic', '$content', CURRENT_TIMESTAMP)";
  } else {
    echo "grupo";
    $sql = "INSERT INTO messages (`id`, `fromid`, `toid`, `toGroup`, `topic`, `content`, `fromDate`)
            VALUES (NULL, '$from', NULL, '$toGroup', '$topic', '$content', CURRENT_TIMESTAMP)";
  }

  mysqli_query($connection,$sql) or die(header("Location: ../fail.php"));
  mysqli_close($connection);
  header("Location: ../userview.php");

 ?>
