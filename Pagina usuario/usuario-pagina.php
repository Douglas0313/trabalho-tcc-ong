<?php

session_start();

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
	<div class="header">
	<h1>Bem-vindo(a), <?php echo htmlspecialchars($_GET['nome']); ?>!</h1>
		<a href="#">Configurações</a>
		<a href="login-usuario.html">Sair</a>
	</div>

		<h2>Vagas de emprego</h2>


		<button onclick="window.location.href='vagas.php'">Consultar oportunidades</button>

	

	<div id="vagas"></div>

	<h2>Conheça alguma ONG</h2>
	<a href="#">Consultar ONG</a>
	

	<h2>Já quer ajudar alguma ONG?</h2>
	<button class="button" type="button" onclick="location.href='doacoes-pagina3.php'">Doar</button>
	
</body>
</html>
