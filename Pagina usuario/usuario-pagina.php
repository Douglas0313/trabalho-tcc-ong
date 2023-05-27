
<?php
session_start();

if (isset($_GET['nome'])) {
    $_SESSION['nome_usuario'] = $_GET['nome'];
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bem-vindo(a)</title>
	<link rel="stylesheet" href="pagina-usuario.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="icone.png" type="image/x-icon">
	
</head>
<body style="background-color: azure;">
	<div class="header">
	<h1>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['nome_usuario']); ?>!</h1>
		<a href="login-usuario.html">Sair</a>
	</div>
	<br><br>

	<h2 class="w3-center w3-teal w3-round-large" id="vagas">Vagas de empregos</h2><br>


		<a href="vagas.php">Consultar vagas de empregos</a><br>

	

	<div id="vagas"></div>

	<h2 class="w3-center w3-teal w3-round-large" id="usuario">Conheça algumas ONG's</h2><br>
	<a href="consulta-ongs-historias.php">Consultar Histórias das ONG's</a> <br>
	<a href="consultar-ongs.php">Consultar ONG's que apoiam o projeto</a><br>
	
	
	<h2 class="w3-center w3-teal w3-round-large" id="usuario">Já quer ajudar alguma ONG</h2><br>
	<button class="button" type="button" onclick="location.href='doacoes-pagina3.php'">Doar</button>
<br><br><br><br><br>
	
	<footer>
    
    <img src="icone.png" alt="">
     <p class="copyright">Copyright Apoia ONG's - 2023</p>
  
     </footer>
	
</body>
</html>
