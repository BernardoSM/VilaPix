	<!--------------------RODAPÉ DO SITE----------------------------->
	<footer class="pc-mobile-xl">
		<div class="container">
			<div class="row">
				<div class="col-2 col-logo">
					<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo.png"></a>
				</div>
				<div class="col-4 col-options">
					<ul>
						<li><a href="">Endereço</a></li>
						<li><a href="">Contato</a></li>
						<li><a href="">FAQ</a></li>
					</ul>
				</div>
				<div class="col-6 col-redes-sociais">
					<ul>
						<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!--------------------RODAPÉ DO SITE----------------------------->
	<footer class="mobile-xs">
		<div class="container">
			<div class="row col-logo">
				<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo.png"></a>
			</div>
			<div class="row col-options">
				<ul>
					<li><a href="">Endereço</a></li>
					<li><a href="">Contato</a></li>
					<li><a href="">FAQ</a></li>
				</ul>
			</div>
			<div class="row col-redes-sociais">
				<ul>
					<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>

	<!--------------------SCRIPT'S PADROES----------------------------->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>

	<!--------------------SCRIPT'S DO SITE----------------------------->

	
	<script> 

	$(document).ready(function() {

		// SCRIPT DAS OPÇÕES
		$(".hover").hover(function(){
		  $(this).addClass("backgroundhover");
		  }, function(){
  		  $(this).removeClass("backgroundhover");
		});

		// SCRIPT DO LOGIN 
		$( ".invisible-button" ).hover(function() {
			$( ".login-toggle" ).show();
		});

		$(document).mouseup(function(e) 
		{
		    var container = $(".login-toggle");

		    // if the target of the click isn't the container nor a descendant of the container
		    if (!container.is(e.target) && container.has(e.target).length === 0) 
		    {
		        container.hide();
		    }
		});

		// SCRIPT DE ABRIR MENU MOBILE 
		$(".btn-menu").on("click", function(){
			$("header").toggleClass("open-menu");
		});
	});
	
	</script>

</body>
</html>