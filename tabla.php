<?php
//ejercicio 6
$num = $_POST["tabla"];
$res=0;
echo "<table border = '1'>";
echo "<tr><th>tabla del $num</th></tr>";
echo "<br>";
for($i = 0; $i <= 10; $i++){
    $res = $i * $num;
 echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td> x </td>";
    echo "<td>" . $num . "</td>";
    echo "<td> = </td>";
    echo "<td> $res </td>";
    echo "</tr>";

};
echo "</table";

?>