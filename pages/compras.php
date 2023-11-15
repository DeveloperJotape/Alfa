<?php
//Sessão de usuário
session_start();
include('../app/config/config.php');
if ((!isset($_SESSION['usuario']) == true) and (!isset($_POST['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: entrar.php');
}

$logado = $_SESSION['usuario'];

if (isset($_POST["add"])) {
    $produtoId = $_GET['id'];
    $produtoNome = $_POST['hidden_nome'];
    $produtoImagem = $_POST['hidden_imagem'];
    $produtoDescricao = $_POST['hidden_descricao'];
    $produtoValor = $_POST['hidden_valor'];
    $produtoQuantidade = $_POST['quantidade'];

    $sql = "INSERT INTO `produtos_secundario` (`nome`, `descricao`, `imagem`, `valor`, `quantidade`) 
                VALUES ('$produtoNome', '$produtoDescricao', '$produtoImagem', '$produtoValor', '$produtoQuantidade')";

    mysqli_query($conn, $sql);
}

if (isset($_GET['action']) && $_GET['action'] == "delete") {
    $produtoNome = $_GET['nome'];
    $deleteQuery = "DELETE FROM `produtos_secundario` WHERE nome = '$produtoNome'";
    mysqli_query($conn, $deleteQuery);
}

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
            <div class="col-8">
                <div class="container mt-5 mb-5">
                    <h2 class="text-center font-color-secundary">Produtos</h2>
                    <div class="card-group">
                        <?php
                        $query = "SELECT * FROM produtos ORDER BY id ASC";
                        $result = $conn->query($query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <form action="compras.php?action=add&id=<?php echo $row['id']; ?>" method="POST">
                                    <div class="card bg-color-2 font-color ml-3 mr-3 mt-3" style="width: 20rem;">
                                        <img class="card-img-top" src="../images/<?php echo $row['imagem']; ?>" style="height: 15rem;" alt="<?php echo $row['descricao'] ?>">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $row['nome']; ?></h4>
                                            <p style="font-size:18px;"><?php echo $row['descricao']; ?></p>
                                            <h4 class="text-center mt-4">R$ <?php echo number_format($row['valor'], 2); ?></h4>
                                            <input type="text" name="quantidade" id="quantidade" style="width:20%;" class="mt-3" value="1">

                                            <input type="hidden" name="hidden_imagem" value="<?php echo $row['imagem']; ?>">
                                            <input type="hidden" name="hidden_nome" value="<?php echo $row['nome']; ?>">
                                            <input type="hidden" name="hidden_descricao" value="<?php echo $row['descricao']; ?>">
                                            <input type="hidden" name="hidden_valor" value="<?php echo $row['valor']; ?>">

                                            <input type="submit" name="add" id="add" value="Adicionar ao carrinho" style="width: 78%;">
                                        </div>
                                    </div>
                                </form>
                        <?php
                            }
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-4 bg-color-2">
                <div class="container mt-5 mb-5">
                    <h2 class="text-center font-color">Carrinho</h2>
                    <?php
                    $query = "SELECT * FROM produtos_secundario ORDER BY id ASC";
                    $result = $conn->query($query);
                    $total = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="card w-100 bg-color-1 mb-3">
                                <div class="card-body row">
                                    <div class="col d-flex align-items-center" style="max-width:40%;">
                                        <img src="../images/<?php echo $row['imagem']; ?>" alt="" style="width: 100%;height:20vh;">
                                    </div>
                                    <div class="col font-color-secundary d-flex align-items-start flex-column bd-highlight" style="width:80%;">
                                        <h4 class="card-title"><?php echo $row['nome']; ?></h4>
                                        <h5>Quantidade: <b><?php echo $row['quantidade']; ?></b></h5>
                                        <h5>Valor: <b><?php echo number_format($row['quantidade'] * $row['valor'], 2) ?></b></h5>
                                        <div class="mt-auto bd-highlight">
                                            <a href="compras.php?action=delete&nome=<?php echo $row['nome']; ?>" class="link text-danger">
                                                <h7><b>Remover item</b></h7>
                                            </a>
                                        </div>
                                        <?php
                                        $total += ($row['quantidade'] * $row['valor']);
                                        ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="mt-5 text-center font-color">
                        <h4>Total: <?php echo number_format($total, 2) ?></h4>
                        <form method="post">
                            <input type="submit" name="finalizar" value="Finalizar Compra" formaction="finalizar.php" class="btn-sec">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "../layout/footer.php";
    ?>