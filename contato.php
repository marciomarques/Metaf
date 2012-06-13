<?php
$logo = true;
$bodyClass = "interna";
$title = "Contato";
$menu = '<li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="sobre.php">Sobre nós</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="clientes.php">Clientes</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="premios.php">Prêmios</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline"><a href="cat.php">Projetos</a></li>';
include("includes/header.php");
// sobre projetos
?>
        <section id="content">
          <div class="center">
            <div class="sobre">
            	<div class="left" style="width:470px">
            		<h3 style="font-size:32px;font-weight:700;text-transform:uppercase;padding-bottom:20px">#Fale Conosco</h3>
            		<p><iframe height="637" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://caixadeideias.wufoo.com/embed/z7p7p9/" id="iframe"><a href="https://caixadeideias.wufoo.com/forms/z7p7p9/">Fill out my Wufoo form!</a></iframe></p>
            	</div>
            	<div class="right">
            		<iframe width="420" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=pt-BR&geocode=&q=Metaf+-+Rua+Ven%C3%A2ncio+Aires,+1805+-+Niter%C3%B3i+-+Canoas+-+RS+CEP+92110-000+Fone:+(51)+3475-3764&sll=37.0625,-95.677068&sspn=32.114675,78.486328&ie=UTF8&hq=Metaf+-+Rua+Ven%C3%A2ncio+Aires,+1805+-+Niter%C3%B3i+-+Canoas+-+RS+CEP+92110-000+Fone:+(51)+3475-3764&hnear=&radius=15000&cid=12812723290456676292&ll=-29.945646,-51.174598&spn=0.104121,0.145912&z=12&iwloc=A&output=embed"></iframe>
            		<ul class="sobre-menu">
	          			<li><a class="iframe" href="https://caixadeideias.wufoo.com/embed/m7p5w3/">Trabalhe Conosco</a></li>
	          		</ul>
            	</div>
            	<div class="clear"></div>
            	<script type="text/javascript">
	          		jQuery(document).ready(function($){
	          	    $("a.iframe").click(function(e){
	          	      e.preventDefault();
	          	      $("#iframe").fadeOut(400);
	          	      $("#iframe")[0].src = e.target.href;
	          	      $("#iframe").fadeIn(400);
	          	    });
	          		});
	          		</script>
          	</div>
          </div>
        </section>
        <div class="clear"></div>
<?php include "includes/footer.php"; ?>