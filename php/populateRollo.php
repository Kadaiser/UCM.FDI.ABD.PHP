<?php
  $connection = mysqli_connect('127.0.0.1','root','','melomanos')
  or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

    $sqlRollo = 'SELECT id,name FROM genres ORDER BY name DESC';
    $queryRollo = mysqli_query($connection,$sqlRollo);

    $optionRollo='';
    while ($row = $queryRollo->fetch_array()) {
      $optionRollo.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    mysqli_close($connection);
?>
