<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
include"../includes/conexao.php";
 

$id = $_GET['id'];

$nome="";
$cidade="";
$estado="";
$data="";
$tipo="";

$sql = "select * from t_usuario where id = $id";
$todos_os_usuario = mysqli_query ($conexao,$sql);
while($um_usuario= mysqli_fetch_assoc($todos_os_usuario)):

$nome = $um_usuario ["nome"];
$cidade= $um_usuario ["cidade"];
$estado= $um_usuario ["estado"];
$data= $um_usuario ["data_nascimento"];
$tipo= $um_usuario ["tipo"];
endwhile;
?>
<h1>Editar usuario  <?php  echo $id; ?></h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">

nome:<input name="nome" type="text" value="<?php echo $nome;?>">
<br>
cidade: <input name="cidade" value="<?php echo $cidade;?>">
<br>
estado:<input name="estado"value="<?php echo $estado;?>">
<br>
data:<input name="data" type="date" value="<?php echo $data;?>">
<br>
tipo:<input name="tipo" value="<?php echo $tipo;?>">
 <br>
<button type="submit">atualizar</button>
</form>
<br>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
?>



