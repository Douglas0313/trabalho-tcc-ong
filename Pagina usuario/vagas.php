<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Realiza a consulta no banco de dados
$sql = "SELECT nomeOng, titulo, valorSalario, endereco, descricao FROM Vagas";
$result = mysqli_query($conn, $sql);

// Verifica se há resultados
if (mysqli_num_rows($result) > 0) {
  // Exibe os resultados na página em uma lista
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>Nome da ONG: " . $row['nomeOng'] . "</li>";
    echo "<li>Título da vaga: " . $row['titulo'] . "</li>";
    echo "<li>Valor do salário: " . $row['valorSalario'] . "</li>";
    echo "<li>Endereço: " . $row['endereco'] . "</li>";
    echo "<li>Descrição: " . $row['descricao'] . "</li>";
    echo "<br>";
  }
  echo "</ul>";
} else {
  echo "Nenhuma vaga encontrada.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>