<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <fieldset>
        <legend>Consulta de professor da disciplina</legend>
    <form action="consulta_prof_disciplina.php" method="post">
    <p>
        <label for="disciplina">Selecione a disciplina:</label>
        <select name="disciplina" id="disciplina">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT turma.iddisciplina AS iddisciplina, disciplina.id, disciplina.nome AS dnome FROM turma INNER JOIN disciplina ON turma.iddisciplina = disciplina.id";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['iddisciplina']}'>{$row['dnome']}</option>";
                }
            ?>
        </select>
    </p>
    </fieldset>
    <p> 
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </p>   
</form>
</body>
</html>