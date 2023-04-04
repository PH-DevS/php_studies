<?php
	include "conexao.php";
	// Obtém o id do registro
	// que foi recebido via get
	$id = $_GET["id"];
	$sql = "DELETE FROM habito WHERE id=" .$id;
	// Executa o comando delete
	// da variável $sql
	if (!($conexao->query($sql) === TRUE)) {
		die("Erro ao excluir: "	. $conexao->error);
	}	
	// Fecha a conexão
	$conexao->close();
	// Redireciona para a página inicial
	header("Location: index.php");
?>