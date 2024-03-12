<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">

   <p>
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario">
   </p>

    <p>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
    
    </p>
    <p>
        <input type="submit" value="Entrar">
        <a href="cadastrar.php">Sem acesso? Cadastre-se</a>
    
    </p>


    </form>
</body>
</html>