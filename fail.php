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
    					<li><a href="./about.php">About</a></li>
    					<li><a href="./contact.php">Contact</a></li>
    				</ul>
    			</div>
    		</div>
    		<div id="banner">
    			<div class="content">
    				<div><img src="images/imgErr.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title"><a href="#">UOPS!! Falló la pagina... </a></h2>
    			<div class="entry">
    				<p>Vale, esto es un poco embarazoso...<strong> ¡Porque no sabemos qué ha fallado!</strong>
               Podría deberse a un amplio abanico de posibilidades, desde caídas en el servidor, error en la Base de Datos, un script no compatible
               con tu navegador, la conexión de proveedor de ISP, que navegas tras un proxy capado, estas intentando cosas raras a traves de la URL, música de Amaral...
               En resumen, no sabemos que es, pero si quieres ayudarnos a resolverlo, agradeceremos que nos <a href="contact.php">escribas</a>, explicando brevemente
               que estabas haciendo cuando salió este fallo, y nosotros lo usaremos como pista para investigar, y tratar de simular el error, agradecemos
               tu ayuda.</p>
    			</div>
    		</div>
      </div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
