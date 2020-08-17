<?php

    try {
        // Iniciamos y Destruimos la sesión
        session_start();
        session_destroy();
        // Redirigimos el usuario al indexsv
        header('location: index.php');
    } catch (Exception $ex) {
        echo $ex;
    }
?>