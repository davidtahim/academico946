<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Selecione o aluno e a turma</p>

    <fieldset>
        <legend>Cadastro do Aluno na Turma</legend>
    <form action="cadastro_aluno_turma.php" method="post">
    <p>
        <label for="aluno">Selecione o aluno(a):</label>
        <select name="aluno" id="aluno">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT aluno.cpf,aluno.nome AS anome, matricula.id AS matricula FROM aluno INNER JOIN matricula ON aluno.cpf=matricula.idaluno";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['matricula']}'>{$row['anome']}</option>";
                }
            ?>
        </select>
    </p>
    <p>
        <label for="turma">Selecione a turma:</label>
        <select name="turma" id="turma">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT turma.idturma AS turma, turma.iddisciplina, disciplina.nome As dnome, turma.idprofessor, professor.nome AS pnome  FROM turma INNER JOIN (disciplina,professor) ON turma.iddisciplina = disciplina.id AND turma.idprofessor=professor.cpf";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['turma']}'>{$row['dnome']} professor(a){$row['pnome']}</option>";
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