<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedido</title>
</head>
<body>
Datos del cliente:

Nombre:<br> <?php echo $_POST['nom'];?><br>
Teléfono: <br> <?php echo $_POST['tel'];?><br>
E-mail:<br> <?php echo $_POST['mail'];?><br>
Dirección:<br><?php echo $_POST['dir'];?><br>


Datos del pedido:<br>
Primer plato: <br>
<?php echo $_POST['primero'];?><br>
Segundo plato: <br>
<?php echo $_POST['segundo'];?>
Bebida: <br>
<?php if($_POST['cafeote']=="C"){
		echo "Café";
	}
	else {
		echo "Té";
	}
?>
<br>
<?php if($_POST['obs']==""){
		echo "Sin Observaciones";
	}
	else {
		echo "Observaciones: <br>";
		echo $_POST['obs'];
	}
	?>
<br>
<?php if(isset($_POST['condi'])){
		echo "Acepta las condiciones";
	}
	else {
		echo "No acepta las condiciones";
	};
	?>
</body>
</html>