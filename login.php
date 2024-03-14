<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['usuario'],$_POST['senha'])) {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        require("script/conexao.php");

        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
        $resultado = mysqli_query($conexao,$sql); 
        if (mysqli_num_rows($resultado)==1) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('location:dashboard.php');
            exit;
        } else {
            echo "Usuário ou senha inválido" ;
            header('location:dashboard.php');
            exit;
        }   

        mysqli_close($conexao);

    } else {
        echo "Por favor preencha os campos";
    }

} else {
    header('location:index.php');
    exit;
}

?>