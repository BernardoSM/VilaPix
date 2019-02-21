<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>VilaPix</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" author="Bernardo Simonassi">

	<!-- SCRIPT JQUERY E BOOSTRAP COM POPPER-->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>

	<!-- CSS BOOSTRAP, FONTAWESOME E W3SCHOOLS-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- CSS DOS ARQUIVOS -->
	<link rel="stylesheet" type="text/css" href="css/vilapix-header.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-header-mobile.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-footer.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-footer-mobile.css">
	<!--<link rel="icon" href="img/favicon32.png" sizes="16x16 32x32" type="image/png">-->
</head>
<body>
	<!------------------------CABEÇALHO DO SITE------------------------------>
	<header class="pc-site">
		<div class="row">
		    <div class="col-7">
		    	<div id="options" class="row">
			    	<div class="col-3 caixa-1">
			    		<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo.png"></a>
			    	</div>
			    	<div class="col-9 caixa-2">
			    		<div class="row">
			    			<ul>
								<li><a href="" class="hover">Home</a></li>
								<li><a href="" class="hover">Quem Somos</a></li>
								<li><a href="" class="hover">Portfólio</a></li>
								<li><a href="" class="hover">Preços</a></li>
								<li><a href="" class="hover">Contato</a></li>
							</ul>
			    		</div>
			    	</div>
			    </div>
		    </div>
		    <div class="col-2" id="caixa-texto">
		    	<p id="textologin">Bem vindo <strong>Visitante!</strong></p>
		    </div>
		    <div class="col-3">
		    	<div class="invisible-button">
			    	<div class="row row-button">
			    		<div class="col col-user">
			    			<i class="far fa-user"></i>
			    		</div>
			    		<div class="col col-entrar">
			    			<p><a href="login.php">Entrar</a> / <a href="cadastro.php">Cadastrar</a></p>
			    		</div>
			    	</div>
				    <div class="login-toggle">
				    	<!--TOOGLE ENTRAR-->
				    	<form method="get" id="form1">
					    	<div class="row row-button-toggle">
					    		<div class="row row-entrarcom">
					    			<p>Entrar com:</p>
					    		</div>
					    		<div class="row row-facebook">
					    			<a class="btn-face" href=""><i class="fab fa-facebook"></i>Facebook </a>
					    		</div>
					    		<div class="row row-google">
					    			<a class="btn-google" href=""><img src="img/icon-google.png"> Google </a>
					    		</div>
					    		<div class="row row-login validar-login">
					    			Login<input type="text" name="username">
					    		</div>
					    		<div class="row row-senha validar-senha">
					    			Senha <a href="" class="forgot"><u>Esqueci a senha</u></a><input type="password" name="password">
					    		</div>
					    		<div class="row row-entrar">
					    			<button type="submit" form="form1" value="Submit" class="btn-entrar">Entrar</button>
					    		</div>
					    		<div class="row row-tornarmembro">
					    			<p>Não é um membro?</p> <a href="cadastro.php"><u>Cadastre-se agora!</u></a>
					    		</div>
					    	</div>
					    </form>
			    	</div>
			    </div>
		    </div>
		  </div>
	</header>

	<!------------------------CABEÇALHO MOBILE DO SITE------------------------------>
	<header class="mobile">
		<div class="row">
			<div class="col">
			</div>
			<div class="col col-logo">
				<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo-mobile.png"></a>
			</div>
			<div class="col col-menu">
				<button class="btn btn-menu"><i class="fas fa-bars"></i></button>
			</div>
		</div>
		<div id="expandir">
			<div class="row caixa-1">
				<div class="col-10 col-logo">
					<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo-mobile.png"></a>
				</div>
				<div class="col-2 col-close">
					<button class="btn btn-menu"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="row caixa-2">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Quem Somos</a></li>
					<li><a href="">Portfólio</a></li>
					<li><a href="">Preços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div>
			<div class="row caixa-3">
				<div class="row">
					<a class="btn btn-login" href="login.php">Fazer login</a>
				</div>
				<div class="row">
					<a class="btn btn-cadastrar" href="cadastro.php">Cadastrar</a>
				</div>
			</div>
		</div>
		<div id="expandir-mask" class="btn-menu"></div>
	</header>