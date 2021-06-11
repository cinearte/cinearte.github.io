<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Staging Template">
        <meta name="keywords" content="Staging, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> CineArte | Pesquisar </title>

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
        <?php
	include('actions/valida_cookies.inc');
	include('actions/conexao.php'); 
?>

        
    </head>
    <style>
       body{
            background-color: black;
        }
    </style>

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
                                <li><a href="./logout.php"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
    <!-- Header Section End -->

    <?php   
        $pesquisar = $_POST['pesquisar'];
        $sql = "SELECT * FROM downloads WHERE nome LIKE '%$pesquisar%' or descricao LIKE '%$pesquisar%'";
        $resultado = mysqli_query($conexao, $sql);
    ?>

<table class="table table-dark table-striped table-hover" style="background-color: black">
    <thead>
            <br></br>
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
            <style>
                p{
                color: red;
                }
            </style>
            <?php
             $linhas_ret = mysqli_num_rows($resultado);
             if($linhas_ret==0){ //conexão não retornou nenhum resultado
                 echo "<p> Nenhum item corresponde à pesquisa.</p>";
             }
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