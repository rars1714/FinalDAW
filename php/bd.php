<?php

function conectarBD() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newera2";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
    
}

?>