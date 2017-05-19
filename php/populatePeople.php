<?php
  $DBconnection = mysqli_connect('127.0.0.1','root','','melomanos');
  mysqli_set_charset( $DBconnection, 'utf8');

  if($DBconnection) {
    $sqlPeople = 'SELECT id,nick FROM users ORDER BY nick DESC';
    $queryPeople = mysqli_query($DBconnection,$sqlPeople);

    $optionPeople='';
    while ($row = $queryPeople->fetch_array()) {
      $optionPeople.='<option value="'.$row['id'].'">'.$row['nick'].'</option>';
    }
    mysqli_close($DBconnection);
  }else{
    mysqli_close($DBconnection);
    echo 'UOPSS! '.mysqli_error();
  }
?>
