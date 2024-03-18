<?php

$nome = $_POST['aluno'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$formacao = $_POST['formacao'];
$titulacao = $_POST["titulacao"]; 

require('script/conexao.php');

$sql = "INSERT INTO professor (cpf, nome, endereco, complemento, cep, bairro, cidade, estado, telefone, formacao,titulacao) VALUES ('$cpf', '$nome', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone','$formacao','$titulacao') ";

if (mysqli_query($conexao,$sql)) {
    echo "Registro inserido com sucesso";
} else {
   echo "Erro ao inserir o registro: ". mysqli_error($conexao);
}
mysqli_close($conexao);
header("location:cadastroprofessor.php")


?>