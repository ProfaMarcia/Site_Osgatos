<?php
// Conecta ao banco de dados (ajuste os detalhes conforme necessário)
    $conn = new mysqli("localhost", "root", "", "osgatos");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    ?>