<?php

session_start();

?>






<!DOCTYPE html>
<html>
<head>
	<title>Página inicial de usuários</title>
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
	  <h1>Bem-vindo(a), <?php echo htmlspecialchars($_GET['nome']); ?>!</h1>
		<a href="#">Configurações</a>
		<a href="login-ong.php">Sair</a>
	</div>
	<div style="text-align:center;">
		<h2>Conheça outras ONGs</h2>
		<a href="#">Clique aqui</a>
		<br><br>
		<h2>Vagas de emprego</h2>
		<label>Escolha aqui:</label>
		<select onchange="window.location.href=this.value">
			<option value="#">Selecione</option>
			<option value="adicionarvaga.php">Adicionar vagas</option>
			<option value="consultar_candidatos.php">Consultar candidatos</option>
		</select>
		<br><br>
	<h2>Sua história</h2>
<p id="historia-texto">Essa é uma história simples sobre uma ONG fictícia. A ONG XPTO foi fundada em 2010 com o objetivo de ajudar crianças carentes da região. Desde então, a organização tem realizado diversas ações para promover o bem-estar e o desenvolvimento dessas crianças, oferecendo atividades educativas, esportivas e culturais. Além disso, a ONG XPTO também presta assistência a suas famílias, oferecendo apoio psicológico e material quando necessário.</p>
<a href="#" onclick="editarHistoria()">Editar história</a>


	</div>
</body>
</html>