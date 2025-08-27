<?php 
$conversion = $_POST["conversion"];
$convertirD;
$convertirE;
$tasa_dolar= 1355;
$tasa_euro= 1570;

function conversionADolar($conversion,$tasa_dolar ){
 return ($conversion / $tasa_dolar);

};
function conversionAEuro($conversion, $tasa_euro){
    return($conversion / $tasa_euro);
};
$convertirD = conversionADolar($conversion, $tasa_dolar);
$convertirE = conversionAEuro($conversion, $tasa_euro);
$mostrarD = number_format($convertirD, 2, ".", " ");
$mostrarE = number_format($convertirE, 2, ".", " ");

echo "EL monto ingresado: $conversion son: ". $mostrarD. " dolares y son: ".$mostrarE. " euros"
?>
