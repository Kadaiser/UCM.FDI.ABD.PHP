 <?php
   $connection = mysqli_connect('127.0.0.1','root','','melomanos')
   or die(header("Location: ../fail.php"));
   mysqli_set_charset( $connection, 'utf8');

     $sqlGroup = "SELECT groups.id,groups.name
                  FROM groups
                  JOIN usersingroup ON groups.id = usersingroup.idGroup
                  JOIN users ON users.id = usersingroup.iduser
                  WHERE users.nick ='".$_SESSION['nick']."'
                  ";
     $queryGroup = mysqli_query($connection,$sqlGroup);

     $optionGroup='';
     while ($row = mysqli_fetch_array($queryGroup)) {
       $optionGroup.='<option value="'.$row['id'].'">'.$row['name'].'</option>';
     }
     mysqli_close($connection);
 ?>
