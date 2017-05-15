<?php session_start();

if(!isset($_SESSION['login'])){
  header("Location: ../fail.php");
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Zone Music - <?php echo $_SESION['nick'] ?></title>
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
              <li><a href="./about.php">About</a></li>
    					<li><a href="./contact.php">Contact</a></li>
              <li class="logout_page_item"><a href="./php/logout.php">Logout</a></li>
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
    			<h2 class="title"><a href="#">Bienvenido <?php echo $_SESSION['nick'] ?> </a></h2>
    			<div class="entry">
            <p>Estas son las cosas que han estado ocurriendo mientras estabas fuera</p>
    			</div>
    		</div>
      </div>
    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
