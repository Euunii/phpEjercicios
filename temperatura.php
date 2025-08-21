<?php
$gradosC = $_POST["temperatura"];
$gradosF;
$gradosK;

function celsiusAF($gradosC){
    return ($gradosC * 9/5) + 32;

};
function celsiusAK ($gradosC){
    return($gradosC + 273.15);
};
$gradosF = celsiusAF($gradosC);
$gradosK = celsiusAK($gradosC);

echo "La temperatura ingresa ". $gradosC. "°C es, " . $gradosF."°F convertidos en Fahrenheit y ". $gradosK. "°K convertidos en Kelvin";

?>