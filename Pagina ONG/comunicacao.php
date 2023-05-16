<!DOCTYPE html>
<html>
<head>
	<title>Enviar dados do perfil</title>
</head>
<body>
	<form method="post" action="salvarperfil.php" enctype="multipart/form-data">
		<label for="nome">Titulo:</label>
		<input type="text" id="nome" name="nome"><br><br>

		<label for="imagem">Imagem:</label>
		<input type="file" id="imagem" name="imagem"><br><br>

		<label for="texto">Texto:</label>
		<textarea id="texto" name="texto"></textarea><br><br>

		<input type="submit" value="Salvar">
	</form>
</body>
</html>