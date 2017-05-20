<?php
  $connection = mysqli_connect('127.0.0.1','root','','melomanos')
  or die(header("Location: ../fail.php"));
  mysqli_set_charset( $connection, 'utf8');

    $sqlPeople = 'SELECT id,nick FROM users ORDER BY nick DESC';
    $queryPeople = mysqli_query($connection,$sqlPeople);

    $optionPeople='';
    while ($row = $queryPeople->fetch_array()) {
      $optionPeople.='<option value="'.$row['id'].'">'.$row['nick'].'</option>';
    }
    mysqli_close($connection);

?>
