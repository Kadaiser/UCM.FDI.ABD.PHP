<?php
  $connection = mysqli_connect('127.0.0.1','root','','melomanos')
  or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

    $sql  = 'SELECT name, numVisitas,img
              FROM groups
              ORDER BY numVisitas DESC LIMIT 1';

    $query = mysqli_query($connection,$sql) or die(header("Location: ../fail.php"));
    $visited=mysqli_fetch_object($query);

    $nameVisited= $visited->name;
    $visitValue=	$visited->numVisitas;
    $imgVisited= $visited->img;

    $sql2  = 'SELECT name, numMiembros,img
              FROM groups
              ORDER BY numMiembros DESC LIMIT 1';

    $queryNumerous = mysqli_query($connection,$sql2) or die(header("Location: ../fail.php"));
    $numerous=mysqli_fetch_object($queryNumerous);

    $nameNumeros= $numerous->name;
    $menmbersValue=	$numerous->numMiembros;
    $imgNumerous= $numerous->img;


    $sqlList = 'SELECT name, numMiembros, minAge, maxAge, id
                FROM groups';

    $queryList = mysqli_query($connection,$sqlList) or die(header("Location: ../fail.php"));

    $rows = array();
    while($row = mysqli_fetch_array($queryList))
      $rows[] = $row;

    mysqli_close($connection);
?>
