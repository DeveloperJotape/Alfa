<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include('../app/config/config.php');
if ((!isset($_SESSION['usuario']) == true) and (!isset($_POST['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: entrar.php');
}

?>

<head>
    <?php
    include "../layout/meta.php";
    ?>
    <title>Pagamento</title>
</head>

<body>
    <?php
    //Inclui a navbar
    include "../layout/navbarRestrito.php";
    ?>

    <section class="qrcode mg">
        <div class="container">
            <div class="card bg-color-1 border-0">
                <div class="d-flex justify-content-center">
                    <img src="../images/alfaqrcode.png" alt="codigo">
                </div>
                <div class="mg text-center">
                    <h1>Pagamento</h1>
                    <p>Para concluir sua compra, realize o pagamento utilizando o QR Code acima. Após efetuar o pagamento, o nosso Bot no Whatsapp irá te chamar com todas as Informações.</p>
                </div>
            </div>
        </div>
    </section>
</body>

    <?php
    
    include "../layout/footer.php";
    
    ?>

</html>