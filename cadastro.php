<!DOCTYPE html>
<html>
	<head>
		<title>VIPAX Cadastro</title>
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
		//Formulário de Cadastro
		<fieldset class="formulario" id="form-cadastro">
			<center>
			<legend>Cadastro</legend>
			</center>
			<form action="processa.php" method="POST">
				
				//Nome
				<label for="nome" class="decorado">Nome Completo</label><br>
				<center>
				<input type="text" id="idNome" class="decorado" name="nome"  required = "" pattern="[a-zA-Z\s]+$" placeholder="EX: Napoleão Bonaparte"/><br><br>
				</center>
				
				//E-mail
				<label for="email" class="decorado">E-mail</label></br>
				<center>
				<input type="email" id= "idEmail" class="decorado" name="email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required = "" placeholder="Ex:Napoleao@email.com"/><br><br> 	
				</center>
				
				//Login
				<label for="login" class="decorado">Crie seu Login</label><br>
				<center>
				<input type="text" id="login" class="decorado" name="login" required = "" placeholder="Insira seu login"><br><br>
				</center>
				
				//Senha
				<label for="senha" class="decorado">Senha</label><br>
				<center>
				<input type="password" id="senha" class="decorado" name="senha" required = ""  placeholder="Insira sua senha"/><br><br>
				</center>
				
				//Confirmação de Senha
				<label for="conf_senha" class="decorado">Confirmação de Senha</label><br>
				<center>
				<input type="password" id="senha" class="decorado" name="conf_senha" required = ""  placeholder="Insira sua senha" /><br><br>
				</center>
				
				<center>
				<a href="index.php">
					<button  class = "botao" type = "submit">Enviar</button> 
				</a>
				<p class="decorado"><b>Clique no botão e efetue seu login:</b></p>
				<a href="index.php" class="botao">Login</a>
				</center>
			</form>	
			
			
				
		</fieldset>
		
		<footer><a href="https://br.freepik.com/fotos-vetores-gratis/fundo" target="_blank" class="artista">Fundo foto criado por kjpargeter - br.freepik.com</a></footer>
	
		<script src="confirmação.js"></script>
	
	</body>
</html>