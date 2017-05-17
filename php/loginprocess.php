<?php

  session_start();

  $nick = htmlspecialchars(trim(strip_tags($_POST['nickName'])));
  $userPassword = htmlspecialchars(trim(strip_tags($_POST['userPassword'])));

  $conection = mysqli_connect('127.0.0.1','root','','melomanos');

  if($conection){
    $sql = "
            SELECT nick,pass
            FROM users
            WHERE nick='".$nick."'
            ";

    $query = mysqli_query($conection,$sql);

    if($query){
      mysqli_close($conection);
      $user=mysqli_fetch_object($query);

      if (password_verify($userPassword,$user->pass)) {
        if(mysqli_num_rows($query)!==0){
          $_SESSION['login'] = true;
          $_SESSION['isAdmin'] = $user->isAdmin;
          $_SESSION['nick']= $user->nick;


          header("Location: ../userview.php");

        }else{
          header("Location: ../loginfail.php");
        }
      }else{
        header("Location: ../loginfail.php");
      }
    }else{
      mysqli_close($conection);
      header("Location: ../loginfail.php");
    }

  }else{
    mysqli_close($conection);
    header("Location: ../fail.php");
  }
 ?>
