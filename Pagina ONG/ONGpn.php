<?php
session_start();

if (isset($_GET['nome'])) {
    $_SESSION['nome_usuario'] = $_GET['nome'];
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo(a)</title>
	<link rel="stylesheet" href="pagina-ong.css">
	<style>
		
	</style>


</head>


<body>
    <script>
    function editarHistoria() {
      var historiaTexto = document.getElementById("historia-texto").textContent;
      var novaHistoriaTexto = prompt("Edite a história:", historiaTexto);
      
      if (novaHistoriaTexto != null) {
        document.getElementById("historia-texto").textContent = novaHistoriaTexto;
      }
    }
  </script>
  	<div class="header">
	  <h1>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['nome_usuario']); ?>!</h1>
	
		<a href="login-ong.php">Sair</a>
	</div>
	<div style="text-align:center;">
		<h2>Conheça outras ONGs</h2>
		<a href="social-pagina-ongs.php">Clique aqui</a>
		<br><br>
		
			<h2>Adicionar vaga de emprego</h2>
			<a href="adicionar-vaga.php">Clique aqui</a>
			
			
		
		<br><br>
	<h2>Adicionar a sua história</h2>
	<a href="historia-ong.php">Clique aqui</a>



	</div>
</body>
</html>