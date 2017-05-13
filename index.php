<html>
	<head>
		<title>Agenda Telefonica CRUD</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<?php 
			$parametro = filter_input(INPUT_GET,"parametro");
			$mysqllink = mysql_connect("localhost","root","","agenda_telefonica");

			if (!$mysqllink) {
			    die('Não foi possível conectar: ' . mysql_error());
			}
			echo 'Conexão bem sucedida';

			mysql_select_db("agenda_telefonica");

			if($parametro){
				$dados = mysql_query("select * from contato where nome like '$parametro%' order by nome");
			}else{
				$dados = mysql_query("select * from contato order by nome "); 
			}

			$linha = mysql_fetch_assoc($dados);
			$total = mysql_num_rows($dados);

		?>
	</head>
	<body>
		<div id="conteudo">
			<h1>Agenda Telefonica</h1>
			<p>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="parametro"/>
					<input type="submit" value="Buscar" />
				</form>
			</p>
			<p>
				<a href="novocontato.php">Adicionar novo contato</a>
			</p>

			<table border="1">
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>Telefone</td>
				</tr>
				<?php 
					if($total){ do {
				?>
				<tr>
					<td><?php echo $linha['id'] ?></td>
					<td><?php echo $linha['nome'] ?></td>
					<td><?php echo $linha['telefone'] ?></td>
					<td><a href="<?php echo "paginaAlterar.php?id=". $linha['id'] . "&nome=" . $linha['nome'] ."&telefone" . $linha['telefone'] ;?>">Alterar</a></td>
					<td><a href="<?php echo "excluir.php?id=". $linha['id']?>">Excluir</a></td>
				</tr>
				<?php 
					}while($linha = mysql_fetch_assoc($dados));

					mysql_free_result($dados);}
					mysql_close($mysqllink);
				 ?>

			</table>
		</div>

	</body>
</html>
