<<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Agenda Telefonica</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<?php 
			$id = filter_input(INPUT_GET, "id");
			$nome = filter_input(INPUT_GET, "nome");
			$telefone = filter_input(INPUT_GET, "telefone");
		?>
</head>

<body>
	<div id="conteudo" >
		<h1>Alterar contato</h1>
		<p>
			<form action="alterar.php">				
				<input type="hidden" name="id" value="<?php echo $id ?>" />	
				Nome: <input type="text" name="nome" value="<?php echo $nome ?>" /><br/>
				Telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>" /><br/>
				<input type="submit" value="Alterar" />
			</form>
		</p>
	</div>
</body>
</html>