<?php session_start();

$idGroup = $_GET["id"];

include "./php/groupInfo.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Zone Music - Group</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
  	<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
  	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen" />
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
    				<div><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($img).'" width="1000" height="400" alt=""/>'; ?></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
    			<h2 class="title"><a href="#"><?php echo $name?></a></h2>
    			<div class="entry">
            <p><?php echo $des ?></p>
    			</div>
    		</div>
      </div>

      <div id="featured-content">
				<div id="column1">
					<h2>Miembros</h2>
					<p>El grupo de <strong><?php echo $name; ?></strong> posee actualmente <?php echo $menbers ?> miembros en plantilla. Como estais en el mismo grupo, los mensajes dirigidos
            serán compartidos en el dashboard de usuarios de manera común. Esto sí que es comodidad!!</p>
            <?php if (isset($_SESSION['login'])) { ?>
              <p class="button"><a href="./userview.php">Dashboard</a></p>
            <?php } ?>

				</div>
				<div id="column2">
					<h2>Visitas</h2>
					<p>Acumuladas <?php echo $visits?> visitas. Ser famoso es ser visto, y brillar por encima de los demas, en el mundo del arte, esta guerra incontable es importante.</p>
				</div>
				<div id="column3">
					<h2>La edad</h2>
					<p>La media de edad de los usuarios de este grupo es <?php echo "X"; ?>, y los miembros mas jovenes rondan los <?php echo $min ?>,
            mientras que los carrozas ya rozan los <?php echo $max ?>.</p>
				</div>
			</div>

    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
