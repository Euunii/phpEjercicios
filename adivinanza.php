<?php
session_start();
if (!isset($_SESSION['num'])) {
    $_SESSION['num'] = rand(1, 50);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adivinanza'])) {
    $adivinanza = $_POST['adivinanza'];
    $num = $_SESSION['num'];
    if ($adivinanza == $num) {
        echo "¡Felicidades, haz adivinado el número $num!";
        session_destroy();
    } elseif ($adivinanza < $num) {
        echo "El número es MAYOR al seleccionado, intentelo de nuevo";
    } else {
        echo "EL número es MENOR al seleccionado, intentelo de nuevo";
    }
}
?>