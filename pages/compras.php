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
                <div class="container mt-5 mb-5">
                    <h2 class="text-center">Produtos</h2>
                    <div class="card-group">
                        <?php
                        $query = "SELECT * FROM produtos";
                        $result = $conn->query($query);

                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                        <form action="compras.php?action=add&id=<?php echo $row['id'];?>" method="post">
                            <div class="card bg-color-2 font-color ml-3 mr-3 mt-3" style="width: 20rem;">
                                <img class="card-img-top" src="../images/<?php echo $row['imagem'];?>"
                                    style="height: 15rem;" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nome'];?></h5>
                                    <p style="font-size:18px;"><?php echo $row['descricao'];?></p>
                                    <h4 class="text-center mt-4">R$ <?php echo $row['valor'];?></h4>
                                    <input type="text" name="quantidade" id="quantidade" style="width:20%;" class="mt-3"
                                        value="1">
                                    <input type="hidden" name="hidden_imagem" value="<?php echo $row['imagem'];?>">
                                    <input type="hidden" name="hidden_nome" value="<?php echo $row['nome'];?>">
                                    <input type="hidden" name="hidden_descricao"
                                        value="<?php echo $row['descricao'];?>">
                                    <input type="hidden" name="hidden_valor" value="<?php echo $row['valor'];?>">
                                    <input type="submit" name="add" id="add" class="" value="Adicionar ao carrinho"
                                        style="width: 78%;">
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
            <div class="col-4 bg-danger">
                <div class="container bg-warning">
                    <h2 class="text-center">Carrinho</h2>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "../layout/footer.php";
    ?>