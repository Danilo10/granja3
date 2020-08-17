<?php
date_default_timezone_set("America/Mexico_city");
$fecha_actual= date("y-m-d H:i:s");

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro De Lechon</title>

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
            if($_SESSION['rol'] == 'admin'){
	?>
	<div class="container">
		<div class="row">
			<!-- Formulario Registro-->
			<div >
				<h5 class="blue-text">REGISTRO DE LECHON</h5><br><br>
				<form action="registrolechon.php" method="POST" accept-charset="utf-8">

					<div class="input-field col l4">
						<input type="text" name="codigo" value="" placeholder="">
						<label for="codigo">Código</label>
					</div>

					<div class="input-field col l4">
						<input type="text" name="precio" value="" placeholder="">
						<label for="precio">Precio</label>
					</div>

					<div class="input-field col l4">
						<input type="text" name="peso" value="" placeholder="">
						<label for="peso">Peso</label>
					</div>

					<div class="input-field col l12">
						<input type="text" name="descripcion" value="" placeholder="">
						<label for="Descripcion">Descripcion</label>
					</div>

					<div class="input-field col l6">
						<input type="text" name="edad" value="" placeholder="">
						<label for="edad">Edad</label>
					</div>

					<div class="input-field col l6">
						<input type="text" name="fecha" value="<?php echo $fecha_actual?>" placeholder="">
						<label for="fecha">Fecha</label>
					</div>

					<div class="input-field col l4">
						<button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
            }
            else{
                header("location: registropeso.php");
            }
        }
    ?>
</body>

</html>

<?php

	if(isset($_REQUEST['btn_guardar'])){

		include ("../conexion/conexion.php");

		$codigo = $_POST['codigo'];
		$precio = $_POST['precio'];
		$peso = $_POST['peso'];
		$descripcion = $_POST['descripcion'];
		$edad = $_POST['edad'];
		$fecha = $_POST['fecha'];

		$sql = "INSERT INTO registrolechon(codigo_animal, precio, peso, descripcion, edad, fecha_compra)
								   VALUES ('$codigo', '$precio', '$peso', '$descripcion', '$edad', '$fecha')";
		$ejecutar= mysqli_query($conexion, $sql);

		if ($ejecutar){
			header("Location: listadolechon.php");
		}
	}

?>