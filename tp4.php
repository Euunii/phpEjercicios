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
echo "El mayor de estos números (13, 15, 5) es: ". mayordeTres(13, 15, 5);
echo "<br>";
echo "El mayor de estos números (33, 89, 10) es: ". mayordeTres(33, 89, 10);
echo "<br>";
echo "El mayor de estos números (10, 16, 55) es: ". mayordeTres(10, 16, 15);
echo "<br>";
echo "El mayor de estos números (5, 2, 9) es: ". mayordeTres(5, 2, 9);

?>

<?php
$alumnos = [
    ["nombre" => "Ana", "edad" => 16, "nota" => 8],
    ["nombre" => "Rosana", "edad" => 15, "nota" => 9],
    ["nombre" => "Matias", "edad" => 8, "nota" => 6],
    ["nombre" => "Ioanis", "edad" => 17, "nota" => 10],
    ["nombre" => "Tobias", "edad" => 15, "nota" => 10]
];
$promedioNotas = 0;
 foreach($alumnos as $alumno){
    $promedioNotas += $alumnos["nota"];
    $promedio = $promedioNotas / 5;
 };
 echo "las notas son: $promedio";
?> 