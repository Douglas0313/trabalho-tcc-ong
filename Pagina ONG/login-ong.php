<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title></title>
</head>
<body style="background-color: azure;">
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-
third ">

<div class="w3-center">
<br>

<img src="icone.png" alt="icone" style="width:40%" class="w3-circle w3-margin-top">
</div>

<form class="w3-container " action="cadastro-ong.php" method="post">
<div class="w3-section">

<h2>Login de ONG's</h2>

<label style="font-weight: bold;">Email</label>
<input class="w3-input w3-border w3-margin-bottom" type="txt" placeholder="Digite o seu email" name="email" id="email" >

<label style="font-weight: bold;">Senha</label>
<input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="senha" id="senha">

<button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Entrar</button>
<button type="button" onclick="location.href='cadastro-ong.html'">Cadastrar conta</button>
<button type="button" onclick="location.href='redifinirsenha-ong.php'">Redefinir Senha</button>




</div>
</form>
<br>
</div>
</body>
</html>