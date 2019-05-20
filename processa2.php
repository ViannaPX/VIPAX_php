<?php

include_once("conexao.php");

//Pegar os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

//Prevenir o MySQL Injection
$login = stripcslashes($login);
$senha = stripcslashes($senha);
$login = mysqli_real_escape_string($conn, $login);
$senha = mysqli_real_escape_string($conn, $senha);

//Query do database para usuário
$result = mysqli_query($conn,"select * from usuarios where login = '$login' and senha = '$senha'")
			or die("Erro ao executar query ".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['login'] == $login && $row['senha'] == $senha){
	echo "Login Efetuado com Sucesso! Seja Bem Vindo ".$row['login'];
} else{
	echo "Falha ao efetuar Login!";
}

?>