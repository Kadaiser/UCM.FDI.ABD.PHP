<?php
  $connection = mysqli_connect('127.0.0.1','root','','melomanos')
  or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

    $sqlList = "SELECT DISTINCT users.nick, messages.topic, messages.content, messages.fromDate
                FROM users
                LEFT JOIN messages ON users.id = messages.fromid
                LEFT JOIN usersingroup ON messages.fromid = usersingroup.idUser
                WHERE messages.toid IN ('".$_SESSION['idUser']."', ".'0'.")
                OR messages.toGroup IN (SELECT usersingroup.idGroup
                                        FROM usersingroup
                                        WHERE usersingroup.idUser = '".$_SESSION['idUser']."')
                ORDER BY messages.fromDate DESC
                ";

    $queryList = mysqli_query($connection,$sqlList) or die(header("Location: ../fail.php"));

    $mess = mysqli_fetch_all($queryList);
    mysqli_close($connection);
?>
