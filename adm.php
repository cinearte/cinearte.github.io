<!DOCTYPE html>
<html lang="zxx">

<?php
	include('./actions/valida_cookies.inc');
	include('./actions/conexao.php'); 
?>

<head>
    <meta charset="UTF-8">
     <meta name="description" content="Projeto CineArte - IFRS Campus Farroupilha">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CineArte | Administrador</title>

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
                                <li class="active"><a href="./adm.php" style="margin-right: 10px;"> Administrador </a></li>
                                <li><a href="./logout.php"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->

    <div class="section-title">
        <h2 style= "text-align:center; margin-top: 20px; margin-bottom: 0px; color: white"> Página do Administrador</h2>
    </div>

    <div class="form-style-8">
        <form method="POST" action="pesquisa_adm.php">
            <input class="textbox" type="search" style="background-color: black; color: white"
            name="pesquisar" id="pesquisar" placeholder="Pesquisar curtas: (Nome do curta, obra, alunos)" autofocus required />
        </form>
    </div>

    <table class="table table-dark table-striped table-hover" style="background-color: black">
        <thead>
            <tr>
            <th scope="col"> Curtas</th>
            <th scope="col"> <a href="cad_curtas.php"> Novo curta</a></th>
            </tr>
            <tr> 
            <!-- <th>Código</th>  -->
            <th scope="col">Nome</th>
            <th scope="col">Obra</th>
            <th scope="col"> Sinopse</th>
            <th scope="col">Alunos</th>
            <th scope="col">Pasta de Arte</th>
            <th scope="col">Roteiro</th>
            <th scope="col">Link</th>
            <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $resultado = mysqli_query($conexao,"SELECT * FROM curtas");
                while ($row = mysqli_fetch_array($resultado)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $obra = $row['obra'];
                    $sinopse = $row['sinopse'];
                    $alunos = $row['alunos'];
                    $concepcao = $row['concepcao'];
                    $roteiro = $row['roteiro'];
                    $link = $row['link'];
                
                    echo "<tr>";
                    echo "<td>" .$nome ."</td>";
                    echo "<td>" .$obra ."</td>";
                    echo "<td>" .$sinopse ."</td>";
                    echo "<td>" .$alunos ."</td>";
                    echo "<td><a href=$concepcao download>$nome</a></td>";
                    echo "<td><a href=$roteiro>$nome</a></td>";
                    echo "<td><a href=$link>$nome</a></td>";
                    echo "<td><a href=\"altera_curtas.php?rowid=" .$id ."\">Alterar</a>|<a href=\"exclui_curtas.php?rowid=" .$id ."\">Excluir</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <br></br>
    
    <div class="form-style-8">
        <form method="POST" action="pesquisa_adm2.php">
            <input class="textbox" type="search" style="background-color: black; color: white"
            name="pesquisar" id="pesquisar" placeholder="Pesquisar arquivos" autofocus required />
        </form>
    </div>
    <table class="table table-dark table-striped table-hover" style="background-color: black">
        <thead>
            <tr>
            <th scope="col"> Downloads e Formatação</th>
            <th scpoe="col"><a href="cad_downloads.php"> Novo arquivo</a><th>
            </tr>
            <tr> 
            <!-- <th>Código</th>  -->
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Link</th>
            <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $resultado = mysqli_query($conexao,"SELECT * FROM downloads");
                while ($row = mysqli_fetch_array($resultado)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $descricao = $row['descricao'];
                    $link = $row['link'];
                
                    echo "<tr>";
                    echo "<td>" .$nome ."</td>";
                    echo "<td>" .$descricao ."</td>";
                    echo "<td><a href=$link>$nome</a></td>";
                    echo "<td><a href=\"altera_downloads.php?rowid=" .$id ."\">Alterar</a>|<a href=\"exclui_downloads.php?rowid=" .$id ."\">Excluir</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
                <br></br>
    <table class="table table-dark table-striped table-hover" style="background-color: black">
        <thead>
             <tr>
            <th scope="col"> Administradores </th>
            <th scpoe="col"><a href="cadastro_usuario.php"> Novo adm</a><th>
            </tr>
            <tr> 
            <tr> 
            <!-- <th>Código</th>  -->
            <th scope="col">Nome</th>
            <th scope="col">Nome de usuário</th>
            <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php
                $resultado = mysqli_query($conexao,"SELECT * FROM usuarios");
                while ($row = mysqli_fetch_array($resultado)){
                    $username = $row['username'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                
                    echo "<tr>";
                    echo "<td>" .$nome ."</td>";
                    echo "<td>" .$username ."</td>";
                    echo "<td>" .$email ."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <br></br>
    <br></br>
    <br></br>
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
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
