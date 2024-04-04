<?php

$idcurso = $_POST['curso'];
$iddisciplina = $_POST['disciplina'];

require ('script/conexao.php'); 

$sql = "INSERT INTO curso_disciplina (idcurso,iddisciplina) VALUES ('$idcurso','$iddisciplina')";

if (mysqli_query($conexao, $sql)) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

header("location:cadastrocursodisciplina.php");



?>