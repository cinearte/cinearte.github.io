
<!DOCTYPE html>
<html lang="zxx">

<?php
	include('./actions/valida_cookies.inc');
	include('./actions/conexao.php'); 
?>

<head>
<meta charset="UTF-8">
    <meta name="description" content="IFRS - Campus Farroupila | Projeto CineArte">
    <meta name="keywords" content="CineArte, ifrs, farroupilha">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CineArte | Excluir Curtas </title>

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
    <link rel="stylesheet" href="formcss/css.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <style>
        body{
            background-color: black;
        }

        <style>
    a:hover, a:focus{
        color: #FF5151 !important;  
    }
    a:link, a:visited{
        text-decoration: none;
        outline: none;
        font-weight: bold;
        color: white !important;
    }
    </style>
    </style>
  <!-- Offcanvas Menu Begin   PERMITE O MENU MOBILE-->
  <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper" style="background-color: black">
        <div class="offcanvas__logo">
        <a href="index.php"><img src="logo.png" alt="" style="margin-left: 0px; width: 130px; height: 40px;"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header header-normal set-bg" style="background-color: black; margin-top: -20px">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                        <a href="index.php"><img src="logo.png" alt="" style="margin-left: 0px; width: 130px; height: 40px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu mobile-menu">
                            <ul>
                            <style>
                
                                a{
                                    font-size: 12px !important;
                                }
                            </style>
                                <li style="margin-left: -80px"><a href="./index.php"> Página Inicial</a></li>
                                <li><a href="./curtas.php"> Curtas</a></li>
                                <li><a href="./downloads.php">Downloads e Formatação</a></li>
                                <li><a href="./dicas.php"> Dicas e Oficinas</a></li>
                                <li class="active"><a href="./adm.php"> Administrador </a></li>
                                <li><a href="./logout.php"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->

    <style>
        body{
            background-color: black;
        }
        p{
            color: white;
            font-size: 12px;
        }
    </style>
<?php
	include('actions/conexao.php');
	$id = $_GET['rowid']; //obtém a linha

	$sql = "DELETE FROM curtas WHERE id = ".$id; 
    // montar string de conexão com o id concatenado.

	
	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);
	
	
	if($linhas==1){
		echo "<br> </br> <p> Registro excluído com sucesso! </p>" ."<br>";
	}
	else{
		echo "<br> </br> <p>  Não foi possível excluir! </p>" .$linhas ."<br>";
	}
	mysqli_close($conexao); // fecha conexão
?>

    <!-- Footer Section Begin -->
    <footer style="bottom: 0; position: fixed; margin-top:50px;  width: 100%; background-color: transparent" data-setbg="black">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">
                        <p style="margin-left: 20px; text-align: justify; font-size: 10px; color: white"> Copyright © <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Template
                           </i> by 
                           <a style="color:white" href="https://colorlib.com">Colorib</a>
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

