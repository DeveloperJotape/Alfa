<?php

include('../app/config/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "../layout/meta.php";
  ?>
  <title>Alfa - Cardapio</title>
</head>

<body>
  <?php
  //Inclui a navbar
  include "../layout/navbar.php";
  //Inclui o banner
  include "../layout/banner.php";
  ?>
  <section class="cardapio mg">
    <h2 class="text-center font-color-secundary">Cardápio</h2>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <?php
        $query = "SELECT * FROM produtos ORDER BY id ASC";
        $result = $conn->query($query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="card ml-4 mr-4 mt-3 mb-3 bg-color-2 font-color" style="width: 20rem;">
              <img class="card-img-top" src="../images/<?php echo $row['imagem']; ?>" style="height: 15rem;" alt="<?php echo $row['descricao'] ?>">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row['nome']; ?></h4>
                <p style="font-size:18px;"><?php echo $row['descricao']; ?></p>
                <h4 class="text-center mt-4">R$ <?php echo number_format($row['valor'], 2); ?></h4>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
  <?php
  include "../layout/footer.php";
  ?>
</body>

</html>