<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Staging Template">
		<meta name="keywords" content="Staging, unica, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>CineArte | Novo Administrador </title>
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
	
	
		<script>
			function valido2(){
				
				var senha = document.formulario.senha.value;
				
				alert(senha);
				
				var regex = /^(?=(?:.*?[A-Z]){3})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/; 
				
	/*
	// (?=(?:.*?[A-Z]){3}) - Mínimo 3 letras maiúsculas
	// (?=(?:.*?[0-9]){2}) - Mínimo 2 números
	// (?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#;$%*(){}_+^&] - Mínimo 1 caractere especial
	*/
				if(senha.length < 8)
				{
					alert("A senha deve conter no minímo 8 digitos!");
					document.formulario.senha.focus();
					return false;
				}
					else{
						alert("Senha Válida!");
					}
				}
				return true;
			
		</script>
   </head>
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
    <h2 style="font-weight: bold; font-family: 'KoHo'; font-size: 60px; margin-top: -170px !important"> Novo administrador</h2>
    <p style="margin-top: 30px; font-size: 25px;"> Preencha os campos para cadastrar um novo administrador</p>
</div>
    <div class="col-md-6 col-sm-12">
   <div class="login-form">
    <form name="formulario" method="post" action="cad_usuario.php" style="text-align:left; margin-top: -50px">
		<div class="form-group">
			<label class="label">Nome:</label> 
			<input class="form-control"type="text" name="nome" placeholder="Nome" maxlength="30" size=50px/>
		</div>
		<div class="form-group">
			<label class="label">E-mail:</label> 
			<input class="form-control"type="text" name="email"  placeholder="E-mail" style="margin-top: 15px" size=50px />
		</div>
		<div class="form-group">
			<label class="label">Username:</label>
			<input class="form-control" type="text" name="username"  placeholder="Nome de usuário"  style="margin-top: 15px" size=30px/>
		</div>
		<div class="form-group">
			<label class="label">Senha:</label> 
			<input class="form-control" type="password" id="senha" name="senha"  placeholder="Senha" required ="required" minlength="8"  style="margin-top: 15px" size=30px/>
		</div>
			<input type="submit" class="btn btn-black" 
            value="Salvar"  class="botao" onclick="return valido2()"  style="margin-top: 30px"/><br>
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