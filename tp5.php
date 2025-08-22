<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaActual = new DateTime();

$final = new DateTime(date("Y"). "-12-31");

$diferencia = $fechaActual -> diff($final);

echo "Hoy es: ". $fechaActual->format("d/m/Y") . "<br>";
echo "Faltan ". $diferencia -> days . " días para fin de año";

?>
<br>

<form action="fechas.php" method="post"> Ingrese su fecha de nacimiento (dd/mm/yyyy): <input
        type="text" name="fecha"> <input type="submit" value="Enviar"> 
</form>