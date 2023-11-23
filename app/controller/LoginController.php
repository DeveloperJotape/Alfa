<?php
    session_start();
    //Se existir o botão subimit, se o usuario não estiver vazio e se a senha não estiver vazia
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
        //Se o login existir ele permite o acesso ao sistema
        include_once("../config/config.php");
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1) {
            //Se não existir usuario com usuario e senha no bd
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: ../../pages/entrar.php');
        } else {
            //Se existir existir usuario com usuario e senha no bd
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../../pages/compras.php');
        }

    } else {
        //Não permite o acecsso ao sistema (Redirecionado ao login)
        header('Location: ../../pages/entrar.php');
    }

?>