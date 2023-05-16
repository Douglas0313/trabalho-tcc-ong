<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">

 <h1 class="w3-center w3-teal w3-round-large" id="ong">Adicionar vagas de empregos</h1>

<form method="post" action="adicionarvaga.php">
  <label>Nome da ONG:</label>
  <input type="text" name="nomeOng"><br><br>

  <label>Título da vaga:</label>
  <input type="text" name="titulo"><br><br>

  <label>Valor do salário:</label>
  <input type="text" name="valorSalario"><br><br>

  <label>Endereço:</label>
  <input type="text" name="endereco"><br><br>

  <label>Descrição:</label>
  <input type="text" name="descricao"><br><br>

  <input type="submit" value="Adicionar vaga">
</form>




</html>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function(){
    $('input[name="valorSalario"]').keydown(function(e){
      var key = e.charCode || e.keyCode || 0;
      // permite backspace, tab, delete, enter e numeros
      return (
          key == 8 || 
          key == 9 ||
          key == 13 ||
          key == 46 ||
          key == 110 ||
          key == 190 ||
          (key >= 48 && key <= 57) ||
          (key >= 96 && key <= 105)
      );
    }).mask('R$ 999.999.990,00');
  });
</script>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insere os dados do formulário no banco de dados
if (isset($_POST['nomeOng'])) {
  $nomeOng = $_POST['nomeOng'];
  $titulo = $_POST['titulo'];
  $valorSalario = $_POST['valorSalario'];
  $endereco = $_POST['endereco'];
  $descricao = $_POST['descricao'];

  $sql = "INSERT INTO Vagas (nomeOng, titulo, valorSalario, endereco, descricao, `Ong's_codigo`)
          VALUES ('$nomeOng', '$titulo', '$valorSalario', '$endereco', '$descricao', 1)";

  if (mysqli_query($conn, $sql)) {
    echo "Vaga adicionada com sucesso!";
  } else {
    echo "Erro ao adicionar vaga: " . mysqli_error($conn);
  }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
