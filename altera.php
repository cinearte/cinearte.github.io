<?php
	$id = $_GET['rowid']; //obtém a linha
	$nome = "";
	$fone = "";
	$data_cad = "";
	
	include('actions/conexao.php');
	
	if($id!=0){  		
		$sql = "SELECT * FROM curtas WHERE id = " .$id;
		
		$resultado = mysqli_query($conexao,$sql);
		$linhas = mysqli_num_rows($resultado);
		$row = mysqli_fetch_array($resultado);
		
		//Popular as variáveis;
		$nome = $row["nome"];
        $obra = $row["obra"];
        $sinopse = $row["sinopse"];
		$alunos = $row["alunos"];
		$concepcao = $row["concepcao"];
		$roteiro = $row["roteiro"];
        $link = $row["link"];
		
		mysqli_close($conexao); // fecha conexão
	}
?>
<!DOCTYPE html>
<html>
   <head>
	  <meta charset="utf-8">
      <title>Alteração</title>
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	  <script type="text/javascript" src="javascript/funcoes.js"> </script>
	</head>
<body>
    <h1>Alteração de Clientes</h1>
	<form id="formulario" method="post" action="actions/action.php" name="formulario">
		
		<input type="hidden" id="id_acao" name="acao"/> <!-- Controle "Escondido" -->
		
		<input type="hidden" id="id_identificacao" name="identificacao" value="<?php 
																				echo $id;
																				?>"/> <!-- Controle "Escondido" -->
		<label>Nome:</label>
		<input type="text" name="nome" id="nome"   autofocus required value="<?php
																				echo $nome;
																			?>"/><br />
		
		<label>Obra:</label>
		<input type="text" name="obra" id="obra"  required value="<?php 
																	echo $obra;
																	?>"/><br />
		
	
		<label>Sinopse:</label>
		<input type="text" name="sinopse" id="sinopse"  required value="<?php 
																			echo $sinopse;
																		?>"/><br />

		<label>Alunos:</label>
		<input type="text" name="alunos" id="alunos"  required value="<?php 
																			echo $alunos;
																		?>"/><br />	
																							
		<label>Concepção de arte:</label>
		<input type="text" name="concepcao" id="concepcao" required value="<?php 
																				echo $concepcao;
																			?>"/><br />

		<label>Roteiro:</label>
		<input type="text" name="roteiro" id="roteiro"required value="<?php 
																			echo $roteiro;
																		?>"/><br />

		<label>Link:</label>
		<input type="text" name="link" id="link"  required value="<?php 
																		echo $link;
																?>"/><br />

		<input type="button" value="Salvar" class="botao" onclick="executaPost('formulario','salvar_alt');"/>
		<!--
		<input type="button" value="Consultar"  class="botao" onclick="executaPost('formulario','consultar');"/>
		-->
	</form>  
	</body>
</html>