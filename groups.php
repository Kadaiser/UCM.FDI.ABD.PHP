<?php session_start();

	$conection = mysqli_connect('127.0.0.1','root','','melomanos');
	if($conection){
		$sql  = 'SELECT name, numVisitas,img
							FROM groups
							ORDER BY numVisitas DESC LIMIT 1';
		$query = mysqli_query($conection,$sql);

		if($query){
			$visited=mysqli_fetch_object($query);
			$nameVisited= $visited->name;
			$visitValue=	$visited->numVisitas;
			$imgVisited= $visited->img;
		}else{
			mysqli_close($conection);
			header("Location: ../fail.php");
		}
		$sql2  = 'SELECT name, numMiembros,img
							FROM groups
							ORDER BY numMiembros DESC LIMIT 1';
		$queryNumerous = mysqli_query($conection,$sql2);

		if($queryNumerous){
			$numerous=mysqli_fetch_object($queryNumerous);
			$nameNumeros= $numerous->name;
			$menmbersValue=	$numerous->numMiembros;
			$imgNumerous= $numerous->img;

			mysqli_close($conection);
		}else{
			mysqli_close($conection);
			header("Location: ../fail.php");
		}
	}else{
		mysqli_close($conection);
		header("Location: ../fail.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Zone Music</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<body>
    <div id="wrapper">

      <div id="header-wrapper">
    		<div id="header" class="container">
    			<div id="logo">
    				<h1><a href="index.php">Zone Music</a></h1>
    			</div>
    			<div id="menu">
    				<ul>
							<?php
								if(isset($_SESSION['login'])===true){
									echo "<li class=".'"current_page_item"'."><a href=".'userview.php'.">Dashboard</a></li>";
								}else{
									echo "<li class=".'"current_page_item"'."><a href='./login.php'>Login</a></li>";
								}
							 ?>
    					<li><a href="./about.php">About</a></li>
    					<li><a href="./contact.php">Contact</a></li>
							<?php
								if(isset($_SESSION['login'])===true){
									echo "<li class=".'"logout_page_item"'."><a href=".'./php/logout.php'.">Logout</a></li>";
								}
							 ?>
    				</ul>
    			</div>
    		</div>
    		<div id="banner">
    			<div class="content">
    				<div><img src="images/imgGropus.png" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title">Zona de Grupos</h2>
    			<div class="entry">
    				<p>
							El punto de encuentro de los usurios de la web. Las notas tiene que estar en una partitura adecuada para sonar bien. Encuentra aqui tu sintonia.
							Puedes pertenecer a multiples grupos si asi lo deseas. Al formar parte de un grupo, recibiras en tu dashboard personal los mensajes emitidos para
							el grupo en cuestión. Puedes subscribirte o abandonar grupos a placer con un simple click.
						</p>
    			</div>
    		</div>
      </div>

			<div id="featured-content">
				<div id="column1">
					<h2>El mas visitado</h2>
					<h3><?php echo $nameVisited; ?></h3>
					<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($imgVisited).'" width="300" height="150" alt=""/>'; ?>
					<p>Este grupo es un autentico TopTrending ahora mismo en <strong>Zone Music</strong>. Ha recibido mas de <?php echo  $visitValue;?> visitas desde que fue creado</p>
					<p class="button"><a href="./groupview.php">Muestramelo</a></p>
				</div>
				<div id="column2">
					<h2>El mas numeroso</h2>
					<h3><?php echo $nameNumeros; ?></h3>
					<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($imgNumerous).'" width="300" height="150" alt=""/>'; ?>
					<p>Este grupo es legion en <strong>Zone Music</strong>. dispone de mas de <?php echo  $menmbersValue;?> miembros actualmente, lo que le situa a la cabeza del grupo mas
						grande de esta web</p>
						<p class="button"><a href="./signup.php">Subcribirse</a></p>
				</div>
				<div id="column3">
					<h2>El mas viejo</h2>
					<p><img src="images/img08.jpg" width="300" height="150" alt="" /></p>
					<p>No nos referimos a su antiguedad en la pagina, si no a la media de la edad mas elevada. Este grupo es para gente experimentada, que con la edad
					ha refinado mucho su gusto, y este es su grupo favorito.</p>
					<p class="button"><a href="./groups.php">Muestramelo</a></p>
				</div>
			</div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
