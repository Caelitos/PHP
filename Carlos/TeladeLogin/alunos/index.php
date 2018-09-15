<?php

session_start();
if ($_SESSION['login'] == null) {
	header("Location:../index.php");
}else{
	echo "Bem vindo " . $_SESSION['login'];
}



?>