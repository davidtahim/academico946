<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
</head>
<body>
    <p>Preencher os dados do aluno(a)</p>

    <fieldset>
        <legend>Cadastro de Aluno (a)</legend>
    <form action="cadastro_aluno.php" method="post">
    <p>
        <label for="aluno">Nome</label>
        <input type="text" name="aluno" id="aluno" required>
    </p>
    <p>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
    </p>
    <p>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">
    </p>
    <p>
        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento">
    </p>
    <p>
        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep">
    </p>
    <p>
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro">
    </p>
    <p>
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">
    </p>
    <p>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione o Estado</option>
            <option value="ac">Acre</option>
            <option value="al">Alagoas</option>
            <option value="ap">Amapá</option>
            <option value="am">Amazonas</option>
            <option value="ba">Bahia</option>
            <option value="ce">Ceará</option>
            <option value="df">Distrito Federal</option>
            <option value="es">Espírito Santo</option>
            <option value="go">Goiás</option>
            <option value="ma">Maranhão</option>
            <option value="ms">Mato Grosso do Sul</option>
            <option value="mt">Mato Grosso</option>
            <option value="mg">Minas Gerais</option>
            <option value="pa">Pará</option>
            <option value="pb">Paraíba</option>
            <option value="pr">Paraná</option>
            <option value="pe">Pernanbuco</option>
            <option value="pi">Piauí</option>
            <option value="rj">Rio de Janeiro</option>
            <option value="rn">Rio Grande do Norte</option>
            <option value="rs">Rio Grande do Sul</option>
            <option value="sc">Santa Catarina</option>
            <option value="sp">São Paulo</option>
            <option value="se">Sergipe</option>
            <option value="to">Tocantins</option>
        </select>
    </p>
    <p>
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone">
    </p>
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
    </form>

    </fieldset>
    
</body>
</html>