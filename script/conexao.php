<?php

$conexao = mysqli_connect("localhost","root","","academico");

if (!$conexao) {
    die ('Não foi possível conectar ao banco de dados'.mysqli_error($mysqli));
    echo $mysqli;
}

echo 'conexão bem sucedida';

mysqli_close($conexao);

?>