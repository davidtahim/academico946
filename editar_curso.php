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
<form action="atualizar_curso.php" method="post">
   <p> <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>"></p>
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $curso['nome']; ?>">
    </p>
    <label for="curso">Curso:</label>
    <input type="radio" name="curso" id="curso_m" value="m" <?php echo $curso['curso'] == 'm' ? 'checked' : '' ; ?>>
    <label for="curso_m">Manutenção de computadores</label>
    <input type="radio" name="curso" id="curso_r" value="r" <?php echo $curso['curso'] == 'r' ? 'checked' : '' ; ?>>
    <label for="curso_r">Redes de computadores</label>
    <input type="radio" name="curso" id="curso_p" value="p" <?php echo $curso['curso'] == 'p' ? 'checked' : '' ; ?> >
    <label for="curso_p">Programação de Computadores</label>
    <input type="radio" name="curso" id="curso_w" value="w" <?php echo $curso['curso'] == 'w' ? 'checked' : '' ; ?>>
    <label for="curso_w">Programação Web</label>
  <p> <input type="submit" value="Atualizar"></p>
  <p> <a href="cadastrocurso.php">Voltar</a></p>
</form>
    
</body>
</html>