<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
include"../includes/conexao.php";
?>

<p>
    <a href="novo.php"></a>
</p> 
<center>
<h1>Lista de Cantores </h1>
</center>
<br>
<table class="table table-bordered table-dark ">
    <tr>
        <td>Codigo</td>
        <td>nome</td>
        <td>Cidade</td>
        <td>estado</td>
        <td>Data</td>
        <td>Tipo</td>
    </tr>

<!-- fim da linha titulo -->

    <?php
    $sql = "select * from t_usuario";
    $todos_os_usuario = mysqli_query($conexao,$sql);
    while($um_usuario = mysqli_fetch_assoc($todos_os_usuario)):        
    ?>
    <tr >
    <td><?php echo $um_usuario['id']; ?></td>
    <td><?php echo $um_usuario['nome'];?></td>
    <td><?php echo $um_usuario['cidade'];?></td>
    <td><?php echo $um_usuario['estado'];?></td>
    <td><?php echo $um_usuario['data_nascimento'];?></td>
    <td><?php echo $um_usuario['tipo']; ?></td>
   
   
    <td>
        <a href="visualizar.php?id=<?php echo $um_usuario['id'];?>">Visualizar</a>
        <a href="editar.php?id=<?php echo $um_usuario['id'];?>">Editar</a>
        <a href="deletar.php?id=<?php echo $um_usuario['id'];?>">Excluir</a>
    </td>
 </tr>
    <?php
    endwhile;
    ?>

</table>

<?php
include"../includes/rodape.php";
?>