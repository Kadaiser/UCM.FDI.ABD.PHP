<?php
  $connection = mysqli_connect('127.0.0.1','root','','melomanos')
  or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

    $sql = 'SELECT *
            FROM groups
            WHERE id ='.$idGroup.'
            ';
    $query= mysqli_query($connection,$sql) or die(header("Location: ../fail.php"));

    $result = mysqli_fetch_assoc($query);

    $name = $result['name'];
    $des = $result['description'];
    $min = $result['minAge'];
    $max = $result['maxAge'];
    $img = $result['img'];
    $visits = $result['numVisitas'];
    $menbers = $result['numMiembros'];

    $sqlUp = 'UPDATE groups
              SET numVisitas = numVisitas + 1
              WHERE id ='.$idGroup.'
            ';
    mysqli_query($connection,$sqlUp) or die(header("Location: ../fail.php"));


    mysqli_close($connection);
?>
