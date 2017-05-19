<?php
  $DBconnection = mysqli_connect('127.0.0.1','root','','melomanos');
  mysqli_set_charset( $DBconnection, 'utf8');

  if($DBconnection) {
    $sqlroom = 'SELECT id,name FROM genres ORDER BY name DESC';
    $queryRoom = mysqli_query($DBconnection,$sqlroom);

    $optionRoom='';
    while ($row = $queryRoom->fetch_array()) {
      $optionRoom.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    mysqli_close($DBconnection);
  }else{
    mysqli_close($DBconnection);
    echo 'UOPSS! '.mysqli_error();
  }
?>
