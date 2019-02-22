<?php
//CHAMANDO O HEADER
require_once("html".DIRECTORY_SEPARATOR."header.php"); ?>

<html>

<head>
    <!-------------SCRIPT DE MÁSCARAS---------------->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/vilapix-cadastro.css">
	<link rel="stylesheet" type="text/css" href="css/vilapix-cadastro-mobile.css">

    
    
</head>
<body>
	<form method="get" id="form3">
		<div id="bloco-login" class="container">
			<div class="row row-entrarcom">
				<a href="index.php"><img id="logo-cabeçalho" src="img/vp-logo.png"></a>
			</div>
			<div class="row row-button-toggle">
				<div class="col col-esquerda">
		    		<div class="row row-nome validar-nome">
		    			Nome Completo<input required tabindex="1" id="nomecompleto" type="text" name="name">
		    		</div>
		    		<div class="row row-login validar-login">
		    			Email<input required tabindex="2" id="email" type="email" name="email">
		    		</div>
				</div>
				<div class="col col-direita">
					<div class="row row-senha validar-senha">
		    			Senha <input required tabindex="3" id="senha" type="password" name="password" minlength="6" data-toggle="popover" data-trigger="focus" data-popover-content="#senha-popover">
		    		</div>
					<div class="row row-senha validar-senha">
		    			Confirmar Senha <input required tabindex="4" id="confirmarsenha" type="password" name="confirmarsenha" minlength="6" data-toggle="popover" data-trigger="focus" data-popover-content="#confirmarsenha-popover">
		    		</div>
				</div>
			</div>

			<hr>

			<div class="row row-button-toggle row-endereco">
				<div class="col col-esquerda">
		    		<div class="row row-nome validar-nome">
		    			CEP<input required id="cep" tabindex="5" type="text" name="cep">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			Logradouro<input readonly="readonly" required id="logradouro" type="text" name="logradouro">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			Número<input required id="numero" tabindex="6" type="number" name="numero">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			Complemento<input required tabindex="7" id="complemento" type="text" name="complemento">
		    		</div>
				</div>
				<div class="col col-direita">
					<div class="row row-nome validar-nome">
		    			Bairro<input readonly="readonly" required id="bairro" type="text" name="bairro">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			Estado<input readonly="readonly" required id="uf" type="text" name="estado">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			Celular / Telefone<input required class="phone" tabindex="8" id="celular" type="text" name="celular">
		    		</div>
		    		<div class="row row-nome validar-nome">
		    			CPF / CNPJ<input type="text" class="mascara-cpfcnpj" name="cpfcnpj" id="cpfcnpj" required tabindex="9">
		    		</div>
				</div>
			</div>
			
	    	<div class="row row-button-toggle row-button-entrar">
	    		<div class="row row-entrar">
	    			<div class="btn-hidden-entrar"><button class="btn-entrar-2" disabled>Enviar</button></div>
	    			<button class="btn-entrar" type="submit" form="form3" value="Submit" tabindex="10">Enviar</button>
	    		</div>
	    	</div>
		</div>
	</form>

	<div id="senha-popover" class="hidden">
	    <div class="popover-body">
	    	<span id="char8-string"><i id="8char" class="fas fa-times-circle"></i> 8 Caracteres<br></span>
	    	<span id="ucase-string"><i id="uCase" class="fas fa-times-circle"></i> Letra Maiúscula<br></span>
	    	<span id="n-string"><i id="nCase" class="fas fa-times-circle"></i> Número</span>
	    </div>
	</div>  

	<div id="confirmarsenha-popover" class="hidden">
	    <div class="popover-body">
	    	<span id="confirm-password"><i id="pwmatch" class="fas fa-times-circle"></i> Mesma senha</span>
	    </div>
	</div> 
</body>


<!-------------INICIO DO SCRIPT DE MÁSCARAS---------------->
<script>
	//MASCARA CPF/CNPJ
	var cpfMascara = function (val) {
	   return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
	},
	cpfOptions = {
	   onKeyPress: function(val, e, field, options) {
	      field.mask(cpfMascara.apply({}, arguments), options);
	   }
	};
	$('.mascara-cpfcnpj').mask(cpfMascara, cpfOptions);

	//MÁSCARA TELEFONE
	var cpfPhone = function (val) {
	   return val.replace(/\D/g, '').length < 9 ? '(00) 00000000' : '(00) 000000000';
	},
	cpfOptions = {
	   onKeyPress: function(val, e, field, options) {
	      field.mask(cpfPhone.apply({}, arguments), options);
	   }
	};
	$('.phone').mask(cpfPhone, cpfOptions);

	$('#cep').mask('00000-000');
</script>
<!-------------FIM DO SCRIPT DE MÁSCARAS---------------->

<script>
	$(document).ready(function() {
      
		//SCRIPT DO POPOVER DA SENHA
		$('[data-toggle=popover]').popover({
			html: true,
			content: function() {
	            var content = $(this).attr("data-popover-content");
	            return $(content).children(".popover-body").html();
	        }, 
			trigger: "focus", 
			placement: "bottom"
		});

		$( "#senha" ).on("focus keyup",function() {
			var ucase = new RegExp("[A-Z]+");
			var num = new RegExp("[0-9]+");
			
			var id_pop = $(this).attr("aria-describedby");

		    if ($('#senha').val().length < 8){
		    	$("#"+id_pop).find("#char8-string").css("color","#EA2027");
		    	$("#"+id_pop).find("#8char").removeClass("fa-check-circle");
				$("#"+id_pop).find("#8char").addClass("fa-times-circle");
		    } else {
		    	$("#"+id_pop).find("#char8-string").css("color","#009432");
		    	$("#"+id_pop).find("#8char").removeClass("fa-times-circle");
				$("#"+id_pop).find("#8char").addClass("fa-check-circle");
		    }

		    if (ucase.test($("#senha")[0].value)){
		    	$("#"+id_pop).find("#ucase-string").css("color","#009432");
		    	$("#"+id_pop).find("#uCase").removeClass("fa-times-circle");
				$("#"+id_pop).find("#uCase").addClass("fa-check-circle");
		    } else {
				$("#"+id_pop).find("#ucase-string").css("color","#EA2027");
		    	$("#"+id_pop).find("#uCase").removeClass("fa-check-circle");
				$("#"+id_pop).find("#uCase").addClass("fa-times-circle");
		    }

		    if (num.test($("#senha")[0].value)){
		    	$("#"+id_pop).find("#n-string").css("color","#009432");
		    	$("#"+id_pop).find("#nCase").removeClass("fa-times-circle");
				$("#"+id_pop).find("#nCase").addClass("fa-check-circle");	
		    } else {
				$("#"+id_pop).find("#n-string").css("color","#EA2027");
		    	$("#"+id_pop).find("#nCase").removeClass("fa-check-circle");
				$("#"+id_pop).find("#nCase").addClass("fa-times-circle");			
		    }
		});

		$( "#confirmarsenha" ).on("input",function(){
		    var id_pop = $(this).attr("aria-describedby");
		    
			if ($("#senha")[0].value == $("#confirmarsenha")[0].value && $("#senha")[0].value !== ""){
		    	$("#"+id_pop).find("#confirm-password").css("color","#009432");
		    	$("#"+id_pop).find("#pwmatch").removeClass("fa-times-circle");
				$("#"+id_pop).find("#pwmatch").addClass("fa-check-circle");	
		    } else {
				$("#"+id_pop).find("#confirm-password").css("color","#EA2027");
		    	$("#"+id_pop).find("#pwmatch").removeClass("fa-check-circle");
				$("#"+id_pop).find("#pwmatch").addClass("fa-times-circle");			
		    }
		});

		//SCRIPT DO ENDEREÇO AUTOMÁTICO
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});

		//SCRIPT DE FAZER TODOS OS CAMPOS SEREM PREENCHIDOS
		document.addEventListener("DOMContentLoaded", function() {
		    var elements = document.getElementsByTagName("input");
		    for (var i = 0; i < elements.length; i++) {
		        elements[i].oninvalid = function(e) {
		            e.target.setCustomValidity("");
		            if (!e.target.validity.valid) {
		                e.target.setCustomValidity("Este campo deve ser preenchido.");
		            }
		        };
		        elements[i].oninput = function(e) {
		            e.target.setCustomValidity("");
		        };
		    }
		});

		// DESABILITAR O SCROLL DO INPUT NUMBER
	    $('form').on('focus', 'input[type=number]', function(e) {
	        $(this).on('wheel', function(e) {
	            e.preventDefault();
	        });
	    });
	 
	    // RESTAURAR A SCROLL DO INPUT NUMBER
	    $('form').on('blur', 'input[type=number]', function(e) {
	        $(this).off('wheel');
	    });
	 
	    // DESABILITAR SETAS
	    $('form').on('keydown', 'input[type=number]', function(e) {
	        if ( e.which == 38 || e.which == 40 )
	            e.preventDefault();
	    });  

    });
</script>

</html>

<?php
//CHAMANDO O FOOTER
require_once("html".DIRECTORY_SEPARATOR."footer.php"); ?>
