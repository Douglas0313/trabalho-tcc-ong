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
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 100%;
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		.header h1 {
			margin: 0;
			font-size: 24px;
			font-weight: normal;
		}

		.header a {
			color: #fff;
			text-decoration: none;
			font-size: 16px;
		}

		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 4px;
		}

		.button:hover {
			background-color: #3e8e41;
		}
		#menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #ccc;
    height: 50px;
  }

  #menu li {
    font-size: 20px;
  }

  #menu li a {
    display: block;
    color: #000;
    text-decoration: none;
    padding: 10px;
    transition: background-color 0.3s ease;
  }

  #menu li a:hover {
    background-color: #999;
  }
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
			<option value="adicionar-vaga.php">Adicionar vagas</option>
			<option value="consultar_candidatos.php">Consultar candidatos</option>
		</select>
		<br><br>
	<h2>Sua história</h2>
<p id="historia-texto">Essa é uma história simples sobre uma ONG fictícia. A ONG XPTO foi fundada em 2010 com o objetivo de ajudar crianças carentes da região. Desde então, a organização tem realizado diversas ações para promover o bem-estar e o desenvolvimento dessas crianças, oferecendo atividades educativas, esportivas e culturais. Além disso, a ONG XPTO também presta assistência a suas famílias, oferecendo apoio psicológico e material quando necessário.</p>
<a href="#" onclick="editarHistoria()">Editar história</a>


	</div>
</body>
</html>