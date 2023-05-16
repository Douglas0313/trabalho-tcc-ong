<?php
require_once 'config-banco-apoia.php';

// Realiza a consulta no banco de dados
$sql = "SELECT nome_Empresa, titulo, valor_salario, descricao FROM Vagas";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Verifica se há resultados
if ($stmt->rowCount() > 0) {
  // Exibe os resultados em uma tabela na página
  echo "<table>";
  echo "<tr><th>Nome da ONG</th><th>Título da Vaga</th><th>Valor do Salário</th><th>Descrição</th></tr>";
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nome_Empresa'] . "</td>";
    echo "<td>" . $row['titulo'] . "</td>";
    echo "<td>" . $row['valor_salario'] . "</td>";
    echo "<td>" . $row['descricao'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "Nenhuma vaga encontrada.";
}

// Fecha a conexão com o banco de dados
$stmt = null;
$pdo = null;

?>
