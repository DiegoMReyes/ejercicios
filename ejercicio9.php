<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method='POST'>

	Ingrese el valor de LapTop: <input name='valor' type='number' min='0'  >
	<input type='submit' >


</form>


<?php 


if(isset($_POST['valor'])){

$valor = $_POST['valor'];

	echo "Vale ".$valor;

}


 ?>


</body>
</html>