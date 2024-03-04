<?php
$nome = $_POST['nome'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$falta = $_POST['falta'];

function calcularMedia($prova1, $prova2){

    return ($prova1+$prova2)/2;

}


$resultado = calcularMedia($p1,$p2);

if ($resultado>=7.0 && $resultado<=10.0 && $falta<=32) {
    echo 'Aluno aprovado com a nota '.$resultado;
}

elseif ($resultado<7.0 && $resultado>=0.1 && $falta<=32) {
    echo 'Aluno em recuperação com a nota '.$resultado;
}

elseif ($resultado==0 || $falta>=32) {
    echo 'Aluno reprovado';

}

else {
    echo 'Preencha novamente o formulário';
}


?>