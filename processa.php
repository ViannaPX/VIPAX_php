<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$conf_senha = filter_input(INPUT_POST, 'conf_senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Sexo: $sexo <br>";
//echo "Telefone: $telefone <br>";
//echo "Data de Nascimento: $dataNascimento <br>";
//echo "Senha: $senha <br>";
//echo "Confirmação de Senha: $conf_senha <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, sexo, telefone, dataNascimento, senha, conf_senha) VALUES ('$nome', '$email', '$sexo', '$telefone', '$dataNascimento', '$senha', '$conf_senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

/*
if(mysqli_inser_id($conn)){
	$_SESSION['msg'] = "<p>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	header("Location: index.php");
}
*/