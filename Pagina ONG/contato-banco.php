<?php
require_once 'config-banco-apoia.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $preferencia_contato = filter_input(INPUT_POST, 'contato_email', 'contato_telefone', 'contato_whatsapp');
    $mensagem = filter_input(INPUT_POST, 'mensagem');
    $horario = filter_input(INPUT_POST, 'horario_manha', 'horario_tarde', 'horario_noite');

    $sql = $pdo->prepare("INSERT INTO contatos (nome, email, telefone, mensagem, preferencia_contato, horario) VALUES (:nome, :email, :telefone, :mensagem, :preferencia_contato, :horario)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':mensagem', $mensagem);
    $sql->bindValue(':preferencia_contato', $preferencia_contato);
    $sql->bindValue(':horario', $horario);
    
    if ($sql->execute()) {
        echo '<script>alert("Mensagem enviada com sucesso!. Entraremos em contato o mais breve possível, obrigado")</script>';
    } else {
        echo '<script>alert("Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.")</script>';
    }
}
?>

