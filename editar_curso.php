<?php
//verificar se o id está selecionado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //abrir a conexão
    require ('script/conexao.php');
    $sql = "SELECT * FROM matricula WHERE id = $id" ;
    $resultado = mysqli_query($conexao,$sql);

    //verificar se existe id
    if (mysqli_num_rows($resultado) == 1) {
        $curso =mysqli_fetch_assoc($resultado) ;
    } else {
       //deu erro volta para a lista dos cursos

       header("location:cadastrocurso.php");
       exit;

    }
    
    mysqli_close($conexao);


} else {
    //não achou o id e termina o código    
    header("Location:cadastrocurso.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>

<h2>Editar curso</h2>
<form action="" method="post">
    <input type="text" name="id" id="id" value="<?php echo $curso['id']; ?>">
</form>
    
</body>
</html>