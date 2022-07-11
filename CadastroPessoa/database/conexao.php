<?php
// $x = 0;

// $conexao = mysqli_connect("sql8.freemysqlhosting.net", "sql8504538", "kuAzajcmal", "sql8504538");


// // só entra aqui se deu erro ao conectar com o banco.
// if (!$conexao) {
//     echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

    $servername = "sql8.freemysqlhosting.net";
    $database ="sql8505623";
    $username ="sql8505623";
    $password = "kuAzajcmal";
    $charset = "utf8";

    try {
        $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Okay";
        
        return $pdo;
    }
    
    catch (PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }
