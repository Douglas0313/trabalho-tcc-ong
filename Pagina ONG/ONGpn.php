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
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Pagina usuario/pagina-usuario.css">
    <link rel="shortcut icon" href="icone.png" type="image/x-icon">

</head>


<body style="background-color: azure;">

  	<div class="header">
	  <h1>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['nome_usuario']); ?>!</h1>
		<a href="login-ong.php">Sair</a>
	</div>
	
	<br><br>


		
		<h2 class="w3-center w3-teal w3-round-large">Adicionar vaga de emprego</h2>
			<a href="adicionar-vaga.php">Clique aqui</a>
		<br><br>
			
	<h2 class="w3-center w3-teal w3-round-large">Conheça outras ONGs</h2>
	
	<a href="social-pagina-ongs.php">Clique aqui</a>
	<br><br>
	
		<h2 class="w3-center w3-teal w3-round-large">Adicionar a sua história</h2>
	<a href="historia-ong.php">Clique aqui</a>
	</div>

	<br><br><br><br><br>
	
	<footer>
    
    <img src="icone.png" alt="">
     <p class="copyright">Copyright Apoia ONG's - 2023</p>
  
     </footer>
</body>
</html>