<?php

$nome = $_POST['aluno'];
$curso = $_POST['curso'];

require ('script/conexao.php'); 

$sql = 'INSERT INTO matricula (nome,curso) VALUES';

?>