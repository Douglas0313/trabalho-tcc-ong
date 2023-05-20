<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

require_once 'config-banco-apoia.php';

$sql = $pdo->prepare("SELECT codigo, email, nome, senha FROM usuario WHERE email = :email;");
$sql->bindParam(':email', $email);
$sql->execute();

$linha = $sql->fetch(PDO::FETCH_ASSOC);

if($linha != null)
{
    if (password_verify($senha, $linha['senha'])) {

        // Senha correta, armazenar informações do usuário na sessão e redirecionar para a página inicial
        $_SESSION['usuario_codigo'] = $linha['codigo'];
        $_SESSION['usuario_nome'] = $linha['nome'];
        header("Location: usuario-pagina.php?nome=" . urlencode($linha['nome']));
        exit();



    } else {
        echo "<script>alert('Email ou senha incorretos. Tente novamente!');</script>";
        echo "<script>window.location.href='login-usuario.html';</script>";
        exit();
    }
    
}    

?>
