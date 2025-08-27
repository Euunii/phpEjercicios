<?php 
$frase = $_POST["frase"];

$cantPalabras = str_word_count($frase);
$letras = str_replace(" ", "", $frase); 
$cantLetras = strlen($letras);

$palabras = explode(" ", $frase); 
$palabraLarga = "";
foreach ($palabras as $p) {
    if (strlen($p) > strlen($palabraLarga)) {
        $palabraLarga = $p;
    }
}

echo "Frase: \"$frase\"<br>";
echo "Cantidad de palabras: $cantPalabras<br>";
echo "Cantidad de letras: $cantLetras<br>";
echo "Palabra más larga: $palabraLarga<br>";
?>