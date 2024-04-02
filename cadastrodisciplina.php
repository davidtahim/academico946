<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Preencher os dados da disciplina</p>

    <fieldset>
        <legend>Cadastro da disciplina</legend>
    <form action="cadastro_disciplina.php" method="post">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </p>
    <p>
        <label for="carga">Carga Horária:</label>
        <input type="number" name="carga" id="carga" min="0" max="1000">
    </p>
    <p>
        <label for="creditos">Créditos:</label>
        <input type="number" name="creditos" id="creditos">
    </p>
    <p>
        <label for="ementa">Ementa:</label>
        <textarea name="ementa" id="ementa" cols="40" rows="6"></textarea>
    </p>
    </fieldset>
     
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </p>   
</form>
    
</body>
</html>