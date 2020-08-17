<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Granja El Caracol</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
                @session_start();
                if (!empty($_SESSION["Usuario"])) {
                    //Si no hay sesión activa, no se debe mostrar el menu
                    if($_SESSION["Usuario"] == 'admin'){
                ?>
                        <li><a href="registrolechon.php">Registrar lechón</a></li>
                        <li><a href="listadolechon.php">Listado de lechón</a></li>
                        <li><a href="registroventa.php">Registrar venta</a></li>
                        <li><a href="listadoventas.php">Listado ventas</a></li>
                    <?php
                    }else if($_SESSION["Usuario"] == 'operador'){
                    ?>
                        <li><a href="registropeso.php">Registrar pesos</a></li>
                        <li><a href="listadopesos.php">Listado de pesos</a></li>
                    <?php
                    }
                    ?>
                    <li><a href="logout.php">Cerar sesión</a></li>
            <?php
                }
            ?>
            </ul>
        </div>
    </nav>
</body>
</html>
    