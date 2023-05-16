<?php 
require 'config-banco-apoia.php';



   $nome = filter_input(INPUT_POST, 'nome');
   $cpf = filter_input(INPUT_POST, 'cpf');
   $telefone_celular = filter_input(INPUT_POST, 'telefone');
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   $senha = filter_input(INPUT_POST, 'senha');
   $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

 



   $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email OR cpf = :cpf");
   $sql->bindValue(':email', $email);
   $sql->bindValue(':cpf', $cpf);
   $sql->execute();

   if($sql->rowCount() === 0) {
      
      $sql = $pdo->prepare("INSERT INTO usuario (nome, senha, telefone_celular, cpf, email) VALUES (:nome, :senha, :telefone_celular, :cpf, :email)");

      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':senha', $hashSenha);
      $sql->bindValue(':telefone_celular', $telefone_celular);
      $sql->bindValue(':cpf', $cpf);
      $sql->bindValue(':email', $email);
      $sql->execute();

      echo '<script>alert("Cadastro Realizado com sucesso");</script>';
      echo '<script>window.location.href = "usuario-pagina.php?nome=' . urlencode($nome) . '";</script>';
      exit;
      
     
   }else {
      
    echo '<script>alert("Email ou CPF já cadastrados. Tente novamente")</script>';
    echo '<script>window.location.href = "cadastrar-usuario.html";</script>';
  exit;



   }



?>