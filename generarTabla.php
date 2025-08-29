<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    echo "<h3>Tabla del $numero</h3><table border='1'>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr><td>$numero x $i</td><td>= " . ($numero * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>