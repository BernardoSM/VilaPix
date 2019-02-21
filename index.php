<?php
//CHAMANDO O HEADER
require_once("html".DIRECTORY_SEPARATOR."header.php"); ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/vilapix-index.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-index-mobile.css">
</head>


<body>
	<div class="container container-index">
		<div class="row row-intro">
			<div class="row-logo">
				<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo.png"></a>
			</div>
			<div class="row-text">
				<h1>Meet Google Fi, a different<br>
					kind of phone plan
					<p>Simpler pricing and smarter coverage, from Google</p>
				</h1>

			</div>
		</div>

		<div class="row scroll">
			<img src="img/scroll.png">
		</div>

		<div class="row row-about-us">
			<div class="row row-objetivos">
				<div class="col">
					<img src="img/cliente.png">
					<h2>Compromisso</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col">
					<img src="img/rapidez.png">
					<h2>Rapidez</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col">
					<img src="img/barato.png">
					<h2>Barato</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col">
					<img src="img/atendimento.png">
					<h2>Atendimento</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	var i = 0;

	while(i < 3){
		$('.scroll').fadeOut(500).fadeIn(500);
		i++;
	}

	$(window).scroll(function() {
	    $(".scroll").fadeOut(250);
	});
	

	
</script>

</html>


<?php
//CHAMANDO O FOOTER
require_once("html".DIRECTORY_SEPARATOR."footer.php"); ?>