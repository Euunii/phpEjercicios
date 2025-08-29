<?php
function esPrimo($numero)
{
    if ($numero < 2) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

$primero = 10;
$final = 50;
$primos = [];

for ($i = $primero; $i <= $final; $i++) {
    if (esPrimo($i)) {
        $primos[] = $i;
    }
}

echo "Números primos entre $primero y $final: " . implode(", ", $primos) . "<br>";
echo "Total encontrados: " . count($primos);
?>

<br>
<br>

<?php
$meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];
$temperaturas = [25, 28, 22, 19, 16, 12, 11, 13, 16, 19, 23, 26];

$maxima = max($temperaturas);
$minima = min($temperaturas);
$promedio = array_sum($temperaturas) / count($temperaturas);

$mes_maxima = $meses[array_search($maxima, $temperaturas)];
$mes_minima = $meses[array_search($minima, $temperaturas)];

echo "Temperatura máxima: " . $maxima . "°C en " . $mes_maxima . "<br>";
echo "Temperatura mínima: " . $minima . "°C en " . $mes_minima . "<br>";
echo "Promedio anual: " . round($promedio, 1) . "°C";
?>

<br>
<br>
<?php
//hacer punto 3

?>
<form action="conversor.php" method="post"> Ingrese un numero a convertir: <input
        type="text" name="conversor"> <input type="submit" value="Enviar"> </form>

<form action="generarTabla.php" method="post"> Ingrese un numero: <input
        type="text" name="numero"> <input type="submit" value="Enviar"> </form>

<br>
<br>

<form action="email.php" method="post"> Ingrese una direccion de email: <input
        type="text" name="email"> <input type="submit" value="Enviar"> </form>


<br>
<br>

<form action = "imc.php" method="post">
    Peso (kg): <input type="number" step="0.1" name="peso" required><br>
    Altura (m): <input type="number" step="0.01" name="altura" required><br>
    <input type="submit" value="Calcular IMC">
</form>
