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

switch ($curso) {
    case 'm':
        echo 'Manutenção de Computadores';
        break;
    case 'r':
        echo 'Redes de Computadores';
        break;
    case 'p':
        echo 'Programação de Computadores';
        break;
    case 'w':
        echo 'Programação Web';
        break;
    
    default:
        echo 'Digite um código válido (m,r,p e w) '.'<br>';
        break;
}

// vetor
//matriz

// $grupo= array("Alvaro","Kelly","Rodrigo","Letícia");
// $i = 0;
// do {
//    $aluno = $grupo[$i];
//    echo $aluno.'<br>';
//    $i++;
// } while ($i < count($grupo));
$grupo= array("Alvaro","Kelly","Rodrigo","Letícia");
for ($i=0; $i < count($grupo); $i++) { 
    $aluno = $grupo[$i];
    echo $aluno.'<br>';
}


$disciplinas = array("Redes de computadores","Algorítmos", "Programação de computadores","Manutenção de computadores");
foreach ($disciplinas as $materias){
echo '<p>' . $materias ;
}


$x = 'sistema acadêmico';
// echo strlen($x);
echo ucfirst($x);

$texto = 'Sistema acadêmico: divulgação de nota dos alunos';
echo $texto;
echo str_replace('nota','média',$texto);


function imprimirMedia($prova1,$prova2){

    $media = ($prova1+$prova2)/2;
    echo 'A média do aluno é: ' . $media;

}

imprimirMedia(7.0,8.0);

imprimirMedia(10,7);


?>
</body>
</html>