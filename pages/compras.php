<?php
session_start();
if ((!isset($_SESSION['usuario']) == true) and (!isset($_POST['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: entrar.php');
}
$logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../layout/meta.php";
    ?>
    <title>Alfa - Compras</title>
</head>

<body>
    <?php
    include "../layout/navbarRestrito.php";

    echo "<h1 class='text-center font-color-secundary mt-5 mb-5'>Seja bem vindo $logado </h1>";
    ?>
    <section class="produtos mg">
        <div class="row">
            <div class="col-8 bg-success">
                <div class="container bg-warning">TEXTO</div>
            </div>
            <div class="col-4 bg-danger">
                <div class="container bg-warning">TEXTO</div>
            </div>
        </div>
    </section>
    <?php
    include "../layout/footer.php";
    ?>