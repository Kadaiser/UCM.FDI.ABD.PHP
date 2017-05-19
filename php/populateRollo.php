<?php
  $DBconnection = mysqli_connect('127.0.0.1','root','','melomanos');
  mysqli_set_charset( $DBconnection, 'utf8');

  if($DBconnection) {
    $sqlRollo = 'SELECT id,name FROM genres ORDER BY name DESC';
    $queryRollo = mysqli_query($DBconnection,$sqlRollo);

    $optionRollo='';
    while ($row = $queryRollo->fetch_array()) {
      $optionRollo.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    mysqli_close($DBconnection);
  }else{
    mysqli_close($DBconnection);
    echo 'UOPSS! '.mysqli_error();
  }
?>
