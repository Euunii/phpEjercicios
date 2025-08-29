<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso = (float)$_POST['peso'];
    $altura = (float)$_POST['altura'];
    $imc = $peso / ($altura * $altura);
    
    echo "Peso: $peso kg<br>";
    echo "Altura: $altura m<br>";
    echo "IMC: " . round($imc, 1) . "<br>";
    
    if ($imc < 18.5) {
        echo "Categoría: Bajo peso";
    } elseif ($imc < 25) {
        echo "Categoría: Peso normal";
    } elseif ($imc < 30) {
        echo "Categoría: Sobrepeso";
    } else {
        echo "Categoría: Obesidad";
    }
}
?>