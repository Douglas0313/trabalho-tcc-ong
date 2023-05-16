
<?php
require_once 'config-banco-apoia.php';

// Verifica se a conexão foi bem-sucedida


// Insere os dados do formulário no banco de dados
$nome = filter_input(INPUT_POST, 'nome');
$titulo = filter_input(INPUT_POST, 'titulo');
$valorSalario = filter_input(INPUT_POST, 'valorSalario');
$descricao = filter_input(INPUT_POST, 'descricao');





$sql = $pdo->prepare("INSERT INTO vagas (nome_Empresa, titulo, valor_salario, descricao) VALUES (:nome, :titulo, :valorSalario, :descricao)");



$sql->bindValue(':nome', $nome);
$sql->bindValue(':titulo', $titulo);
$sql->bindValue(':valorSalario', $valorSalario);
$sql->bindValue(':descricao', $descricao);
$sql->execute();


echo '<script>alert("Vaga cadastrada com sucesso!")</script>';
echo '<a href="adicionar-vaga.php">Voltar</a>';





?>
