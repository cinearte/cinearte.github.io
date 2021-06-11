
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Staging Template">
        <meta name="keywords" content="Staging, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> CineArte | Novo Administrador</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        
    </head>

    <style>
        body{
            background-color: black;
        }
        p{
            color: white;
        }
    </style>
    <?php
	include('actions/valida_cookies.inc');
	include('actions/conexao.php'); 
?>

	<?php 
		include('actions/conexao.php'); 
	?>

    <!-- Offcanvas Menu Begin   PERMITE O MENU MOBILE-->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper" style="background-color: black">
        <div class="offcanvas__logo">
            <a href="#"><img src="logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <!-- Header Section Begin -->
    <header class="header header-normal set-bg" style="background-color: black;">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="index.php"><img src="logo.png" alt="" style="width: 190px; height: 50px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php"> Página Inicial</a></li>
                                <li><a href="./curtas.php"> Curtas</a></li>
                                <li><a href="./downloads.php">Downloads e Formatação</a></li>
                                <li><a href="./dicas.php"> Dicas e Oficinas</a></li>
                                <li><a href="./adm.php" style="margin-right: 10px;"> Administrador </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->

<?php
		//^([`~!@#$%^&*()_\-+={}[\]\\\|:;"'<>,\.\?\/]{1,3})$
			$conexao = mysqli_connect("remotemysql.com","uXUiIxfSYc","hfOxwsGHEM","uXUiIxfSYc") or die("Erro de conexão");
			mysqli_query($conexao,"set names 'utf8'");

			
			$nome = $_POST["nome"];
			$username = $_POST["username"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			include('actions/conexao.php');
			$sql = "INSERT INTO usuarios(username, senha, nome, email) VALUES";
			$sql = $sql."('$username', '$senha', '$nome', '$email')";
			
			if (mysqli_query($conexao, $sql)){
				echo "<br></br> <p> Cadastrado! </p>";
				
			} else {
				//echo "Erro!" . $sql . "<br>" . mysqli_error($conexao);
				echo "<br></br> <p> Não foi possível cadastrar. </p>";
			}
			//usuario
			//error_reporting(0);
			//ini_set('display_errors', 0);
			?>
	<br></br>
		<a href="login.html"> Ir para login</a>
    <!-- Footer Section Begin -->
    <footer style="bottom: 0; position: fixed; margin-top:50px; width: 100%; background-color: transparent" data-setbg="black">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">
                        <p style="margin-left: 20px; text-align: justify; font-size: 18px; color: white"> Copyright © <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Template
                           </i> by 
                           <a style="color: white" href="https://colorlib.com">Colorib</a>
                            | IFRS - Campus Farroupilha
                        </p>
                    </div>
                </div>
        </div>
    </footer>
</html>
