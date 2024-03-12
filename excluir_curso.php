<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require ('script/conexao.php');

    $sql = "DELETE FROM matricula WHERE id = $id";
    $resultado = mysqli_query($conexao,$sql);

    if ($resultado) {
        header("location:cadastrocurso.php");
        exit;
    } else {
        echo "Erro ao excluir o curso".mysqli_error($conexao);

    }

    mysqli_close($conexao);
} else {
    header("location:cadastrocurso.php");
    exit;
}

?>