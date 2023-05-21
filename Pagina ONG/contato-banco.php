<?php
require_once 'config-banco-apoia.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $preferencia_contato = filter_input(INPUT_POST, 'contato');
    $mensagem = filter_input(INPUT_POST, 'mensagem');
  
    $sql = $pdo->prepare("INSERT INTO contatos (nome, email, telefone, mensagem, preferencia_contato) VALUES (:nome, :email, :telefone, :mensagem, :preferencia_contato)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':mensagem', $mensagem);
    $sql->bindValue(':preferencia_contato', $preferencia_contato);
   
    
    if ($sql->execute()) {
        echo '<script>alert("Mensagem enviada com sucesso!. Entraremos em contato o mais breve possível, obrigado")</script>';
        echo '<a href="../index.php">Voltar para a página inicial</a>';
    } else {
        echo '<script>alert("Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.")</script>';
    }
}
?>

