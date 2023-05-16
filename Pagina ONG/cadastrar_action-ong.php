<?php 
require_once 'config-banco-apoia.php';


   $nome = filter_input(INPUT_POST, 'nome');
   $cnpj = filter_input(INPUT_POST, 'cnpj');
   $telefone_celular = filter_input(INPUT_POST, 'telefone');
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   $senha = filter_input(INPUT_POST, 'senha');
   $hashSenha = password_hash($senha, PASSWORD_DEFAULT);



   $sql = $pdo->prepare("SELECT * FROM ongs WHERE email = :email OR cnpj = :cnpj");
   $sql->bindValue(':email', $email);
   $sql->bindValue(':cnpj', $cnpj);
   $sql->execute();

   if($sql->rowCount() === 0) {
      
      $sql = $pdo->prepare("INSERT INTO ongs (nome, cnpj, senha, email, telefone_celular) VALUES (:nome, :cnpj, :senha, :email, :telefone_celular)");

      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':cnpj', $cnpj);
      $sql->bindValue(':senha', $hashSenha);
      $sql->bindValue(':email', $email);
      $sql->bindValue(':telefone_celular', $telefone_celular);
      $sql->execute();

      echo '<script>alert("Cadastro Realizado com sucesso");</script>';
      echo '<script>window.location.href = "ONGpn.php?nome=' . urlencode($nome) . '";</script>';
      exit;
      

   }else {
      
    echo '<script>alert("Email ou CNPJ já cadastrados")</script>';
    echo '<a href="cadastrar-ong.html">Tente novamente</a>';



   }



?>