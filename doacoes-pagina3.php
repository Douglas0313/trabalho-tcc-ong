
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
    
    
  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-top">
    <h1 class="w3-center w3-teal w3-round-large" id="usuario">Doações</h1>


    <label for="pagamento">Selecione o método de pagamento</label>

      <select  id="pagamento" name="pagamento" class="w3-input w3-light-grey w3-
      border">
        <option value="escolha">Escolha</option>
       <option value="cartao_credito">Cartão de Crédito</option>
       <option value="boleto_bancario">Boleto Bancario</option>
       <option value="pix">Pix</option>
       <option value="deposito_bancario">Deposito Bancario</option>
       </select>
       <br>
       
  </div>

       <div id="cartao-form" style="display:none;"  class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">

       <label class="w3-text-teal" style="font-weight: bold;">Número do cartão</label>
        <input type="text" name="numeroCartao" class="w3-input w3-light-grey w3-
       border" placeholder="Digite o seu nome completo*" required>

       <label class="w3-text-teal" style="font-weight: bold;">Mês</label>
       <input type="text" name="mes" class="w3-input w3-light-grey w3-
      border" placeholder="Digite o seu nome completo*" required>

      <label class="w3-text-teal" style="font-weight: bold;">Ano</label>
      <input type="text" name="ano" class="w3-input w3-light-grey w3-
     border" placeholder="Digite o seu nome completo*" required>

     <label class="w3-text-teal" style="font-weight: bold;">Nome Titular</label>
     <input type="text" name="nomeTitular" class="w3-input w3-light-grey w3-
    border" placeholder="Digite o seu nome completo*" required>


    <label class="w3-text-teal" style="font-weight: bold;">Código de segurança</label>
    <input type="text" name="codigo" class="w3-input w3-light-grey w3-
   border" placeholder="Digite o seu nome completo*" required>

   <a href="index.php">Pagar</a>
   <a href="index.php">Cancelar</a>
   
      </div>


   <div id="boleto-form"  style="display:none;" class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">

    <label for="boleto" class="w3-text-teal" style="font-weight: bold;">Número do Boleto:</label>
    <input type="text" id="boleto" name="boleto" type="text" name="nome" class="w3-input w3-light-grey w3-border">

    <a href="index.php">Pagar</a>
   <a href="index.php">Cancelar</a>
    <br><br>

  </div>
  
    <div id="pix-form" style="display:none;" class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-left">

    <label for="pix-chave" class="w3-text-teal" style="font-weight: bold;">Chave PIX:</label>
    <br><br>
    
   <img src="imagens/qr.png" >
    
   <a href="index.php">Pagar</a>
   <a href="index.php">Cancelar</a>

   <br><br>
  </div>
  
  <div id="deposito-form" style="display:none;" class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">

    <label for="banco" class="w3-text-teal" style="font-weight: bold;">Banco:</label>
    <input type="text" id="banco" name="banco" class="w3-input w3-light-grey w3-
    border">
    <label for="agencia" class="w3-text-teal" style="font-weight: bold;">Agência:</label>
    <input type="text" id="agencia" name="agencia" class="w3-input w3-light-grey w3-
    border">
    <label for="conta" class="w3-text-teal" style="font-weight: bold;">Conta:</label>
    <input type="text" id="conta" name="conta" class="w3-input w3-light-grey w3-
    border">
    <a href="index.php">Pagar</a>
   <a href="index.php">Cancelar</a>
 
    <br><br>

</div>

<script>

var pagamento = document.getElementById("pagamento");
var cartaoForm = document.getElementById("cartao-form");
var boletoForm = document.getElementById("boleto-form");
var pixForm = document.getElementById("pix-form");
var depositoForm = document.getElementById("deposito-form");

pagamento.addEventListener("change", function() {
  if (pagamento.value == "boleto_bancario") {
    boletoForm.style.display = "block";
    pixForm.style.display = "none";
    depositoForm.style.display = "none";
    cartaoForm.style.display = "none";

  } else if (pagamento.value == "pix") {
    boletoForm.style.display = "none";
    pixForm.style.display = "block";
    depositoForm.style.display = "none";
    cartaoForm.style.display = "none";

  } else if (pagamento.value == "deposito_bancario") {
    boletoForm.style.display = "none";
    pixForm.style.display = "none";
    depositoForm.style.display = "block";
    cartaoForm.style.display = "none";

} else if (pagamento.value == "cartao_credito") {
    boletoForm.style.display = "none";
    pixForm.style.display = "none";
    depositoForm.style.display = "none";
    cartaoForm.style.display = "block";


  } else {
    boletoForm.style.display = "none";
    pixForm.style.display = "none";
    depositoForm.style.display = "none";
    cartaoForm.style.display = "none";
    
  }
});


</script>


</html>
