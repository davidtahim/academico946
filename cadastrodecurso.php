<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Preencher os dados do Curso</p>

    <fieldset>
        <legend>Cadastro do Curso</legend>
    <form action="cadastro_curso.php" method="post">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
    </p>
    <p>
        <label for="duracao">Duração:</label>
        <input type="text" name="duracao" id="duracao">
    </p>
    <p>
        <label for="coordenador">Coordenador:</label>
        <select name="coordenador" id="coordenador">
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
    <p>
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone">
    </p>
    </fieldset>
    <fieldset>
        <legend>Informações Acadêmicas</legend>

    <p>
        <label for="formacao">Formação Acadêmica</label>
        <input type="text" name="formacao" id="formacao">
    </p>
   <p>
    <label for="titulacao">Titulação</label>
    <select name="titulacao" id="titulacao">
        <option value="">Selecione a Titulação</option>
        <option value="graduacao">Graduação</option>
        <option value="mestrado">Mestrado</option>
        <option value="doutorado">Doutorado</option>
    </select>
   </p>     
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </fieldset>   
</form>
   
    
</body>
</html>