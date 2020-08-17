
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Granja el Caracol</title>

	<script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
	<script src="../librerias/materialize/js/materialize.min.js"></script>
	<link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css">
</head>

<body>

	<?php
		// Barra de navegacion
		include_once ('cabecera.php');
	?>
	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<form action="index.php" method="POST" accept-charset="utf-8">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Inicio de sesión</span>
							<!-- Formulario inicio de sesión-->
							<div>
									<div class="input-field">
										<input type="text" name="usuario" value="" placeholder="">
										<label for="usuario">Usuario</label>
									</div>

									<div class="input-field">
										<input type="password" name="password" placeholder="">
										<label for="password">Contraseña</label>
									</div>

							</div>
						</div>
						<div class="card-action">
							<div class="input-field">
								<button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<?php

	if(isset($_REQUEST['btn_guardar'])){
		session_start();
		echo $_SESSION['rol'];

		include ("../conexion/conexion.php");

		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasenia='".$password."';";

		echo $sql;

		$ejecutar= mysqli_query($conexion, $sql);

		if($ejecutar->num_rows != 0){
			$ResultadoConsulta = $ejecutar->fetch_assoc();
			$usuario = $ResultadoConsulta['usuario'];
			$rol = $ResultadoConsulta['rol'];
			session_start();
			$_SESSION['Usuario'] = $usuario;
			$_SESSION['rol'] = $rol;

			if($rol == 'admin'){
				header("location: registrolechon.php");
			}
			else if($rol == 'operador'){
				header("location: registropeso.php");
			}
		}
	}

?>