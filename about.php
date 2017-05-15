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
    					<li><a href="contact.php">Contact</a></li>
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
    				<div><img src="images/imgAbout.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title"><a href="#">Conocenos, y conoce tus derechos</a></h2>
    			<div class="entry">
    				<p>En <strong>Zone Music</strong>, creemos importante que la gente este a gusto con nuestro servicio, eso implica además de cubrir
              las necesidades de uso, accesibilidad e intuitividad propias de una página moderna, también nos hagamos responsables de nuestros usuarios.
              Nuestro compromiso con la seguridad nos hace almacenar tu contraseña cifrada, para que, en caso de ataque, no sean expuestas inmediatamente.
               Pero aun así, no podemos garantizar que en caso de suceder eso, los cibercriminales puedan terminar desencriptando la contraseña. No guardaremos
               tu dirección de e-mail, pero necesitamos un identificador, un nickname. Tienes la libertad de utilizar tu nombre real si así lo deseas. En caso
               de ser así, cuentas con nuestro compromiso de no ceder tus datos de carácter personal (Nick y edad) a ninguna entidad, salvo las dispuestas
               en el RDLOP aprobado por el consejo de ministros del gobierno Español. Nuestro servicio opera en territorio nacional y se supedita a la legislación
               española en el marco institucional europeo. Si quieres ejecutar tus derechos de propiedad intelectual o de datos de caracter personal
               <a href="./contact.php" rel="nofollow">escribenos</a> y te atenderemos tan pronto como nos sea posible. Muchas grácias por confiar en nosotros.
    			</div>
    		</div>
      </div>

			<div id="featured-content">
				<div id="column1">
					<h2>Derechos ARCO</h2>
					<p><img src="images/imgARCO.jpg" width="300" height="150" alt="" /></p>
					<p>Eres propietario de tus datos, y por consecuencia estos son tus derechos. Conócelos y ejecútalos si los crees necesario, o quieres darte de baja.</p>
					<p class="button"><a href="http://www.agpd.es/portalwebAGPD/CanalDelCiudadano/derechos/principales_derchos/index-ides-idphp.php">Saber más</a></p>
				</div>
				<div id="column2">
					<h2>Esta página</h2>
					<p><img src="images/img07.jpg" width="300" height="150" alt="" /></p>
					<p>Solo para dejarlo meridianamente claro. Esta web ha sido diseñada y creada como parte de un trabajo obligatorio para una materia de la carrera. No ha sido
					creado para ser usada en entronos de produccion real.</p>
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
