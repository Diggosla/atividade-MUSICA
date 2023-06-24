<?php
include "../includes/conexao.php";

$id = $_GET ['id'];

$nome= $_POST ["nome"];
$cidade= $_POST  ["cidade"];
$estado= $_POST  ["estado"];
$data= $_POST  ["data"];
$tipo= $_POST  ["tipo"];

$sql = "update t_usuario set nome = '$nome', cidade = '$cidade', estado = '$estado',  data_nascimento = '$data' where id = '$id' ";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header ("location: selecionar.php");
?>