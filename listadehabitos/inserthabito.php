<?php
	include "conexao.php";
	
	// Busca nome que foi recebido via get através do formulário de cadastro
	$nome = $_GET["nome"];
	// Insere o hábito na tabela
	// habito do banco de dados
	$sql = "INSERT INTO habito (nome, status) VALUES ('$nome', 'C')";
	// Verifica se ocorreu tudo bem
	// Caso houve erro, fecha a conexão e aborta o programa
	if (!($conexao->query($sql) === TRUE)) {
		$conexao->close();
		die("Erro: " . $sql . "<br>" . $conexao->error);
	}
	// Fecha a conexão com o Banco de dados
	$conexao->close();
	// Envia para a página index onde aparece a lista de hábitos, já com o novo hábito cadastrado
	header("Location: index.php");
?>