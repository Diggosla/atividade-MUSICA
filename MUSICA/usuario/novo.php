<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
?>

<center >
<h1>novo Compositor</h1>
<p>Vamos cadastrar um Novo Compositor no sistema.</p>
<br>

<div class="form-group">
<form action="inserir.php" method="post">

    nome: <input name="nome" require maxlength="100">
    <br>
    Sua Cidade: <input name="cidade"  require maxlength="100">
     <br>
     Seu Estado: <input name="estado"  require maxlength="2">
     <br>
     Data do seu aniversario: <input name="data" type="date" >
     <br>
    tipo: <input name="tipo"  require maxlength="50">
     <br>
    </div>
     
<br>
    <button type="submit">SALVAR</button>
</form>
</center>
<?php
include"../includes/rodape.php";
?>
  
  

  