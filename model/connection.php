<?php

    // Dados para acesso ao banco

    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbname = "admin_cinemas";

    // Criando a conexão com o banco de dados
    $connection = new mysqli($host, $user, $password, $dbname);

    $connection->set_charset("utf8");
    
    // Estabelecendo a conexão
    if (!$connection) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . $connection->connect_errno . PHP_EOL;
        echo "Debugging error: " . $connection->connect_errno . PHP_EOL;
        exit;
    }

    // echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
    
    // $connection->close();
?>