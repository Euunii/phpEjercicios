<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaActual = new DateTime();

$final = new DateTime(date("Y") . "-12-31");

$diferencia = $fechaActual->diff($final);

echo "Hoy es: " . $fechaActual->format("d/m/Y") . "<br>";
echo "Faltan " . $diferencia->days . " días para fin de año";

?>
<br>

<form action="fechas.php" method="post"> Ingrese su fecha de nacimiento (año/mes/dia): <input
                type="text" name="fecha"> <input type="submit" value="Enviar">
</form>

<br>
<br>

<?php
$nombres = [
        'Ana',
        'Bianca',
        'Camila',
        'Pedro',
        'Lucia',
        'Melisa',
        'Emanuel',
        'Nicolas',
        'Antonela',
        'Tomas'
];
foreach($nombres as $nombre){
        echo $nombre. "<br>";
};
?>
<form action="nombres.php" method="post"> Elegir uno de los nombres e ingresarlo: <input
                type="text" name="nombre"> <input type="submit" value="Enviar">
</form>
<br>
<br>

<?php
function esPalindromo($texto){
        $texto = strtolower($texto);
        $texto = str_replace(" ", "", $texto);
        return $texto === strrev($texto);
};
echo "La frase, Anita lava la tina, ";
echo esPalindromo("Anita lava la tina")? "Es palindromo<br>": "no es palindromo <br>";
echo "La palabra PHP, ";
echo esPalindromo("PHP")? "Es palindromo<br>": "no es palindromo <br>";
echo "La frase, calcular una suma, ";
echo esPalindromo("Calcular una suma")? "Es palindromo<br>": "No es palindromo <br>";
?>
<br>
<br>

<?php
$matriz = [];
$suma = 0;
for ($i = 0; $i < 4; $i++){
        for($j = 0; $j < 4; $j++){
                $nums = mt_rand(1,50);
                $matriz[$i][$j] = $nums;
                $sum += $nums;
        }
}
echo "Matriz: ";
for ($i = 0; $i < 4; $i++){
        for($j = 0; $j < 4; $j++){
                echo str_pad($matriz[$i][$j], 4, "", STR_PAD_LEFT);
        }
        echo "\n";
        }

 echo "\n La suma total es: $sum \n";


?>