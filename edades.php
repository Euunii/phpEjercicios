<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edadIngresada = $_POST["edades"];
    $lista = array_map('intval', explode(",", $edadIngresada));

    function contMyM($edades)
    {
        $mayores = 0;
        $menores = 0;
        foreach ($edades as $edad) {
            if ($edad >= 18) {
                $mayores++;
            } else {
                $menores++;
            }
        }
        echo "Mayores de edad: $mayores<br>";
        echo "Menores de edad: $menores<br>";
    }
    contMyM($lista);
}
?>


