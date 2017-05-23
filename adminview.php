<?php
  session_start();

if(!isset($_SESSION['login'])){
  header("Location: ../fail.php");
}else if($_SESSION['isAdmin'] !== "1"){
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
    <title>Zone Music - Admin</title>
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
    				<h1><a href="index.php">Zone Music- Admin</a></h1>
    			</div>
    			<div id="menu">
    				<ul>
              <li class="logout_page_item"><a href="./php/logout.php">Logout</a></li>
    				</ul>
    			</div>
    		</div>
    		<div id="banner">
    			<div class="content">
    				<div><img src="images/admin.jpg" width="1000" height="400" alt="" /></div>
    			</div>
    		</div>
    	</div>

      <div id="page">
        <div class="post">
          <h1>Dar de alta grupo</h1>
          <form class="" action="./php/addGroup.php" method="post">
            <div class="group">
              <input type="text"
                    name="matter" class="field"
                    required>
              <span class="highlight"></span><span class="bar"></span>
              <label id="passwordLabel">Nombre</label>
            </div>

          </form>
    		</div>
      </div>

    </div>

  </body>
</html>
