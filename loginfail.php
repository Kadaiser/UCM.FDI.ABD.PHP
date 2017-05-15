<?php
	session_start();
	unset($_SESSION);
	session_destroy();
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
              <li class="current_page_item"><a href="./singup.php">Register</a></li>
              <li class="current_page_item"><a href="./login.php">Login</a></li>
    					<li><a href="about.php">About</a></li>
    					<li><a href="contact.php">Contact</a></li>
    				</ul>
    			</div>
    		</div>
    		<div id="banner">
    			<div class="content">
    				<div><img src="images/img02.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title">UOPS!! Fallo el login...</h2>
    			<div class="entry">
    				<p>Esto significa que o bien tu usuario o contraseña son erroneos o pero aun...<strong>Aun no estas registrado en Zone Music</strong>.
               Si es asi, deberias <a href="./singup.php">registrarte</a> primero para poder hacer uso de nuestros servicios. Si por el contrario
               estas totalmente convencido de que estas registrado en nuestra página, pero te has olvidado de tus datos de login, entonces <a href="contact.php">contacta</a>
               con nuestro personal del STAFF de Zone Music indicando tu direccion de email. Trataremos de resolver tu problema lo antes posible!!</p>
    			</div>
    		</div>
      </div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
