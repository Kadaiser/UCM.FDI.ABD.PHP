<?php session_start(); ?>
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
    				<div><img src="images/img02.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title"><a href="#">Melómano detectado!! </a></h2>
    			<div class="entry">
    				<p>Esto es <strong>Zone Music</strong>. La única forma de que hallas llegado hasta aqui se debe a tu condición de <a href="https://definicion.de/melomano/" rel="nofollow">melómano</a>.
    				En esta web encontraras a otros usuarios, que como tu, compartis una insaciable sed musical. Si eres de los que cuando te tiran de la lengua solo eres capaz de hablar de géneros musicales,
    				grupos, instrumentos, tecnicas... O si eres <strong>el profesor de Ampliación de base de Datos</strong>, y tienes que evaluar a tu alumno... Este es tu sitio!</p>
    			</div>
    		</div>
      </div>

			<div id="featured-content">
				<div id="column1">
					<h2>¡Hazte oir!</h2>
					<p><img src="images/img06.jpg" width="300" height="150" alt="" /></p>
					<p>Puedes enviar tus mensajes a los usuarios de la plataforma, con ello puedes promocionar tus obras, proponer preguntas, romper los esquemas!!
						En todo caso, si tu objetivo es comunicarte con los demas usuarios, registrate y empiza a disfrutar de los servicios de la web</p>
					<p class="button"><a href="#">Registrame</a></p>
				</div>
				<div id="column2">
					<h2>Otros usuarios</h2>
					<p><img src="images/img07.jpg" width="300" height="150" alt="" /></p>
					<p>¿Quieres intercambiar mensajes privados entre otros usuarios? Si resulta que deseas proponer un plan o proyecto a alguien en particulas, la plataforma permite
						filtar tus destinatarios demanera trasparente al resto de miembros del portal</p>
				</div>
				<div id="column3">
					<h2>Los Grupos</h2>
					<p><img src="images/img08.jpg" width="300" height="150" alt="" /></p>
					<p>Si algunos usuarios estan en sintonia con tu pensamiento sobre la musica, lo mejor que podeis hacer es compartir vuestros mensajes directamente entre vosotros,
						selecciona tu grupo favorito y comparte tus inquietudes con sus integrantes</p>
					<p class="button"><a href="#">Mostrar</a></p>
				</div>
			</div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
