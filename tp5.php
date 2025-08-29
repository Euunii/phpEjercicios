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
foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
};
?>
<form action="nombres.php" method="post"> Elegir uno de los nombres e ingresarlo: <input
                type="text" name="nombre"> <input type="submit" value="Enviar">
</form>
<br>
<br>

<?php
function esPalindromo($texto)
{
        $texto = strtolower($texto);
        $texto = str_replace(" ", "", $texto);
        return $texto === strrev($texto);
};
echo "La frase, Anita lava la tina, ";
echo esPalindromo("Anita lava la tina") ? "Es palindromo<br>" : "no es palindromo <br>";
echo "La palabra PHP, ";
echo esPalindromo("PHP") ? "Es palindromo<br>" : "no es palindromo <br>";
echo "La frase, calcular una suma, ";
echo esPalindromo("Calcular una suma") ? "Es palindromo<br>" : "No es palindromo <br>";
?>
<br>
<br>

<?php
$matriz = [];
$suma = 0;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = mt_rand(1, 50);
        $suma += $matriz[$i][$j];
    }
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td align='center'>" . str_pad($matriz[$i][$j], 2, " ", STR_PAD_LEFT) . "</td>";
    }
    echo "</tr>";
    
}
echo "Matriz 4x4: ";
echo "</table>";
echo "<br>Suma total: $suma";
?>

<br>
<br>

<form action="frase.php" method="post"> Ingrese una frase: <input
                type="text" name="frase"> <input type="submit" value="Enviar"> </form>


<br>
<br>

<form action="conversion.php" method="post"> Ingrese un monto en Pesos: <input
                type="text" name="conversion"> <input type="submit" value="Enviar"> </form>
<br>
<br>

<?php
function generarPassword($longitud){
        $password = "";
        $anterior = "";
        for ($i = 0; $i < $longitud; $i++) {
                $caracter = chr(rand(33, 126));

                if ($caracter === $anterior) {
                        $i--;
                }
                $password .= $caracter;
                $anterior = $caracter;
        }
        return $password;
};

echo "contraseña de 12 caracteres: " . generarPassword(12) . "<br>";
echo "contraseña de 16 caracteres: " . generarPassword(16) . "<br>";
echo "contraseña de 8 caracteres: " . generarPassword(8) . "<br>";
?>

<br>
<br>

<form action="adivinanza.php" method="post"> Intente adivinar el numero elegido (1 al 50): <input
                type="text" name="adivinanza"> <input type="submit" value="Enviar"> </form>

<?php
//terminar punto 8
?>
<br>
<br>

<?php
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
};

// Mostrar (antes)
echo "Array antes de ordenar: " . implode(", ", $numeros) . "<br>";

// Ordenamiento manual
for ($i = 0; $i < count($numeros); $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] > $numeros[$j]) {
            // intercambia los valores
            $num = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $num;
        }
    }
}

// Mostrar
echo "Array después de ordenar: " . implode(", ", $numeros);
?>

<br>
<br>

<?php
$frase = "Hola mundo PHP";
echo "Frase: $frase<br>";

// Quitar todo excepto letras y convertir a minúsculas
$texto_limpio = preg_replace('/[^a-záéíóúüñ]/i', '', strtolower($frase));
$total = strlen($texto_limpio);

$v = 0;
$vocales = "aeiouáéíóúü";

// Contar vocales
for ($i = 0; $i < $total; $i++) {
    if (strpos($vocales, $texto_limpio[$i]) !== false) {
        $v++;
    }
}

$c = $total - $v;

echo "Vocales: $v (" . round(($v/$total)*100, 2) . "%)<br>";
echo "Consonantes: $c (" . round(($c/$total)*100, 2) . "%)<br>";
?>