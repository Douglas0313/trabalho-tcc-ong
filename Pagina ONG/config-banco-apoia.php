<?php 


$db_name = 'banco';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = 'admin@123';

$pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_user, $db_password);

try {
    $pdo = new PDO($dsn, $username, $password);
    // Fazer operações no banco de dados
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}


?>