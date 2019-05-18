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
		<header>
			<div class="topo">
				<h1 id="titulo">VIPAX</h1><br>
				<h2 id="subtitulo">Admin System</h2>
			</div>
		</header>
		<fieldset class="formulario">
			<legend class="decorado" id="legenda">Insira seu Login e Senha</legend>
			<form action="" method="post">
				<label for="login" class="decorado">Login</label><br>
				<input type="text" id="login" class="decorado" name="login_usuario" required = "" placeholder="Insira seu login"><br><br>

				<label for="senha" class="decorado">Senha</label><br>
				<input type="password" id="senha" class="decorado" name="senha_usuario" required = "" placeholder= "Insira sua senha" /> <br><br>

				<a href = "home.php"  type="button" class="botao">Entrar</a><br>
				<p class="decorado"><b>Ou</b></p>
				<a href="cadastro.php" class="botao">Cadastre-se</a>
			</form>
		</fieldset>
		<footer><a href="https://br.freepik.com/fotos-vetores-gratis/fundo" target="_blank" class="artista">Fundo foto criado por kjpargeter - br.freepik.com</a></footer>
	</body>
	
</html>