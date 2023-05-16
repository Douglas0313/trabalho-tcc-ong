<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mydb";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu um erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Faz a consulta no banco de dados para selecionar todos os perfis
$sql = "SELECT * FROM teste";
$result = $conn->query($sql);

// Exibe os resultados em uma tabela
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nome</th><th>Imagem</th><th>Texto</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td><img src='" . $row["imagem"] . "' alt='" . $row["nome"] . "'></td>";
        echo "<td>" . $row["texto"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Não foram encontrados resultados.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>