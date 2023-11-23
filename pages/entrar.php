<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "../layout/meta.php";
	?>
	<title>Alfa - Entrar</title>
</head>
<body>	
	<?php
		//Inclui a navbar
		include "../layout/navbar.php";
	?>

	<section class="entrar mg">
		<div class="container">
			<div class="row">
				<!-- ESQUERDA -->
				<div
					class="col entrar-img container d-flex justify-content-center font-color flex-column">
					<p class="logo mb-5">Alfa</p>
					<div class="esq-entrar-texto">
						<h2>seja membro e aprecie um delicioso café</h2>
					</div>
					<p>Bem-vindo à Padaria Alfa! Por favor, faça seu login para
						acessar sua conta. Sua jornada de delícias está prestes a
						continuar.</p>

				</div>
				<!-- DIREITA -->
				<div
					class="col entrar-form d-flex justify-content-center bg-color-2">
					<form action="../app/controller/LoginController.php" method="POST"
						class="form-container d-flex justify-content-center flex-column" autocomplete="off">
						<div class="user-icon text-center d-flex justify-content-center">
							<div class="bg-icon">
								<i class="fa-solid fa-user font-color"></i>
							</div>
						</div>

						<div class="text-center font-color">
							<h2>Entrar</h2>
						</div>

						<div>
							<input type="text" name="usuario" id="usuario" class="input-box"
								placeholder="Usuário">
						</div>
						<div>
							<input type="password" name="senha" id="senha" class="input-box"
								placeholder="Senha">
						</div>
						<div>
							<input type="checkbox" id="input-checkbox"> <label
								for="input-checkbox" class="font-color">Lembrar usuário</label>
						</div>
						<div class="d-flex justify-content-center mt-2">
							<input type="submit" name="submit" value="Enviar" class="btn-sec">
						</div>
						<div class="text-center font-color">
							<p>
								Não possui conta?<br> <a href="../pages/cadastrar.php"
									class="link font-color"><b>CADASTRE-SE</b></a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php
		//Inclui o footer
		include "../layout/footer.php";
	?>