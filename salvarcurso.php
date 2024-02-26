<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>

</head>
<body>
<?php    
$nome = $_POST['aluno'];
$curso = $_POST['curso'];
echo '<h2>'.'Confira os dados'.'</h2>';

echo '<p>'.$nome.'<p>';
echo '<p>'.$curso.'<p>';


?>
</body>
</html>