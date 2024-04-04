<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Cadastre a Disciplina no Curso</p>

    <fieldset>
        <legend>Cadastro de disciplinas nos cursos</legend>
    <form action="cadastro_curso_disciplina.php" method="post">
    <p>
        <label for="curso">Selecione o curso:</label>
        <select name="curso" id="curso">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT id,nome FROM curso";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['id']}'>{$row['nome']}</option>";
                }
            ?>
        </select>
    </p>
    <p>
        <label for="disciplina">Selecione a disciplina:</label>
        <select name="disciplina" id="disciplina">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT id,nome FROM disciplina";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['id']}'>{$row['nome']}</option>";
                }
            ?>
        </select>
    </p>
    </fieldset>   
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </p>   
</form>
    
</body>
</html>