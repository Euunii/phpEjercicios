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
if (isset($_POST["nombre"])) {
 $nombreElegido = strtolower(trim($_POST['nombre']));
 $nombresMin = array_map("strtolower", $nombres);
 $posicion = array_search($nombreElegido, $nombresMin);
};
if($posicion !== false ){
    echo "el nombre elegido: ".$nombreElegido. " fue encontrado en la posicion ".($posicion+1);
}else{
    echo "El nombre elegido ".$nombreElegido. " no se encuentra en la lista";
};


?>