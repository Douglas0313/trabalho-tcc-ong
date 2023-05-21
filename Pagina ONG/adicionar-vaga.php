<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="shortcut icon" href="icone.png" type="image/x-icon">

</head>

<body style="background-color: azure;">

 <a href="ONGpn.php" class="w3-display-topleft">

 <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
</a>

 <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">


 <h1 class="w3-center w3-teal w3-round-large" id="adicionar-emprego">Adiciona vaga de emprego</h1>

  <form method="post" action="adicionar-vaga-banco.php">

  <label class="w3-text-teal" style="font-weight: bold;">Nome da ONG:</label>
  <input type="text" name="nome" class="w3-input w3-light-grey w3-border">

  <label class="w3-text-teal" style="font-weight: bold;">Título da vaga:</label>
  <input type="text" name="titulo" class="w3-input w3-light-grey w3-border">

  <label class="w3-text-teal" style="font-weight: bold;">Valor do salário:</label>
  <input type="text" name="valorSalario" class="w3-input w3-light-grey w3-border">

  <label class="w3-text-teal" style="font-weight: bold;">Descrição:</label>
  <input type="text" name="descricao" class="w3-input w3-light-grey w3-border"><br>

  <input class="w3-button w3-teal w3-right w3-round-large" type="submit" value="Adicionar vaga">
  
</form>

 </div>




 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function(){
    $('input[name="valorSalario"]').keydown(function(e){
      var key = e.charCode || e.keyCode || 0;
      // permite backspace, tab, delete, enter e numeros
      return (
          key == 8 || 
          key == 9 ||
          key == 13 ||
          key == 46 ||
          key == 110 ||
          key == 190 ||
          (key >= 48 && key <= 57) ||
          (key >= 96 && key <= 105)
      );
    }).mask('R$ 999.999.990,00');
  });
</script>

</body>
</html>
