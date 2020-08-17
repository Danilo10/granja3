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
            <!-- Tabla-->
            <div >
                <table>
                    <h5 class="blue-text">LISTADO</h5><br><br>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Código</th>
                            <th>Precio</th>
                            <th>Peso En Lbs</th>
                            <th>Descripcion</th>
                            <th>Edad</th>
                            <th>Fecha Compra</th>
                            <th></th>
                        </tr>
                    </thead>

                    <?php
                include ("../conexion/conexion.php");
                $sql=" SELECT * FROM registrolechon";
                $ejecutar2= mysqli_query($conexion, $sql);
                while($fila = mysqli_fetch_array($ejecutar2)){


            ?>
                    <tbody>
                        <tr>
                            <td><?php echo $fila[0];?></td>
                            <td><?php echo $fila[1];?></td>
                            <td><?php echo $fila[2];?></td>
                            <td><?php echo $fila[3];?></td>
                            <td><?php echo $fila[4];?></td>
                            <td><?php echo $fila[5];?></td>
                            <td><?php echo $fila[6];?></td>
                            <td><a href="#" class="btn btn_small">Editar</a></td>
                        </tr>
                    </tbody>

                    <?php 
            }
            ?>
                </table>
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