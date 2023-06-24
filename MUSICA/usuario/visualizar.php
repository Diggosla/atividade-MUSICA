<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$nome = "";
$cidade = "";
$estado = "";
$data = "";
$tipo = "";

$sql = "select * from t_usuario where id= $id";
$todos_os_usuario = mysqli_query($conexao, $sql);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)):

  $nome = $um_usuario["nome"];
  $cidade = $um_usuario["cidade"];
  $estado = $um_usuario["estado"];
  $data = $um_usuario["data_nascimento"];
  $tipo = $um_usuario["tipo"];

endwhile;
?>


<h1>ficha usuario</h1>
<div class="container-fluid">
  <table class="table">
    <thead>
      <tr>
        <th>nome</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>data</th>
        <th>tipo</th>
      </tr>
    </thead>


    <tbody class="border-while">
      <tr>
        <td>
          <?php echo $nome; ?>
        </td>
        <td>
          <?php echo $cidade; ?>
        </td>
        <td>
          <?php echo $estado; ?>
        </td>
        <td>
          <?php echo $data; ?>
        </td>
        <td>
          <?php echo $tipo; ?>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="row">
    <div class="col text-center">
      <a href="../usuario/selecionar.php"><button class="btn btn-success w-25">Voltar</button></a>
    </div>
  </div>

</div>

<?php
include "../includes/rodape.php";
?>