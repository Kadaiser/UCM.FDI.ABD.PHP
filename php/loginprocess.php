<?php
  session_start();

  $nick = htmlspecialchars(trim(strip_tags($_POST['nickName'])));
  $userPassword = htmlspecialchars(trim(strip_tags($_POST['userPassword'])));

  $connection = mysqli_connect('127.0.0.1','root','','melomanos') or die(header("Location: ../fail.php?=DB_connection_fail"));
  mysqli_set_charset( $connection, 'utf8');

  $sql = "SELECT users.nick, users.pass, genres.name, users.id, users.isAdmin
          FROM users JOIN usergenres
          ON users.id = usergenres.idUser
          JOIN genres ON genres.id = usergenres.idGenre
          WHERE users.nick='".$nick."'
          ";

  $query = mysqli_query($connection,$sql)  or die(header("Location: ../fail.php?=DB_querry_fail"));

  mysqli_close($connection);
  $user=mysqli_fetch_object($query);

  if (password_verify($userPassword,$user->pass)) {
    if(mysqli_num_rows($query)!==0){
      $_SESSION['login'] = true;
      $_SESSION['isAdmin'] = $user->isAdmin;
      $_SESSION['nick']= $user->nick;
      $_SESSION['rollo'] = $user->name;
      $_SESSION['idUser'] = $user->id;

      var_dump($_SESSION['isAdmin']);


      if($_SESSION['isAdmin'] === "1"){
        header("Location: ../adminview.php");
      }else{
      header("Location: ../userview.php");
      }

    }else{
      header("Location: ../loginfail.php");
    }
  }else{
    header("Location: ../loginfail.php");
  }
 ?>
