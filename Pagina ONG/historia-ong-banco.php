
<?php

require_once 'config-banco-apoia.php';


$nome = filter_input(INPUT_POST, 'nome');
$historia = filter_input(INPUT_POST, 'mensagem');


$sql = $pdo->prepare("INSERT INTO historia_da_ong (nome, historia) VALUES (:nome, :historia)");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':historia', $historia);
$sql->execute();


echo '<script>alert("História adicionada com sucesso!")</script>';
echo '<a href="ONGpn.php">Voltar</a>';







?>