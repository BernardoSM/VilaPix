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
				<h1>Conheça a VilaPix, a melhor<br>
					de Vila Velha!
					<p>Lorem ipsum dolor sit amet, consectetur</p>
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
					<h2>Cabe no Bolso</h2>
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

		<div class="row row-plans">
			<div class="col-6 col-plano owl-carousel">
				<div class="item-plano">
					<p class="valor">R$279</p>
					<p class="beneficios">
						<i class="fas fa-check"></i> Logo
					</p>				
				</div>
				<div class="item-plano">
					<p class="valor">R$355</p>
					<p class="beneficios">
						<i class="fas fa-check"></i> Logo <br>
						<i class="fas fa-check"></i> Cartão visita
					</p>
				</div>
				<div class="item-plano">
					<p class="valor">R$399</p>
					<p class="beneficios">
						<i class="fas fa-check"></i> Logo <br>
						<i class="fas fa-check"></i> Cartão visita <br>
						<i class="fas fa-check"></i> Envelope <br>
						<i class="fas fa-check"></i> Pasta <br>
						<i class="fas fa-check"></i> Papel timbrado 
					</p>
				</div>
				<div class="item-plano">
					<p class="valor">R$1599</p>
					<p class="beneficios">
						<i class="fas fa-check"></i> Logo <br>
						<i class="fas fa-check"></i> Cartão visita <br>
						<i class="fas fa-check"></i> Envelope <br>
						<i class="fas fa-check"></i> Pasta <br>
						<i class="fas fa-check"></i> Papel timbrado <br>
						<i class="fas fa-check"></i> Site
					</p>
				</div>
			</div>
			<div class="col-6 col-text">
				<h2>Preços flexíveis
					<p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
				</h2>
			</div>
		</div>
	</div>
</body>

<script>
	$(document).ready(function() {
		//SCRIPT DO SCROLL
		var i = 0;

		while(i < 3){
			$('.scroll').fadeOut(500).fadeIn(500);
			i++;
		}

		$(window).scroll(function() {
		    $(".scroll").fadeOut(250);
		});


		//SCRIPT DO CAROUSEL
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1200:{
		            items:2
		        }
		    }
		});

	});
</script>

</html>


<?php
//CHAMANDO O FOOTER
require_once("html".DIRECTORY_SEPARATOR."footer.php"); ?>