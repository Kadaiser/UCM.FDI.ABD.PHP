<?php
session_start();

include "./php/populateRollo.php";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Zone Music - Registro</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
  	<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
  	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="./css/form.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    <div id="wrapper">

      <div id="header-wrapper">
    		<div id="header" class="container">
    			<div id="logo">
    				<h1><a href="index.php">Zone Music</a></h1>
    			</div>
    			<div id="menu">
    				<ul>
    					<li class="current_page_item"><a href="login.php">Login</a></li>
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
    				<div><img src="images/imgRegister.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title">Estamos deseando que te unas!</h2>
    			<div class="entry">
            <p>Al rellenar este formulario daras de alta un usuario en nuestra plataforma, por ello, antes de utilizar nuestros servicios,
            <a href="./about.php">lee</a> nuestras condiciones de uso y aceptación de políticas de tratamiento de datos de caracter personal</p>

            <form class="" action="./php/singUpProcess.php" method="post">

              <div class="group">
                <input type="text"
                      name="nickName" id="NickName" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="NickLabel">Apodo</label>
              </div>

              <div class="group">
                <input type="date"
                      name="bornDate" id="BornDate" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="BornLabel">Fecha de nacimiento</label>
              </div>

              <div class="group">
                <input type="password"
                      name="userPassword" id="userPassword" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="passwordLabel">Contraseña</label>
              </div>

              <div class="group">
                <input type="password"
                      name="userConfirmPassword" id="userConfirmPassword" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="confirmPasswordLabel">Confirmar Contraseña</label>
              </div>
              <div class="group">
                <select name="genre">
                  <option disabled selected value>-- selecciona --</option>
                  <?php echo $optionRollo;?>
                </select>
                <span class="highlight"></span><span class="bar"></span>
                <label id="NickLabel">Tu rollo</label>
              </div>

              <div class="group">
              <input type="submit"
                      class="button"
                      id="mainButton"
                      value="Registrame">
              </div>
            </form>
    			</div>
    		</div>
      </div>

    </div>

    <?php include "./php/footer.php" ?>
  </body>
</html>
