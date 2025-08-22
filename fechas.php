<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaActual = new DateTime();

if (isset($_POST["fecha"])) {
    $fechaNacimiento = new DateTime($_POST["fecha"]);
    $edad = $fechaNacimiento->diff($fechaActual)->y;

    echo "<h2>Edad: $edad años</h2>";
} else {
    echo "<h2>No se ingresó ninguna fecha</h2>";
}


?>