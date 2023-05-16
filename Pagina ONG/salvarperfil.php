<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

$nome = $_POST["nome"];
$imagem = $_FILES["imagem"]["name"];
$texto = $_POST["texto"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
  echo "Arquivo ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " foi enviado.";
} else {
  echo "Ocorreu um erro ao enviar o arquivo.";
}

$sql = "INSERT INTO perfil (nome, imagem, texto) VALUES ('$nome', '$imagem', '$texto')";

if (mysqli_query($conn, $sql)) {
  echo "Perfil salvo com sucesso.";
} else {
  echo "Erro ao salvar o perfil: " . mysqli_error($conn);
}

mysqli_close($conn);
?>