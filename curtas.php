<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
    <meta name="description" content="IFRS - Campus Farroupila | Projeto CineArte">
    <meta name="keywords" content="CineArte, ifrs, farroupilha">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CineArte | Curtas</title>

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
</head>

    <?php 
		include('actions/conexao.php'); 
	?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <style>
        body{
            background-color: black;
        }
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
    <header class="header header-normal set-bg" style="background-color: black;">
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
                            <li><a href="./index.php"> P??gina Inicial</a></li>
                            <li class="active"><a href="./curtas.php"> Curtas</a></li>
                            <li><a href="./downloads.php">Downloads e Formata????o</a></li>
                            <li><a href="./dicas.php"> Dicas e Oficinas</a></li>
                            <li><a href="./adm.php"> Administrador </a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
    
    <!-- Project Details Section End -->
    
    <div class="section-title">
        
    <h2 style= "text-align:center; margin-top: 10px; margin-bottom: 0px; font-family: 'KoHo'; font-weight: bold;
    color: white;  font-size: 20px">Curtas</h2>
    </div>

    <div class="form-style-8">
        <form method="POST" action="pesquisacurtas.php">
            <input class="textbox" type="search" style="background-color: black; color: white; font-size: 12px; 
            margin-top: -30px"
            name="pesquisar" id="pesquisar" placeholder="Pesquisar: " autofocus required />
        </form>
    </div>

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
    
    <table class="table table-dark table-striped table-hover" style="background-color: black; font-size: 10px;">
        <thead>
            <tr style="font-size: 10px;"> 
            <!-- <th>C??digo</th>  -->
            <th scope="col">Nome</th>
            <th scope="col">Obra</th>
            <th scope="col"> Sinopse</th>
            <th scope="col">Alunos</th>
            <th scope="col">Concep????o de Arte</th>
            <th scope="col">Roteiro</th>
            <th scope="col">Link</th>
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
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

	<br></br>
	<br></br>
<br></br>
	
    <!-- Footer Section Begin -->
    <footer style="bottom: 0; position: fixed; margin-top:50px;  width: 100%; background-color: transparent" data-setbg="black">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">
                        <p style="margin-left: 20px; text-align: justify; font-size: 10px; color: white"> Copyright ?? <script>
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
