<?php
	include "conexao.php";
	// Atualiza o status de C - Cadastrado
	// para V - vencido
	$id = $_GET["id"];
	$sql = "UPDATE habito SET status = 'V' WHERE id = $id";
	// Verifica se o comando foi
	// executado com sucesso
	if (!($conexao->query($sql) === TRUE)) {
		$conexao->close();
		die("Erro ao atualizar: " . $conexao->error);
	}
	// Fecha a conexão
	$conexao->close();
	// Redireciona para index
	header("Location: index.php");
?>