<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Preencher os dados da turma</p>

    <fieldset>
        <legend>Cadastro da Turma</legend>
    <form action="cadastro_turma.php" method="post">
    <p>
        <label for="disciplina">Disciplina:</label>
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
    <p>
        <label for="professor">Professor:</label>
        <select name="professor" id="professor">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT cpf,nome FROM professor";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['cpf']}'>{$row['nome']}</option>";
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