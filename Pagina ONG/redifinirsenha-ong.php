<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-teal w3-round-large" id="redefinir-senha">Redefinir senha</h1>
	<form method="post" action="processarsenha-ong.php">

	<label for="email" class="w3-text-teal" style="font-weight: bold;">Email:</label>
	<input type="email" name="email" id="email" class="w3-input w3-light-grey w3-border" required><br>

	<label for="nova_senha" class="w3-text-teal" style="font-weight: bold;">Nova Senha:</label>
	<input type="password" name="nova_senha" id="nova_senha" class="w3-input w3-light-grey w3-border"  required><br>

	<label for="confirma_senha" class="w3-text-teal" style="font-weight: bold;">Confirmar Nova Senha:</label>
	<input type="password" name="confirma_senha" id="confirma_senha" class="w3-input w3-light-grey w3-border"  required><br>

	<input type="submit" value="Redefinir Senha">
</form>
</div>
</body>
</html>