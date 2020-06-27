<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <meta name="keywords" content="#"/>
    <meta name="description" content="#"/>
    <meta http-equiv="refresh" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contato</title>
    
  </head>

<body>
   <!--header e Nav-->
<?php require_once("header.php"); ?>

 <!--Main Formulário-->

  
<div class="form-group">

<form  method="POST" id="fcontato" action="dados.php">


      <fieldset id="usuario">
        <legend>Entre em contato</legend>
        <p><label for="cnome">Nome :</label> <input type="text" name="tnome" id="cnome" size="30" maxlength="30" placeholder="Nome Completo" /></p>
      </fieldset>

       <fieldset>
        <p><label  for="exampleInputEmail1">Email : </label><input type="email" name="tmail" id="cmail" size="30" maxlength="30"></p>
      </fieldset>

       <fieldset>
       <p><label for="cnome">Assunto :</label> <input type="text" name="tassunto" id="cassunto" size="30" maxlength="30" placeholder="Assunto" /></p>
      </fieldset>

      <fieldset id="mensagem">
      
        <p><legegend><label for="cmsg">Mensagem :</label></legegend></p>
        <textarea name="tmsg" id="cmsg" cols="45" rows="5" placeholder="Deixe aqui sua Mensagem"> </textarea>
      </fieldset>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>


<hr class="featurette-divider">



<!--Footer -->
<?php require_once("footer.php"); ?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

    </body>
</html>
