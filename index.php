<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="css/style.css">
	<title>Alfa - Home</title>
</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-sm bg-color-2">
		<div class="container">
			<a class="navbar-brand navbar-logo font-color" href="index.php">Alfa</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link font-color" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link font-color" href="pages/cardapio.php">Cardápio</a></li>
					<li class="nav-item"><a class="nav-link font-color" href="pages/planos.php">Planos</a></li>
					<li class="nav-item"><a class="nav-link font-color" href="pages/entrar.php">Entrar</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- BANNER -->
	<section class="banner">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active c-item">
					<img class="d-block w-100 c-img" src="images/bg-image-1.jpg" alt="Primeiro Slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>Alfa Digital Development</h1>
						<h6>Aqui, a magia do forno se encontra com o sabor autêntico,
							criando momentos especiais a cada mordida.</h6>
						<a href="pages/cardapio.php"><button class="btn btn-primary fs-5">Saiba Mais</button></a>
					</div>
				</div>
				<div class="carousel-item c-item">
					<img class="d-block w-100 c-img" src="images/bg-image-2.jpg" alt="Slide 2">
					<div class="carousel-caption d-none d-md-block">
						<h1>Alfa Digital Development</h1>
						<h6>Há décadas, temos nos dedicado a criar uma experiência
							única para os nossos clientes, combinando a arte tradicional da
							padaria com ingredientes de alta qualidade.</h6>
						<a href="pages/cardapio.php"><button class="btn btn-primary fs-5">Saiba Mais</button></a>
					</div>
				</div>
				<div class="carousel-item c-item">
					<img class="d-block w-100 c-img" src="images/bg-image-3.jpg" alt="Slide 3">
					<div class="carousel-caption d-none d-md-block">
						<h1>Alfa Digital Development</h1>
						<h6>Aqui o aroma doce da tradição encontra você na porta.</h6>
						<a href="pages/cardapio.php"><button class="btn btn-primary fs-5">Saiba Mais</button></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Anterior</span>
			</a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Próximo</span>
			</a>
		</div>
	</section>

	<!-- ICONS -->
	<section class="icons mg">
		<div class="container">
			<div class="row text-center">
				<!-- ICON 1 -->
				<div class="col-sm icons-card d-flex align-items-center flex-column">
					<i class="fa-solid fa-mug-hot font-color-secundary"></i>
					<h4 class="font-color-secundary">Cardápio diverso</h4>
					<div class="icons-text">
						<p>Prepare-se para uma experiência única de sabor e aroma.</p>
					</div>
				</div>
				<!-- ICON 2 -->
				<div class="col-sm icons-card d-flex align-items-center flex-column">
					<i class="fa-solid fa-sack-dollar font-color-secundary"></i>
					<h4 class="font-color-secundary">Custo benefício</h4>
					<div class="icons-text">
						<p>O prazer de saborear nossos produtos fica ainda melhor com
							as nossas promoções especiais e preços baixos.</p>
					</div>
				</div>
				<!-- ICON 3 -->
				<div class="col-sm icons-card d-flex align-items-center flex-column">
					<i class="fa-solid fa-comments font-color-secundary"></i>
					<h4 class="font-color-secundary">Sempre atentos</h4>
					<div class="icons-text">
						<p>Estamos aqui para ouvir, ajudar e garantir que sua
							experiência seja perfeita, fale conosco!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- NOSSO PRODUTO -->
	<section class="nosso-produto bg-color-2">
		<div class="container">
			<h2 class="font-color text-center">Nosso Produto</h2>
			<div class="produto-texto font-color">
				<p class="text-center">
					Não importa se é a compra do dia, da semana ou do mês, a Alfa tem
					tudo o que você precisa. Diferentes gêneros alimentícios, produtos
					de limpeza, padaria e seção de frios.<br> <b> Dona de casa
						que quer economia vem comprar na Alfa!</b>
				</p>
			</div>
			<img src="images/pao.jpg">
		</div>
	</section>

	<!-- DEPOIMENTOS -->
	<section class="depoimentos mg">
		<div class="container">
			<h2 class="font-color-secundary text-center">Depoimentos</h2>
			<div class="row">
				<div class="col">
					<img src="images/depoimento-1.jpg" alt="Depoimento 1">
					<h4 class="font-color-secundary text-center">Ana</h4>
					<h2 class="text-center">
						<i class="fa fa-quote-left font-color-secundary icon" aria-hidden="true"></i>
					</h2>
					<p class="text-center">
						<i>Eles têm os pães mais frescos e deliciosos que já provei.
							Além disso, os bolos são sempre uma obra de arte!</i>
					</p>
				</div>
				<div class="col">
					<img src="images/depoimento-2.jpg" alt="Depoimento 2">
					<h4 class="font-color-secundary text-center">Izabela</h4>
					<h2 class="text-center">
						<i class="fa fa-quote-left font-color-secundary icon" aria-hidden="true"></i>
					</h2>
					<p class="text-center">
						<i>É um lugar onde você pode sentir o carinho que colocam em
							cada produto. Recomendo a todos!</i>
					</p>
				</div>
				<div class="col">
					<img src="images/depoimento-3.jpg" alt="Depoimento 3">
					<h4 class="font-color-secundary text-center">Diego</h4>
					<h2 class="text-center">
						<i class="fa fa-quote-left font-color-secundary icon" aria-hidden="true"></i>
					</h2>
					<p class="text-center">
						<i>O aroma dos pães acabados de assar quando entrei era
							incrível. Mal posso esperar para voltar e experimentar mais
							coisas!</i>
					</p>
				</div>
				<div class="col">
					<img src="images/depoimento-4.jpg" alt="Depoimento 4">
					<h4 class="font-color-secundary text-center">Valery</h4>
					<h2 class="text-center">
						<i class="fa fa-quote-left font-color-secundary icon" aria-hidden="true"></i>
					</h2>
					<p class="text-center">
						<i>A padaria fez o bolo de casamento dos nossos sonhos! Ficou
							absolutamente deslumbrante e delicioso.</i>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- FOOTER -->

	<footer class="bg-color-2 font-color pt-4 pb-2">
		<div class="container">
			<!-- Cria uma div de linha para dividir o rodapé em três colunas -->
			<div class="row">
				<!-- Coluna 1: Informações de contato -->
				<div class="col-md-4">
					<h6>Contato</h6>
					<p>Endereço: Rua XY, 123</p>
					<p>E-mail: contato@alfadigital.com</p>
					<p>Telefone: (61) 9 7456-7890</p>
				</div>
				<!-- Coluna 2: Links rápidos -->
				<div class="col-md-4">
					<h6>Links Rápidos</h6>
					<!-- Lista não ordenada com links para diferentes páginas -->
					<ul class="list-unstyled">
						<li><a href="index.php" class="link font-color">Página
								Inicial</a></li>
						<li><a href="pages/cardapio.php" class="link font-color">Cardápio</a></li>
						<li><a href="#" class="link font-color">Planos</a></li>
						<li><a href="pages/entrar.php" class="link font-color">Entrar</a></li>
						<li><a href="pages/cadastrar.php" class="link font-color">Cadastrar</a></li>
					</ul>
				</div>
				<!-- Coluna 3: Links de mídia social -->
				<div class="col-md-4">
					<h6>Redes Sociais</h6>
					<!-- Links para outras redes sociais -->
					<a href="https://www.instagram.com/Itour_Viagens" target="_blank" class="social-link"><i class="fab fa-instagram link font-color"></i></a> <a href="#" target="_blank" class="social-link link font-color"><i class="fab fa-facebook"></i></a> <a href="#" target="_blank" class="social-link"><i class="fab fa-twitter link font-color"></i></a>
				</div>
			</div>

			<p class="text-center">&copy; 2023 Alfa Digital Developer</p>
		</div>
	</footer>

	<!-- FONTAWESOME -->
	<script src="https://kit.fontawesome.com/bf8d9f5eb9.js" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>