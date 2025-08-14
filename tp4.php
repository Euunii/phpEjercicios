<?php
function mayordeTres($a, $b, $c)
{
    $mayor = $a;
    if ($b > $mayor) {
        $mayor = $b;
    } else if ($c > $mayor) {
        $mayor = $c;
    }
    return $mayor;
};
echo "El mayor de estos números (13, 15, 5) es: " . mayordeTres(13, 15, 5);
echo "<br>";
echo "El mayor de estos números (33, 89, 10) es: " . mayordeTres(33, 89, 10);
echo "<br>";
echo "El mayor de estos números (10, 16, 55) es: " . mayordeTres(10, 16, 15);
echo "<br>";
echo "El mayor de estos números (5, 2, 9) es: " . mayordeTres(5, 2, 9);

?>
<br>
<br>
<?php
$alumnos = [
    ["nombre" => "Ana", "edad" => 16, "nota" => 8],
    ["nombre" => "Rosana", "edad" => 15, "nota" => 9],
    ["nombre" => "Matias", "edad" => 8, "nota" => 6],
    ["nombre" => "Ioanis", "edad" => 17, "nota" => 10],
    ["nombre" => "Tobias", "edad" => 15, "nota" => 10]
];
$promedioNotas = 0;
foreach ($alumnos as $alumno) {
    $promedioNotas += $alumno["nota"];
};
$promedio = $promedioNotas / 5;

echo "<table border = '1'>";
echo "<tr><th>Nombre</th><th>Edad</th><th>Notas</th>";
echo "<br>";
foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" . $alumno['nombre'] . "</td>";
    echo "<td>" . $alumno['edad'] . "</td>";
    echo "<td>" . $alumno['nota'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "El promedio de las notas son: $promedio";
?>
<br>
<br>

<?php
//Ejercicio 3
$cadena = "Programar en PHP es divertido";
$letra = "e";
$cant = substr_count($cadena, $letra);
$may = strtoupper($cadena);
echo "En la cadena de texto '$cadena': <br>";
echo "La longitud de la cadena es: " . strlen($cadena);
echo "<br>";
echo "La letra '$letra' aparece '$cant' en la cadena de texto";
echo "<br>";
echo "Cadena invertida: " . strrev($cadena);
echo "<br>";
echo "Cadena en mayúsculas: " . $may;
?>
<br>
<br>

<?php
//Ejercicio 4

$numPar = [];
function numerosAleatorios($cant, $min, $max)
{
    $nums = [];
    for($i = 0; $i < $cant; $i++){
        $numero = rand($min, $max);
        $nums []= $numero;
    }
    return $nums;
};
$numeros = numerosAleatorios(10, 1, 100);
foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $numPar[] = $num;
    };
}
echo "Números: ".implode(", ", $numeros);
echo "<br>";
echo "Números pares: ".implode(", ", $numPar);
echo "<br>";
echo "Número mayor: ".max($numeros). "<br>";
echo "Número menor: ".min($numeros). "<br>";
?>
<br>
<br>

<?php
//Ejercicio 5
function factorial($num){
    if ($num <= 1){
        return 1;
    }
    return $num * factorial($num-1);
};
echo "Factorial de 5: ".factorial(5)."<br>";
echo "Factorial de 7: ".factorial(7)."<br>"
?>

<br>
<br>

<form action="tabla.php" method="post"> Ingrese un numero: <input
type="text" name="tabla"> <input type="submit" value="Enviar"> </form>
