<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Zone Music - Contact</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="./css/form.css" rel="stylesheet" type="text/css" media="screen" />
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
    				<div><img src="images/imgContact.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title"><a href="#">Escuchamos lo que quieres decir</a></h2>
    			<div class="entry">
    				<p>Nuestro Staff de <strong>Zone Music</strong> esta al loro! Si hay algo que te preocupa, quieres darte de baja,
              te trollean en nuestro servicio, te acosa algún melómano pasado de vueltas, has escrito un mensaje que deseas borrar,
              quieres comunicarnos un fallo de la página, eres el fotágrafo de alguna de la imágenes que hemos tomado "prestadas",
              quieres denunciarnos porque hemos dañado tu honor, o simplemente quieres comentarnos lo mucho que te gusta nuestro trabajo.
              Sea lo que sea, queremos escuchar tu opinión.</p>
    			</div>

          <form class="" action="mailto:dvalbuen@ucm.com" method="post">

            <div class="group">
              <input type="email"
                    name="nickName" id="userEmail" class="field"
                    required autofocus>
              <span class="highlight"></span><span class="bar"></span>
              <label id="emailLabel">Email</label>
            </div>

            <div class="group">
              <input type="text"
                    name="matter" class="field"
                    required>
              <span class="highlight"></span><span class="bar"></span>
              <label id="passwordLabel">Asunto</label>
            </div>

            <div class="group">
              <textarea name="text" rows="7" cols="64" placeholder="Tengo que decir: "></textarea>
            </div>

            <div class="group">
            <input type="submit"
                    class="button"
                    id="mainButton"
                    value="Enviar">
            </div>
          </form>

    		</div>
      </div>

    </div>

  <?php include "./php/footer.php" ?>

  </body>
</html>
