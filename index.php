<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>

	<link rel="stylesheet" type="text/css" href="stylecal.css">
</head>
<body>
	<h1 id="titulo"> Calculadora  SUMA</h1>

	<p id="subtitulo">Ingreso de datos</p> 

	<form method="post">
		<p id="numero">Numero 1: <input type="text" name="num1" autocomplete="off" required></p>
		<p id="numero">Numero 2: <input type="text" name="num2" autocomplete="off" required></p>
		<input type="submit" name="calcular" value="Calcular">
		
	</form>
	<br>
	<?php


	

	if (isset($_POST['calcular'])) { 
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$resu = $num1 + $num2; 
		echo "El resultado es :";
	 	echo $resu;
	 } 
	?>

</body> 
</html>

