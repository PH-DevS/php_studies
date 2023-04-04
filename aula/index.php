<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Lista de hábitos</title>
	</head>
	<body>
		<div class="center">
		<h1>Lista de hábitos</h1>
		<p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
		<?

			include "conexao.php";
			
			// Executa a query da variável $sql
			$sql = "SELECT * FROM habito";
			$resultado = $conexao->query($sql);
			// Verifica se a query retornou registros
			if ($resultado->num_rows > 0) {
		?>
		<br />
		<table class="center">
			<tbody>
				<?
					// Looping pelos registros retornados
					while($registro = $resultado->fetch_assoc()) {
				?>
				<tr>
					<td><? echo $registro["nome"]; ?></td>
					<td><? echo $registro["status"] == "C" ? "Cadastrado" : "Vencido"; ?></td>
					<td><a href="vencerhabito.php?id=<?
						echo $registro["id"]; ?>">Vencer</a></td>
					<td><a href="desistirhabito.php?id=<?
						echo $registro["id"]; ?>">Desistir</a></td>
				</tr>
				<?
					} // fim do looping
				?>
			</tbody>
		</table>
		<p>Continue mudando sua vida!</p>
		<p>Cadastre mais hábitos!</p>
		<?
			} else {
		?>
			<p>Você não possui hábitos cadastrados!</p>
			<p>Começe já a mudar sua vida!</p>
		<?
			} // fim do if
			// Fecha a conexão com o MySQL
			$conexao->close();
		?>
		<a href="novohabito.php">Cadastrar Hábito</a>
		</div>
	</body>
</html>