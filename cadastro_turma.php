<?php

$iddisciplina = $_POST['disciplina'];
$idprofessor = $_POST['professor'];

require('script/conexao.php');

$sql = "INSERT INTO turma (iddisciplina, idprofessor) VALUES ('$iddisciplina', '$idprofessor') ";

if (mysqli_query($conexao,$sql)) {
    echo "Registro inserido com sucesso";
} else {
   echo "Erro ao inserir o registro: ". mysqli_error($conexao);
}
mysqli_close($conexao);
// header("location:cadastroturma.php")



?>