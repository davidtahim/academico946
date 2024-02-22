<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script>
</head>

<body>
    <h1>Registrar-se</h1>

    <form name="formsenha" action="" method="post" onsubmit="return testasenha()">
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <label for="confirmasenha">Confirmar Senha</label>
            <input type="password" name="confirmasenha" id="confirmasenha">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>