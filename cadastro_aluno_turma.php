<?php

$idmatricula = $_POST[ 'matricula' ];
$idturma = $_POST['turma']; 

require ( "script/conexao.php" );

$sqlcount  = "SELECT COUNT(*) AS totalalunos FROM alunoturma WHERE idturma='$idturma'";
$resultadocount = mysqli_query( $conexao, $sqlcount );
$rowcount = mysqli_fetch_assoc( $resultadocount );
$totalalunos = $rowcount['totalalunos'];

$limitealuno=25;

if ($totalalunos <= $limitealuno) {
    echo "A turma atingiu o limite máximo";
} else {
    $sql = "INSERT INTO alunoturma (idmatricula,idturma) VALUES ('$idmatricula','$idturma')";

if (mysqli_query($conexao, $sql)) {
    echo 'registro cadastrado com sucesso';
} else {
   echo  'Erro ao cadastrar o registro: '. mysqli_error($conexao);
}

// header ("Location: cadastroalunoturma.php");

}



?>