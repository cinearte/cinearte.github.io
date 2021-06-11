<!doctype html>
<html lang="zxx">
  <head>
	<meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>CineArte | Editar Arquivo</title>
    <meta charset="utf-8">
       <!-- Google Font -->
	   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
	   rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
	   <link rel="preconnect" href="https://fonts.gstatic.com">
	   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@300&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="/../cinearte/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/../cinearte/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/../cinearte/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/../cinearte/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/../cinearte/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/../cinearte/css/style.css" type="text/css">
	<link rel="stylesheet" href="/../cinearte/css/csslogin.css" type="text/css">

	</head>
	<!-- Offcanvas Menu Begin   PERMITE O MENU MOBILE-->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper" style="background-color: black">
        <div class="offcanvas__logo">
            <a href="#"><img src="/../cinearte/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->
	
	 <!-- Header Section Begin MENU-->
	 <header class="header header-normal set-bg" style="background-color: black;">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="index.php"><img src="/../cinearte/logo.png" alt="" style="margin-left: 0px; width: 190px; height: 50px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php"> Página Inicial</a></li>
                                <li><a href="./curtas.php"> Curtas</a></li>
                                <li><a href="./downloads.php">Downloads e Formatação</a></li>
                                <li><a href="./dicas.php"> Dicas e Oficinas</a></li>
                                <li><a href="/../cinearte/adm.php" style="margin-right: 10px;"> Administrador </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->


	<body>
    <style>
        body{
            background-color: black;
        }
        p{
            color: white;
        }
    </style>
    
	 <!-- Page Preloder -->
	 <div id="preloder">
        <div class="loader"></div>
    </div>

<?php

        //pega o nome da função que foi passada para o campo hidden
        $funcao = $_REQUEST["acao"]; //$funcao vai receber "consultar" ou "salvar"
        
        if(function_exists($funcao)){ //Se existe a função "consultar" ou a função "salvar"
            call_user_func($funcao); //Chama a função
        }
        function salvar_alt(){
            include('conexao.php');
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $link = $_POST["link"]; 

            $sql = "UPDATE downloads SET";
            
            $sql = $sql ." nome='" .$nome ."',";
            $sql = $sql ." descricao='" .$descricao ."',";
            $sql = $sql ." link='" .$link ."'";
            $sql = $sql ." WHERE id = " .$id;

            //echo "Instrução: " .$sql ."<br>";
            
            $resultado=mysqli_query($conexao, $sql);
            
            //echo "Resultado= " .$resultado ."<br>";
            if($resultado == 1){
                echo "<br> </br> <p> Atualizado com sucesso! </p>" ."<br>";
            }
            else{
                echo "<br> </br> <p> Não foi possível atualizar </p>." ."<br>";
            }
            mysqli_close($conexao);
        }
    ?>
    </body>
    <!-- Footer Section Begin -->
    <footer style="bottom: 0; position: fixed; margin-top:50px; width: 100%; background-color: transparent" data-setbg="white">
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

    <script src="/../cinearte/js/jquery-3.3.1.min.js"></script>
    <script src="/../cinearte/js/bootstrap.min.js"></script>
    <script src="/../cinearte/js/jquery.slicknav.js"></script>
    <script src="/../cinearte/js/owl.carousel.min.js"></script>
    <script src="/../cinearte/js/slick.min.js"></script>
    <script src="/../cinearte/js/main.js"></script>
</html>