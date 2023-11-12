<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		//Inclui os metas e links
		include "../layout/meta.php";
	?>
	<title>Alfa - Cadastrar</title>
</head>
<body>
	<?php
		//Inclui a navbar
		include "../layout/navbar.php";
	?>

	<?php
		//Envia os dados do form para o bd
		if(isset($_POST['submit'])){
		
		include_once('../app/config/config.php');	

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];

		$result =  mysqli_query($conn, "INSERT INTO usuarios(usuario,senha,email,telefone) 
									VALUES ('$usuario', '$senha', '$email', '$telefone')");

		header('Location: entrar.php');							

		}
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
					<p>Junte-se à nossa comunidade de amantes de pães e doces!
						Preencha o formulário ao lado para criar uma conta na Padaria
						Alfa.</p>

				</div>
				<!-- DIREITA -->
				<div
					class="col entrar-form d-flex justify-content-center bg-color-2">
					<form action="cadastrar.php" method="POST"
						class="form-container d-flex justify-content-center flex-column" autocomplete="off">
						<div class="user-icon text-center d-flex justify-content-center">
							<div class="bg-icon">
								<i class="fa-solid fa-user font-color"></i>
							</div>
						</div>

						<div class="text-center font-color">
							<h2>Cadastre-se</h2>
						</div>

						<div>
							<input type="text" name="usuario" id="usuario" class="input-box"
								placeholder="Usuário" required>
						</div>
						<div>
							<input type="password" name="senha" id="senha" class="input-box"
								placeholder="Senha" required>
						</div>
						<div>
							<input type="email" name="email" id="email" class="input-box"
								placeholder="Email" required>
						</div>
						<div>
							<input type="tel" name="telefone" id="telefone" class="input-box"
								placeholder="Telefone (xx) x xxxx-xxxx" required>
						</div>
						<div class="d-flex justify-content-center mt-2">
							<input type="submit" name="submit" value="Cadastrar" class="btn-sec">
						</div>

						<div class="text-center font-color">
							<p>
								Já possui conta?<br> <a href="entrar.php"
									class="link font-color"><b>FAÇA O LOGIN</b></a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php
		include "../layout/footer.php";
	?>