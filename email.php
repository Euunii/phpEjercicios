<?php
$dominios_permitidos = ['gmail.com', 'hotmail.com', 'yahoo.com'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Formato de email inválido";
    } else {
        $dominio = explode('@', $email)[1];
        if (in_array($dominio, $dominios_permitidos)) {
            echo "mail válido y dominio permitido";
        } else {
            echo "Dominio no permitido. Solo: " . implode(", ", $dominios_permitidos);
        }
    }
}
?>