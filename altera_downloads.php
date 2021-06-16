<!DOCTYPE html>
<html>
   <head>
	  <meta charset="utf-8">
      <title>Alteração de Downloads</title>
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
	include('./actions/valida_cookies.inc');
	include('./actions/conexao.php'); 
?>

    <?php 

        $id = $_GET['rowid']; //obtém a linha
        $nome = "";
        $descricao = "";
        $link = "";
        
        include('actions/conexao.php');
        
        if($id!=0){  		
            $sql = "SELECT * FROM downloads WHERE id = " .$id;
            
            $resultado = mysqli_query($conexao,$sql);
            $linhas = mysqli_num_rows($resultado);
            $row = mysqli_fetch_array($resultado);
            
            //Popular as variáveis;
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $link = $row['link'];
            
            mysqli_close($conexao); // fecha conexão  
        }?>

    <body>

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
            <img src="form.png" alt="" style="width: 100%; height: 100%">
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
     <h2 style="font-weight: bold; font-family: 'KoHo'; font-size: 60px; margin-top: -170px !important"> Editar Arquivo</h2>
    <p style="margin-top: 30px; font-size: 25px;"> Preencha os campos para editar os dados do arquivo selecionado</p>
    </div>
    <div class="col-md-6 col-sm-12">
    <div class="login-form">
    <form id="formulario" action="actions/actions2.php" method="post" name="formulario" style="text-align:left; margin-top: -50px" >
         <input type="hidden" id="id_acao" name="acao"/>
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>"/> <!-- Controle "Escondido" -->
        <div class="form-group">
            <label class="label">Nome:</label> 
            <input class="form-control"   type="text" id="nome" name="nome" style= "margin-top: 10px" value="<?php echo $nome;?>"/>
        </div>
        <div class="form-group">
            <label class="label">Descrição:</label>
            <input class="form-control"   type="text"od="descricao" name="descricao" style= "margin-top: 10px" value="<?php echo $descricao;?>"/>
        </div>
        <div class="form-group">
            <label class="label">Link:</label> 
            <input class="form-control"   type="text" id="link" name="link" style= "margin-top: 10px" value="<?php echo $link;?>"/>
        </div>
        <input type="button" value="Salvar" class="btn btn-black" class="botao" onclick="executaPost('formulario','salvar_alt');" style="margin-top: 30px"/>
    </form>  
    </div>
    </div>
    </div>
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
