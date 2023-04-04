<?php
// Obtém a lista de hábitos do
// banco de dados MySQL
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito";
// Cria uma conexão com o banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);
// Verifica a conexão

if ($conexao->connect_error) {
	die("Falha na conexão: " .	$conexao->connect_error);
}
