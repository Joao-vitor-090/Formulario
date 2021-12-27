<?php
$servidor = "localhost";
$user = "root";
$password = "";
$dbname = "formulario";

$conexao = mysqli_connect($servidor, $user, $password, $dbname);
if(!$conexao){
	die("houve um erro: " .mysqli_connect_error());
}
?>
