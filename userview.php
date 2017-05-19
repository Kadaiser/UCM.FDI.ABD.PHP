<?php session_start();

if(!isset($_SESSION['login'])){
  header("Location: ../fail.php");
}

include "./php/populateRollo.php";
include "./php/populatePeople.php";

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Zone Music - User</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
  	<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
  	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="./css/miniForm.css" rel="stylesheet" type="text/css" media="screen" />
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
    			<h2 class="title"><a href="#">Bienvenido <?php echo $_SESSION['nick']; ?> </a></h2>
    			<div class="entry">
            <p>Tu rollo es el <?php echo $_SESSION['rollo'] ?></p>
    			</div>
          <div class="entry">
            <p>Estas son las cosas que han estado ocurriendo mientras estabas fuera</p>
    			</div>
    		</div>
        <br>

        <div class="post">
    			<div class="entry">
    			</div>
    		</div>
      </div>

      <div id="featured-content">
				<div id="column1">
					<h2>Susurro</h2>

					<form action="../php/senMail.php" method="post">

            <div class="group">
            <label>Para </label><br>
            <select name="to" required>
              <option disabled selected value>--</option>
              <?php echo $optionPeople;?>
            </select>
            </div>

            <div class="group">
              <label>Asunto</label><br>
              <input type="text" name="topic" value="" required>
            </div>

            <div class="group">
              <label>Mensaje</label>
              <textarea name="content" rows="6" cols="20" placeholder="Te comento..."></textarea>
            </div>

            <div class="group">
              <input type="submit" name="" value="Enviar">
            </div>
					</form>
				</div>

				<div id="column2">
					<h2>Grupo: <?php echo "El que sea valla!!"; ?></h2>
					<p><img src="images/img07.jpg" width="300" height="150" alt="" /></p>
				</div>

				<div id="column3">
					<h2>Cambiar tu royo</h2>
          <form class="" action="./php/setRolloInUser.php" method="post">
            <div class="group">
              <label>Cambiar mi rollo a </label>
              <select name="genre">
                <option disabled selected value>--</option>
                <?php echo $optionRollo;?>
              </select>
            </div>
            <div class="group">
              <input type="submit" value="Mola!">
            </div>
          </form>
				</div>
			</div>



    </div>

    <?php include "./php/footer.php" ?>

  </body>
</html>
