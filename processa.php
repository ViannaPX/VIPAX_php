<?php

include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$conf_senha = filter_input(INPUT_POST, 'conf_senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Sexo: $sexo <br>";
//echo "Telefone: $telefone <br>";
//echo "Data de Nascimento: $dataNascimento <br>";
//echo "Senha: $senha <br>";
//echo "Confirmação de Senha: $conf_senha <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, login, senha, conf_senha) VALUES ('$nome', '$email', '$login', '$senha', '$conf_senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

/*
if(mysqli_inser_id($conn)){
	$_SESSION['msg'] = "<p>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	header("Location: index.php");
}
*/

//Pegar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

//Prevenir o MySQL Injection
$login = stripcslashes($login);
$senha = stripcslashes($senha);
$login = mysqli_real_escape_string($conn, $login);
$senha = mysqli_real_escape_string($conn, $senha);

/*
//Conectar ao server e selecionar o DB
mysqli_connect("localhost", "root", "");
mysqli_select_db("vipax");
*/

//Query do database para usuário
$result = mysqli_query($conn,"select * from usuarios where login = '$login' and senha = '$senha'")
			or die("Erro ao executar query ".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['login'] == $login && $row['senha'] == $senha){
	echo "Cadastro Efetuado com Sucesso! Seja Bem Vindo ".$row['login'];
} else{
	echo "Falha ao efetuar Login!";
}

?>