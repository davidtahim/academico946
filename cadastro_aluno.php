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

require('script/conexao.php');

$sql = "INSERT INTO aluno (cpf, nome, endereco, complemento, cep, bairro, cidade, estado, telefone) VALUES ('$cpf', '$nome', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone') ";

if (mysqli_query($conexao,$sql)) {
    echo "Registro inserido com sucesso";
} else {
   echo "Erro ao inserir o registro: ". mysqli_error($conexao);
}
mysqli_close($conexao);
header("location:cadastroaluno.php")


?>