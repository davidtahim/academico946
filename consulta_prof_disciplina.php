<?php

$dis = $_POST['disciplina'];

require('script/conexao.php');

$sql = "SELECT turma.iddisciplina, disciplina.id, disciplina.nome AS dnome, professor.nome AS pnome FROM turma 
INNER JOIN disciplina ON turma.iddisciplina = disciplina.id 
INNER JOIN professor ON turma.idprofessor = professor.cpf 
WHERE turma.iddisciplina = {$dis}";

$resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "A disciplina: '{$row['dnome']}' tem como professor: {$row['pnome']}";
                }
?>

<p><button onclick="window.history.back()">Voltar</button></p>  