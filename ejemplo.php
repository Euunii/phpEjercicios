<?php
$nombre = 'Tomas';
$$nombre = 'Ramirez';
echo "$nombre ${$nombre}";
?>


<?php
$alumnos = [
[
"alumno" => "Tomas",
"apellido" => "Ramirez",
"edad" => 19
],
[
"alumno" => "Lara",
"apellido" => "Soto",
"edad" => 17
],
[
"alumno" => "Ana", 
"apellido" => "Romero",
"edad" => 15
]
];
echo "La edad de la alumna ".$alumnos[1]["alumno"]. "es: ".$alumnos[1]["edad"];
?>

<br>

<?php
$arr = [
"uno" => 1, 
"dos" => 2, 
"tres" => 3
]; 
foreach ($arr as $clave => &$valor) {
 $valor *= 2; 
} 
print_r($arr); 

?>
