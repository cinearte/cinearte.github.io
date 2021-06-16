<?php
	if(isset($_COOKIE["nome_usuario"])){
		$nome_usuario = $_COOKIE["nome_usuario"];
	}
	if(isset($_COOKIE["senha_usuario"])){
		$senha_usuario = $_COOKIE["senha_usuario"];
	}
	
	if(!empty($nome_usuario) AND !empty($senha_usuario)){
		include('conexao.php'); 
		$sql = "SELECT * FROM usuarios WHERE username='$nome_usuario'";	
		$resultado = mysqli_query($conexao,$sql);
		$linhas_ret = mysqli_num_rows($resultado);
		$linha = mysqli_fetch_array($resultado);
		echo $linhas_ret;
		if($linhas_ret== 1){ 
			if($senha_usuario != $linha["senha"]){
				setcookie("nome_usuario");
				setcookie("senha_usuario");
				echo "Você não efetuou o LOGIN!";
				exit;
			}
		}
		else{
			setcookie("nome_usuario");
			setcookie("senha_usuario");
			echo "Você não efetuou o LOGIN!";
			header("Location: ./login.html");
			exit;
		}
	}
	else{
		echo "Você não efetuou o LOGIN!";
		header("Location: ./login.html");
		exit;
	}
	mysqli_close($conexao); 
?>
