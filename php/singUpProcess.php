<?php
	session_start();
	unset($_SESSION);
	session_destroy();

  $nick = htmlspecialchars(trim(strip_tags($_POST['nickName'])));
  $userPassword = htmlspecialchars(trim(strip_tags($_POST['userPassword'])));
	$userConfirmPassword = htmlspecialchars(trim(strip_tags($_POST['userConfirmPassword'])));
	$born = $_POST['bornDate'];

	if($userPassword != $userPassword){
		header("Location: ../fail.php");
	}

  $conection = mysqli_connect('127.0.0.1','root','','melomanos');
	mysqli_set_charset( $connection, 'utf8');

  if($conection){
    $sql = "SELECT *
            FROM users
            WHERE nick='".$nick."'
            ";

    $query = mysqli_query($conection,$sql);

    if($query){
      if(mysqli_num_rows($query) == 1){
				mysqli_close($DBconnection);
				header("Location: ../signup.php");
			}else{
				$options = array(
					'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
					'cost' => 12,
				);
				$password_hash = password_hash($userPassword, PASSWORD_BCRYPT, $options);
				$sqlInsert = "INSERT INTO users (`id`, `nick`, `pass`, `isAdmin`, `activeFrom`, `born`)
		            VALUES (NULL, '$nick', '$password_hash', '0', CURRENT_TIMESTAMP, '$born')
		            ";
				if(mysqli_query($conection,$sqlInsert)){
					mysqli_close($conection);
					header("Location: ../index.php");

				}else{
					mysqli_close($DBconnection);
		      header("Location: ../fail.php");
				}

			}
		}
	}
?>
