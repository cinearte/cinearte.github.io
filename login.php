<html>
<script>
	function funcao1()
	{
	alert("Eu sou um alert!");
	}
</script>
</html>
<?php

	//Obtém os valores digitados
	$username = $_POST["usuario"];
	$senha = $_POST["senha"];
	
	//Acesso ao banco de dados
	include('actions/conexao.php'); 
	
	$sql = "SELECT * FROM usuarios where username='$username'";
		
	$resultado = mysqli_query($conexao,$sql);
	$linhas_ret = mysqli_num_rows($resultado);
	
	$linha = mysqli_fetch_array($resultado);


	if($linhas_ret==0){ //conexão não retornou nenhum resultado
		echo "<html>";
		echo "<body>";
		echo "<p align=\"center\">Usuário Não Encontrado!</p>";
		echo "<p align=\"center\"><a href=\"login.html\">Voltar</a>";
		echo "</body>";
		echo "</html>";
	}
	else{
		if($senha != $linha["senha"]){
			echo "<html>";
			echo "<body>";
			echo "<p align=\"center\">A Senha está incorreta!</p>";
			echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
			echo "</body>";
			echo "</html>";
		}
		else{ //usuário e senhas corretos. Cria cookie
			setcookie("nome_usuario", $username);
			setcookie("senha_usuario",$senha);
			header("Location: adm.php"); //Direciona para a página do administrador
		}
	}
	mysqli_close($conexao);
?>

<!-- Footer Section Begin -->
<footer style="bottom: 0; position: fixed; margin-top:50px; width: 100%; background-color: transparent" data-setbg="black">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">
                        <p style="margin-left: 20px; text-align: justify; font-size: 18px; color: black"> Copyright © <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Template
                           </i> by 
                           <a style="color: black" href="https://colorlib.com">Colorib</a>
                            | IFRS - Campus Farroupilha
                        </p>
                    </div>
                </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>