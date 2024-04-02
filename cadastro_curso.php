<?php

$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$coordenador = $_POST['coordenador'];
$nivel = $_POST['nivel'];
$modalidade = $_POST['modalidade'];

require ('script/conexao.php'); 

$sql = "INSERT INTO curso (nome, duracao, coordenador, nivel, modalidade) VALUES ('$nome','$duracao', '$coordenador', '$nivel', '$modalidade')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

header("location:cadastrodecurso.php");


?>