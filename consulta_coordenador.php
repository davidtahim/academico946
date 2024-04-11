<?php

$cpf = $_POST['curso'];

require('script/conexao.php');

$sql = "SELECT curso.coordenador, curso.nome AS cnome, professor.cpf,professor.nome AS pnome FROM curso INNER JOIN professor ON (curso.coordenador=professor.cpf AND curso.coordenador={$cpf})";

$coordenador = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($coordenador)) {
                    echo "O curso é '{$row['cnome']}' e o professor é {$row['pnome']}";
                }
?>

<p><button onclick="window.history.back()">Voltar</button></p>  