<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="icone.png" type="image/x-icon">

<title>Histórias das ONGS</title>
</head>
<body style="background-color: azure;">
<div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
<h1 class="w3-center w3-teal w3-round-large w3-margin">Histórias das ONG's</h1>
<table class="w3-table-all w3-centered w3-text-black">
<thead>
<tr class="w3-center w3-teal ">
<th>Nome Da ONG</th>
<th>Histórias</th>
</tr>
<thead>


<?php
require_once 'config-banco-apoia.php';


// Realiza a consulta no banco de dados
$sql = "SELECT nome, historia FROM historia_da_ong";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Verifica se há resultados
if ($stmt->rowCount() > 0) {
  // Exibe os resultados em uma tabela na página


  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['historia'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "Nenhuma história encontrada.";
}

// Fecha a conexão com o banco de dados
$stmt = null;
$pdo = null;

?>


</table>

<br>

<button name="btnvoltar"  onclick="location.href='ONGpn.php'" class="w3-button w3-teal w3-cell w3-round-large w3-right w3-margin-right">
<i class=""></i> Voltar
</button>


</div>
</body>
</html>