<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="IFRS - Campus Farroupila | Projeto CineArte">
    <meta name="keywords" content="CineArte, ifrs, farroupilha">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineArte | Adicionar Curtas </title>
    <script type="text/javascript" src="javascript/funcoes.js"> </script>
    <script type="text/javascript" src="formcss/js.js"> </script>
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@300&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="formcss/css.css" type="text/css">
    <link rel="stylesheet" href="css/csslogin.css" type="text/css">
    
</head>
<?php
	include('actions/valida_cookies.inc');
	include('actions/conexao.php'); 
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
 <header class="header header-normal set-bg" style="background-color: black; margin-top: -30px !important">
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
                                <li><a href="./adm.php"> Administrador </a></li>
                                <li><a href="./logout.php"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->

   

    <!-- Services Section Begin -->
 
    <div class="sidenav">
    <img src="form.png" alt="" style="width: 100%; height: 100%">
</div>
<div class="main">
<div class="login-main-text">
    <style>
        h2{
            color: black;
            font-family: 'KoHo';
        }

        p{
            font-family: 'KoHo';
        }

        #left {
            width: 49%;
            float: left;
            margin-right:2%;
        }

        #right {
            width: 49%;
            float: left;
        }
        label{
            font-family: 'KoHo';
            color: black;
            font-weight: bold;
        }
        label, input, button, textarea{
            font-size: 12px !important;
        }
    
				
    </style>
    <h2 style="font-weight: bold; font-family: 'KoHo'; font-size: 30px; margin-top: -170px !important"> Novo curta</h2>
    <p style="margin-top: 30px; font-size: 20px;"> Preencha os campos para adicionar um novo curta</p>
</div>
    <div class="col-md-6 col-sm-12">
   <div class="login-form">
    <form id="formulario" name="formulario" method="post" action="cad_curtasbd.php" style="text-align:left; 
    margin-top: -100px" >
        <input type="hidden" id="id_acao" name="acao"/>
        <div id="right">
            <div class="form-group">
                <label>Nome</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do curta" style="width: 200px;"/>
            </div>
        </div>
        <div id="left">
            <div class="form-group" style="margin-left: 100px !important; margin-right: 100px">
                <label>Obra </label>
                <input class="form-control" type="text"
                name="obra" id="obra" placeholder="Obra em que foi inspirado" style="width: 200px;">
            </div>
        </div>
        <div id="right">
            <div class="form-group">
                <label>Sinopse </label>
                <textarea class="form-control" type="text" id="sinopse" name="sinopse" placeholder="Sinopse"  rows="3" cols="53" style= "margin-top: 10px; width: 200px"></textarea>
            </div>
        </div>
        <div id="left">
            <div class="form-group" style="margin-left: 100px !important; margin-right: 100px !important">
                <label>Alunos </label>
                <input class="form-control" type="text" id="alunos" name="alunos" placeholder="Alunos" style= "margin-top: 10px; width: 200px" />
            </div>
        </div>
        <div id="left">
         <div class="form-group">
            <label style= "margin-top: 40px; margin-left: -165px">Concepção de arte</label>
            <input  class="form-control" type="text" id="concepcao" name="concepcao" placeholder="Link da pasta de arte" style= "margin-top: 10px; margin-left: -165px; width: 470px"  />
         </div>
    </div>
     
         <div class="form-group">
            <label>Roteiro </label>
            <input  class="form-control" type="text" id="roteiro" name="roteiro" placeholder="Link do roteiro" style= "margin-top: 10px; width: 470px" />
         </div>
 
         <div class="form-group">
            <label>Link</label>
            <input class="form-control" type="text" id="link" name="link" placeholder="Link do curta" style= "margin-top: 10px; width: 470px"/>
         </div>
         <input type="button" class="btn btn-black" 
         value="Salvar" class="botao" onclick="executaPost('formulario','salvar')"/>
          
      </form>
   </div>
</div>
</div>
    
<!-- Footer Section Begin 
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
    </footer>-->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>