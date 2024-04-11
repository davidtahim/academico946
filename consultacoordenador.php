<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <fieldset>
        <legend>Consulta de coordenador</legend>
    <form action="consulta_coordenador.php" method="post">
    <p>
        <label for="curso">Selecione o curso:</label>
        <select name="curso" id="curso">
            <?php
                require ('script/conexao.php');
                $sql = "SELECT coordenador,nome FROM curso";
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='{$row['coordenador']}'>{$row['nome']}</option>";
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