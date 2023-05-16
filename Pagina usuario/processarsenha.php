
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nova_senha = $_POST['nova_senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Conectar ao banco de dados
    require_once 'config-banco-apoia.php';

    // Verificar se as senhas são iguais
    if ($nova_senha != $confirma_senha) {
        echo "<script>alert('Erro ao tentar atualizar a senha. Tente novamente!');</script>";
        echo "<script>window.location.href='redifinirsenha.php';</script>";
        exit();
    } else {
        // Gerar hash da nova senha
        $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

        // Atualizar a senha no banco de dados
        $sql = $pdo->prepare("UPDATE usuario SET senha=:senha WHERE email=:email");
        $sql->bindValue(':senha', $nova_senha_hash);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql) {
            // Senha atualizada com sucesso, redirecionar para a página de login
        echo "<script>alert('Senha Atualizada com sucesso!');</script>";
        echo "<script>window.location.href='login-usuario.html';</script>";
        exit();

        } 
    }
}
?>