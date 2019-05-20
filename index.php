<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>VIPAX Admin System</title>
		<meta charset="utf-8">
		<link rel="icon" href="static/icone.png">
		<link rel="stylesheet" type="text/css" href="static/style.css">
		<link href="https://fonts.googleapis.com/css?family=Akronim|Averia+Serif+Libre" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">  
	</head>

	<body background="static/background2.jpg">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<header>
			<div class="topo">
				<h1 id="titulo">VIPAX</h1><br>
				<h2 id="subtitulo">Admin System</h2>
			</div>
		</header>
		<fieldset class="formulario" id="form-login">
			<center>
			<legend>Entrar</legend>
			</center>
			<form action="processa2.php" method="POST">
				
				<label for="login" class="decorado">Login</label><br>
				<center>
				<input type="text" id="login" class="decorado" name="login" required = " " placeholder="Insira seu login"><br><br>
				</center>
				
				<label for="senha" class="decorado">Senha</label><br>
				<center>
				<input type="password" id="senha" class="decorado" name="senha" required = " " placeholder= "Insira sua senha" /> <br><br>
				</center>
				
				<center>
				<a href = "home.php">
					<button  class = "botao" type = "submit">Entrar</button>
				</a><br>
				<p class="decorado"><b>Ou</b></p>
				<a href="cadastro.php" class="botao">Cadastre-se</a>
				</center> 
			</form>
		</fieldset>
		<footer><a href="https://br.freepik.com/fotos-vetores-gratis/fundo" target="_blank" class="artista">Fundo foto criado por kjpargeter - br.freepik.com</a></footer>
		
		
	</body>
	
</html>