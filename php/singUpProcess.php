<?php
	session_start();
	unset($_SESSION);
	session_destroy();

  $nick = htmlspecialchars(trim(strip_tags($_POST['nickName'])));
  $userPassword = htmlspecialchars(trim(strip_tags($_POST['userPassword'])));
	$userConfirmPassword = htmlspecialchars(trim(strip_tags($_POST['userConfirmPassword'])));
	$userGenre = $_POST['genre'];
	$born = $_POST['bornDate'];
	$age = date_diff(date_create($born), date_create('now'))->y;

	if($userPassword != $userPassword){
		header("Location: ../fail.php?=password_verification_failed");
	}

  $connection = mysqli_connect('127.0.0.1','root','','melomanos') or die(header("Location: ../fail.php?=DB_connection_fail"));
	mysqli_set_charset( $connection, 'utf8');

  $sql = "SELECT *
          FROM users
          WHERE nick='".$nick."'
          ";

  $query = mysqli_query($connection,$sql) or die(header("Location: ../fail.php?=DB_querry_fail"));

  if(mysqli_num_rows($query) == 1){
		mysqli_close($connection);
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

	mysqli_query($connection,$sqlInsert) or die(header("Location: ../fail.php?=DB_querry_fail"));

	$sqlGenreInsert = "INSERT INTO usergenres (`idUser`,`idGenre`)
											VALUES ((SELECT id FROM users ORDER BY id DESC LIMIT 1 ),'$userGenre')
											";

	mysqli_query($connection,$sqlGenreInsert) or die(header("Location: ../fail.php?=DB_querry_fail"));

	echo $userGenre;
	if ($age <= 25) {
		$sqlAutoGroup = "SELECT id
	          					FROM groups
	          					WHERE estilo = '".$userGenre."' AND minAge = '16'
	          				";
										echo "ENTRADA1";
	} else if($age >25 AND $age <= 40){
		$sqlAutoGroup = "SELECT id
						          FROM groups
						          WHERE estilo = '".$userGenre."' AND minAge = '26'
						          ";
											echo "ENTRADA2";
	} else if($age > 40){
		$sqlAutoGroup = "SELECT id
						          FROM groups
						          WHERE estilo = '".$userGenre."' AND minAge = '41'
						          ";
											echo "ENTRADA3";
	}
	$result = mysqli_query($connection,$sqlAutoGroup);
	if (mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$idGroupToAdd = $row['id'];
		echo "ENTRADA DE GRUPO CON ID:";
		var_dump($idGroupToAdd);

		$sqlSetGroup = "INSERT INTO usersingroup (`id`,`idUser`,`idGroup`)
										VALUES (NULL,(SELECT id FROM users ORDER BY id DESC LIMIT 1 ),'$idGroupToAdd')
										";

		mysqli_query($connection,$sqlSetGroup) or die(header("Location: ../fail.php?=DB_querry_fail4"));
	}

	mysqli_close($connection);
	header("Location: ../index.php");
	}
?>
