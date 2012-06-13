<?php
$logo = true;
$bodyClass = "interna";
$title = "Sobre";
$menu = '         <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="clientes.php">Clientes</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
				  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="cat.php">Projetos</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="premios.php">Prêmios</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline"><a href="contato.php">Fale conosco</a></li>';
include("includes/header.php");
?>
        <section id="content">
          <div class="center">
<!--           	<div class="left sobre" style="width:470px"> -->
          	<div class="left sobre">
          		<div class="left" style="width:470px;padding-right:20px">
	          		<h3 style="font-size:32px;font-weight:700;text-transform:uppercase;padding-bottom:20px">#Sobre</h3>
	          		<p>Há 20 anos a METAF/SUZUKA orgulha-se de ter sido parceira na construção de projetos de diversos clientes da área de criação e produção, oferecendo soluções industriais em metalurgia, marcenaria, impressão e plásticos. Mais do que uma indústria especializada em produção de ambientes corporativos, ambientes comerciais e comunicação visual, de senvolvemos uma metodologia personalizada de consultoria para cada projeto especial de nossos clientes. Transformar ideias em realidade com custos compatíveis, alto nível de acabamento e soluções individualizadas tornou-se a marca registrada da empresa, e, graças aos projetos criados por nossos clientes, conquistamos juntos o reconhecimento nacional através de diversos prêmios de design e merchandising.</p>
	          	</div>
	          	<div class="right" style="width:420px">
	          		<iframe width="420" id="iframe-video" height="340" src="http://www.youtube.com/embed/SCx-eWANpOw?rel=0" frameborder="0" allowfullscreen></iframe>
	          		<ul class="sobre-menu">
	          			<li><a class="iframe" href="http://www.youtube.com/embed/jYAUohnQ_yQ">Vídeo Container</a></li>
	          			<li><a href="./images/pdf-catalogo-tecnico.pdf" target="_blank">PDF Catálogo Técnico</a></li>
	          			<!-- <li><a href="#">Ítem 1 do Folder</a></li> -->
	          		</ul>
	          		<script type="text/javascript">
	          		jQuery(document).ready(function($){
	          	    $("a.iframe").click(function(e){
	          	      e.preventDefault();
	          	      $("#iframe-video").fadeOut(400);
	          	      $("#iframe-video")[0].src = e.target.href;
	          	      $("#iframe-video").fadeIn(400);
	          	    });
	          		});
	          		</script>
	          	</div>
          	</div>
          </div>
        </section>
        <div class="clear"></div>
<?php include "includes/footer.php"; ?>