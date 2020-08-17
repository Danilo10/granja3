<?php
date_default_timezone_set("America/Mexico_city");
$fecha_actual= date("y-m-d H:i:s");

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro de peso</title>

	<script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
	<script src="../librerias/materialize/js/materialize.min.js"></script>
	<link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css">
</head>

<body>

	<?php
		// Barra de navegacion
        include_once ('cabecera.php');
        //session_start();
        if (!empty($_SESSION["Usuario"])) {
			//Si no hay sesión activa, no se debe mostrar el menu
			//echo $_SESSION['rol'];

            if($_SESSION['rol'] === 'operador'){
	?>
	<div class="container">
		<div class="row">

			<!-- Formulario Registro-->
			<div>
				<h5 class="blue-text">REGISTRO MENSUAL PESO DE LECHON</h5><br><br>
				<form action="registropeso.php" method="POST" accept-charset="utf-8">

					<div class="input-field col l4">
						<input type="text" name="codigo" value="" placeholder="">
						<label for="codigo">Código animal</label>
					</div>

					<div class="input-field col l6">
						<input type="text" name="peso" value="" placeholder="">
						<label for="peso">Peso</label>
					</div>

					<div class="input-field col l6">
						<input type="text" name="fecha" value="<?php echo $fecha_actual?>" placeholder="">
						<label for="fecha">Fecha</label>
					</div>

					<div class="input-field col l12">
						<button type="submit" class="blue btn-small" name="btn_guardar">Registrar Peso</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
            }
            else{
                header("location: index.php");
            }
        }
    ?>
</body>

</html>

<?php

	if(isset($_REQUEST['btn_guardar'])){

		include ("../conexion/conexion.php");

		$codigo = $_POST['codigo'];
		$peso = $_POST['peso'];
		$fecha = $_POST['fecha'];

		$sql = "INSERT INTO registropeso(codigo_animal, peso, fecha_registro) VALUES ('$codigo', '$peso', '$fecha')";
		$ejecutar= mysqli_query($conexion, $sql);

		$sql2 = "UPDATE registrolechon SET peso = ".$peso." WHERE codigo_animal = '".$codigo."';"; 
		
		$ejecutar2= mysqli_query($conexion, $sql2);

		if ($ejecutar){
			header("location: listadopesos.php");
		}
	}

?>