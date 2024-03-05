<?php

$conexao = mysqli_connect("localhost","root","","academico");

if (!$conexao) {
    die ('Não foi possível conectar ao banco de dados'.mysqli_connect_error());
    
}

echo 'conexão bem sucedida';

?>