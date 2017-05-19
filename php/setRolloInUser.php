<?php
  session_start();

  if(!isset($_SESSION['login'])){
    header("Location: ../fail.php");
  }
  $DBconnection = mysqli_connect('127.0.0.1','root','','melomanos');
  mysqli_set_charset( $DBconnection, 'utf8');

  $genreId = $_POST['genre'];
  $genreName = $_SESSION['rollo'];
  $userName = $_SESSION['nick'];

  if($DBconnection) {
    $sqlInsert = "UPDATE usergenres
                  SET idGenre= '".$genreId."'
                  WHERE idUser = (SELECT users.id FROM users WHERE users.nick = '".$userName."')";
    $queryRoom = mysqli_query($DBconnection,$sqlInsert);

    $sql = "SELECT name from genres WHERE genres.name = '".$genreName."'";
    $queryGenre = mysqli_query($DBconnection,$sql);
    $result=mysqli_fetch_assoc($queryGenre);
    var_dump($result);
    //$_SESSION['rollo'] = $result->name;

    mysqli_close($DBconnection);
  }else{
    mysqli_close($DBconnection);
    echo 'UOPSS! '.mysqli_error();
  }
  echo $genreId;
  echo $genreName;
  echo $userName;
  //header("Location: ../userview.php");
 ?>
