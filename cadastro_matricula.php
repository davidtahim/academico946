<?php

$nome = $_POST['aluno'];
$curso = $_POST['curso'];

require ('script/conexao.php'); 

$sql = "INSERT INTO matricula (nome,curso) VALUES ('$nome','$curso')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

header("location:cadastromatricula.php");


?>