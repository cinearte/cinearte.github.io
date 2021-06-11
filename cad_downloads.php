<html>
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineArte | Adicionar Arquivos </title>
    <script type="text/javascript" src="javascript/funcoes.js"> </script>
    <script type="text/javascript" src="formcss/js.js"> </script>
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
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
        <div id="preloder">
            <div class="loader"></div>
        </div>

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
                                <li><a href="./logout.php"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->
      
        <div class="sidenav">
            <img src="img/form.png" alt="" style="width: 100%; height: 100%">
        </div>
        <div class="main">
        <div class="login-main-text">
            <style>
                h2{
                    color: black;
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
            font-size: 24px;
            color: black;
            font-weight: bold;
        }
            </style>
     <h2 style="font-weight: bold; font-family: 'KoHo'; font-size: 60px; margin-top: -170px !important"> Novo Arquivo</h2>
    <p style="margin-top: 30px; font-size: 25px;"> Preencha os campos para adicionar um novo arquivo</p>
    </div>
    <div class="col-md-6 col-sm-12">
    <div class="login-form">
        <form id="formulario" name="formulario" method="post" action="cad_downloadsbd.php" style="text-align:left; margin-top: -50px" >
            <input type="hidden" id="id_acao" name="acao"/>
           
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control"  type="text" name="nome" id="nome" placeholder="Nome do arquivo" style= "margin-top: 10px" />
                </div>
           
          
                <div class="form-group">
                    <label>Descrição </label>
                    <input class="form-control"  type="text" name="descricao" id="descricao" placeholder="Descrição do arquivo" style= "margin-top: 10px" />
                </div>
            
            
                <div class="form-group">
                    <label>Link </label>
                    <input class="form-control"  type="text" id="link" name="link" placeholder="Link para acessar o arquivo" style= "margin-top: 10px" />
                </div>
            
            <input type="button" class="btn btn-black" 
            value="Salvar" class="botao" onclick="executaPost('formulario','salvar')" style="margin-top: 30px"/>

            
        </form>
    </div>
    </div>
    </div>



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
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>

