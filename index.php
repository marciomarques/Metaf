<?php
$logo = true;
$bodyClass = "home";
$menu = '<li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="sobre.php">Sobre nós</a></li>
	  		        <!--<li style="display:inline" class="separator"></li>-->
	  		         <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="clientes.php">Clientes</a></li>
                <!--<li style="display:inline" class="separator"></li>-->
	  		        <li style="display:inline"><a href="contato.php">Fale conosco</a></li>';
include("includes/header.php");
?>
		<section id="content">
		  <div class="center">
	  		  <ul class="home">
	  		    <li id="comerciais">
	  		      <a href="cat.php?proj=comerciais">
	  		      	<span>Ambientes Comerciais</span>
		  		  	<img src="images/comerciais.jpg" alt="Ambientes comerciais" class="color">
		  		  	<img src="images/comerciais-hover.png" alt="Ambientes comerciais" class="cinza">
	  		      </a>
	  		    </li>
	  		    <li id="corporativos">
	  		      <a href="cat.php?proj=corporativos">
	  		      	<span>Ambientes Corporativos</span>
			        <img src="images/corporativos.jpg" alt="Ambientes corporativos" class="color">
			        <img src="images/corporativos-hover.png" alt="Ambientes corporativos" class="cinza">
			      </a>
	  		    </li>
	  		    <li id="comunicacao">
	  		      <a href="cat.php?proj=visual">
					<span>Comunicação Visual</span>
					<img src="images/comunicacao.jpg" alt="Comunicação visual" class="color">
					<img src="images/comunicacao-hover.png" alt="Comunicação visual" class="cinza">
	  		      </a>
	  		    </li>
	  		    <li id="especiais">
	  		      <a href="cat.php?proj=especiais">
	  		      	<span>Projetos Especiais</span>
		  		    <img src="images/projetos.jpg" alt="Projetos especiais" class="color">
		  		    <img src="images/projetos-hover.png" alt="Projetos especiais" class="cinza">
	  		      </a>
	  		    </li>
	  		  </ul>
	  		  <div class="clear"></div>
		  </div>
		</section>
		<div class="clear"></div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('ul.home li').hover(function(){
					var t = this;
					$(t).find('img.color').hide();
					$(t).find('img.cinza').fadeIn();
				}, function() {
					var t = this;
					$(t).find('img.cinza').hide();
					$(t).find('img.color').fadeIn();
				});
			});
		</script>
<?php include("includes/footer.php") ?>