<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<body id="inicio">
    <img src="imagens/logosenacv2.png" alt="logo senac" width="200px" height="auto">
    <h1>
        <b>Controle Acadêmico</b>
    </h1>
    <p>Bem vindo, <?php echo $_SESSION['usuario']; ?> ao <b>sistema de controle academico</b>.</p> <p>Aqui você poderá consultar suas <a href="notas.php" alt="notas da turma" target="_self">notas.</a></p><p>E também sua <i><a href="frequencia.php" alt="frequencia dos alunos" >frequencia</a></i>.</p> 

    <h2>Menu</h2>
<ul>
    <li><a href="aluno.php">Alunos</a></li>
    <li><a href="professor.php">Professores</a></li>
    <li><a href="disciplina.php">Disciplinas</a></li>
    <li><a href="turma.php">Turmas</a></li>
    <li><a href="nota.php">Notas</a></li>
    <li><a href="frequencia.php">Frequencia</a></li>
</ul>
<?php
// meu primeiro código
echo '<h2>'.'Sistema acadêmico'.'</h2>';

$aluno='<p>'.'David Tahim'.'</p>';
$curso="Análise e desenvolvimento de sitemas"; 
/*
Esse é um comentário 

*/

echo "O aluno: ".$aluno." Frequenta o curso: ".$curso; 


$notas = array("prova1" => 8.3, "prova2"=>5.9, "prova3" => 9.2);
echo '<p>'.($notas["prova1"]+$notas["prova2"]+$notas["prova3"])/3,'</p>';
?>
</body>
</html>