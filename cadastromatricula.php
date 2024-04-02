<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Selecione o Aluno e o Curso</p>

    <fieldset>
        <legend>Matrícula</legend>
    <form action="cadastro_matricula.php" method="post">
    <p>
        <label for="aluno">Selecione o aluno:</label>
        <select name="aluno" id="aluno">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT cpf,nome FROM aluno";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['cpf']}'>{$row['nome']}</option>";
                }
            ?>
        </select>
    </p>
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
    </fieldset>
   <p>   
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </p>   
</form>
    
</body>
</html>