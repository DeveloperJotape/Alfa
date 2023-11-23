<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/planos.css">
    <title>Planos</title>
</head>

<body>
    <?php
    //Inclui a navbar
    include "../layout/navbar.php";
    //Inclui o banner
    include "../layout/banner.php";
    ?>

    <section class="plans d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h2>Nossos planos</h2>
            <div id="carouselPlanos" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner d-flex justify-content-center align-items-center">
                    <div class="carousel-item active">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../images/paesplano1.jpg" class="card-img-top" alt="produto1">
                            <div class="card-body">
                                <h5 class="card-title">Plano 1</h5>
                                <p class="card-text">Sirva-se à vontade de nossos pães recém-saídos do forno. Escolha entre uma variedade de opções, desde croissants folhados até pães integrais. Acompanhe com manteiga, geleias e requeijão.</p>
                                <a href="https://wa.me/+5561000000" class="btn btn-primary">Saiba mais.</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../images/planos2.jpg" class="card-img-top" alt="produto2">
                            <div class="card-body">
                                <h5 class="card-title">Plano 2</h5>
                                <p class="card-text">Delicie-se com nossa seleção de doces irresistíveis, como bolos caseiros, muffins de frutas e cookies. Uma explosão de sabores para satisfazer sua doçura matinal.</p>
                                <a href="https://wa.me/+5561000000" class="btn btn-primary">Saiba mais.</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="../images/planos3.jpg" class="card-img-top" alt="produto3">
                            <div class="card-body">
                                <h5 class="card-title">Plano 3</h5>
                                <p class="card-text">Experimente nossos salgados preparados na hora, incluindo pães de queijo, empadas e croissants recheados. Uma combinação perfeita de sabores para todos os paladares.</p>
                                <a href="https://wa.me/+5561000000" class="btn btn-primary">Saiba mais.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselPlanos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPlanos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <?php
    include "../layout/footer.php";
    ?>

</body>

</html>