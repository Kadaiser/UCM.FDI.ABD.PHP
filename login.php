<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Zone Music - Login</title>
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
    					<li class="current_page_item"><a href="signup.php">Register</a></li>
    					<li><a href="./about.php">About</a></li>
    					<li><a href="./contact.php">Contact</a></li>
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
    			<h2 class="title">Bienvenido a Zone Music</h2>
    			<div class="entry">
            <form class="" action="./php/loginprocess.php" method="post">

              <div class="group">
                <input type="text"
                      name="nickName" id="userEmail" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="emailLabel">Apodo</label>
              </div>

              <div class="group">
                <input type="password"
                      name="userPassword" id="userPassword" class="field"
                      required>
                <span class="highlight"></span><span class="bar"></span>
                <label id="passwordLabel">Contraseña</label>
              </div>

              <div class="group">
              <input type="submit"
                      class="button"
                      id="mainButton"
                      value="Entrar">
              </div>
            </form>
    			</div>
          <div class="entry">
            <p style="">Todavia no tienes cuenta en <strong>Zone Music</strong>? <a href="signup.php">Registrate ahora</a></p>
          </div>
    		</div>
      </div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
