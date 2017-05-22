<?php
  session_start();

if(!isset($_SESSION['login'])){
  header("Location: ../fail.php");
}

include "./php/populateRollo.php";
include "./php/populatePeople.php";
include "./php/getGroupFromUser.php";
include "./php/getMessagesForUser.php";
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
            <p>Tu rollo es el <?php echo $_SESSION['rollo'];?></p>
    		</div>
        <br>

        <div class="messagesContainer">
            <?php for ($i=0; $i < count($mess) ; $i++) {
                echo '<div class="messageContainer">';
                echo "<p class='from' >".$mess[$i][0]."</p>";
                echo "<p class='topic'>".$mess[$i][1]."</p>";
                echo "<p class='content'>".$mess[$i][2]."</p>";
                echo "<p class='date'>".$mess[$i][3]."</p>";
                echo "</div>";
            } ?>
    		</div>
      </div>

      <div id="featured-content">

				<div id="column1">
					<h2>Susurro</h2>

					<form action="../php/sendMail.php" method="post">

            <input type="hidden" name="from" value="<?php echo $_SESSION['idUser'] ?>">
            <input type="hidden" name="toGroup" value=NULL>

            <div class="group">
            <label>Para </label><br>
            <select name="to" required>
              <option disabled selected value>--</option>
              <option  value="0">TODOS</option>
              <?php echo $optionPeople;?>
            </select>
            </div>

            <div class="group">
              <label>Asunto</label><br>
              <input type="text" name="topic" required>
            </div>

            <div class="group">
              <label>Mensaje</label>
              <textarea name="content" rows="6" cols="20" placeholder="Te comento..." required></textarea>
            </div>

            <div class="group">
              <input type="submit" value="Enviar">
            </div>
					</form>
				</div>


        <div id="column2">
          <?php if (mysqli_num_rows($queryGroup)) { ?>

            <h2>Al grupo</h2>
            <form action="../php/sendMail.php" method="post">

              <input type="hidden" name="from" value="<?php echo $_SESSION['idUser'] ?>">
              <input type="hidden" name="to" value=NULL>

              <div class="group">
                <label>Para </label><br>
                <select name="toGroup" required>
                  <option disabled selected value>--</option>
                  <?php echo $optionGroup;?>
                </select>
              </div>

              <input type="hidden" name="topic" value="<?php echo $_SESSION['nick'] ?> comenta">

              <div class="group">
                <label>Mensaje</label>
                <textarea name="content" rows="6" cols="20" placeholder="Gente escuchad..." required></textarea>
              </div>

              <div class="group">
                <input type="submit" value="Enviar">
              </div>
            </form>

          <?php }else{ ?>

            <h2>Sin grupos</h2>
            <p>Parece que aun no perteneces a ningun grupo, pásate a visitar a los grupos disponibles en
            <strong>Zone Music</strong>, puedes formar parte de de tantos grupos como quieras, y enviar mensajes
            a todos los intengrantes de un unico movimiento.</p>
            <p class="button"><a href="./groups.php">Venga</a></p>

            <?php  }?>
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
