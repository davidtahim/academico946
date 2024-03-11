<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'],$_POST['nome'],$_POST['curso'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];

        require ('script/conexao.php');

        $sql = "UPDATE matricula SET nome='$nome', curso='$curso' WHERE id=$id";
        $resultado = mysqli_query($conexao,$sql);       
       if ($resultado) {
        echo "Curso atualizado com sucesso";
        header("location:cadastrocurso.php");
       } else {
        echo "Erro ao atualizar o curso" . mysqli_error($conexao);
       }
       mysqli_close($conexao);
    } else {
        echo "Preencha os dados" ; 
    }
    
} else {
    header("location:cadastrocurso.php");
    exit;
}




?>