<?php

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$usuarioSis = "admin";
$senhaSis = "123";

if($login == "admin" && $senha == "123"){
	session_start();
	$_SESSION['login'] = $usuarioSis;
	$_SESSION['senha'] = $senhaSis;
	header("Location:../alunos/index.php");

}else{
	header("Location:../index.php");
}






?>