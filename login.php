<?php
//CHAMANDO O HEADER
require_once("html".DIRECTORY_SEPARATOR."header.php"); ?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/vilapix-login.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-login-mobile.css">
</head>
<body>
	<div id="background">
		<form method="get" id="form2">
			<div id="bloco-login" class="container">
		    	<div class="row row-button-toggle">
		    		<div class="row row-entrarcom">
		    			<p>Entrar com:</p>
		    		</div>
		    		<div class="row row-facebook">
		    			<div class="col">
		    				<div class="btn-hidden"><a class="btn-face" href=""><i class="fab fa-facebook"></i>Facebook </a></div>
		    				<a class="btn-face" href=""><i class="fab fa-facebook"></i>Facebook </a>
		    			</div>
		    			<div class="col">
		    				<div class="btn-hidden-g"><a class="btn-google" href=""><img src="img/icon-google.png"> Google </a></div>
		    				<a class="btn-google" href=""><img src="img/icon-google.png"> Google </a>
		    			</div>
		    		</div>
		    		<div class="row row-login validar-login">
		    			Login<input type="text" name="username">
		    		</div>
		    		<div class="row row-senha validar-senha">
		    			Senha <a href="" class="forgot"><u>Esqueci a senha</u></a><input type="password" name="password">
		    		</div>
		    		<div class="row row-entrar">
		    			<div class="btn-hidden-entrar"><button class="btn-entrar">Entrar</button></div>
		    			<button class="btn-entrar" type="submit" form="form2" value="Submit">Entrar</button>
		    		</div>
		    		<div class="row row-tornarmembro">
		    			<p>Não é um membro? <a href="cadastro.php"><u>Cadastre-se agora!</u></a></p> 
		    		</div>
		    		<div class="row row-logo">
			    		<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo-mobile.png"></a>
			    	</div>
		    	</div>
			</div>
		</form>
	</div>
</body>

</html>

<?php
//CHAMANDO O FOOTER
require_once("html".DIRECTORY_SEPARATOR."footer.php"); ?>