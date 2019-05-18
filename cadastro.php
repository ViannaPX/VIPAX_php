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
		
		<fieldset class="formulario" id="espaco">
			<legend class="decorado" id="legenda">Insira seu Login e Senha</legend>
			<form action="processa.php" method="POST">
			
				<label for="idNome" class="decorado">Nome Completo</label><br>
				<input type="text" id="idNome" class="decorado" name="nome"  required = "" pattern="[a-zA-Z\s]+$" placeholder="EX: Napoleão Bonaparte"/><br><br>
				
				<label for="idE-mail" class="decorado">E-mail</label></br>
				<input type="email" id= "idEmail" class="decorado" name="email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required = "" placeholder="Ex:Napoleao@email.com"/><br><br> 	
								
			<fieldset>
				
				<legend class = "decorado">Sexo</legend>
				<input type="radio" id="idsexo" name="sexo"  checked>
				<label for="idSexo">Masculino</label><br>
				
				<input type="radio" id="idSexo" name = "sexo" required = "" name="sexo" >
				<label for="idSexo">feminino</label>	
				
			</fieldset><br>
			
				<label for="idTel" class = "decorado">Telefone</label><br>
				<input type = "tel" id= "idTel" class = "decorado" name = "telefone" required = ""  placeholder = "EX:(xx) xxxxx-xxxx"  pattern ="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"/><br><br>
				
				
				<label for="data-nascimento" class = "decorado">Data de nascimento:</label><br>
				<input id="data-nascimento" name="dataNascimento"  type="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1900-01-01" required /><br><br>
			
				<label for="senha" class="decorado">Senha</label><br>
				<input type="password" id="senha" class="decorado" name="senha" required = ""  placeholder="Insira sua senha"/><br><br>
				
				<label for="senha" class="decorado">Confirmação de Senha</label><br>
				<input type="password" id="senha" class="decorado" name="senha" required = ""  placeholder="Insira sua senha" /><br><br>
				<button  class = "botao" type = "submit">Enviar</button>
				<p class="decorado"><b>Clique no botão e efetue seu login:</b></p>
				<a href="index.php" class="botao">Login</a>
			</form>	
			
			
				
		</fieldset>
		
		<footer><a href="https://br.freepik.com/fotos-vetores-gratis/fundo" target="_blank" class="artista">Fundo foto criado por kjpargeter - br.freepik.com</a></footer>
	</body>
</html>