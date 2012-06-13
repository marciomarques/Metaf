<?php
$logo = true;
$slideSet = true;
$bodyClass = "interna";
$title = "Clientes";
$menu = '<li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="sobre.php">Sobre nós</a></li>
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
          	<div class="sobre clientes">
          		<h3 style="font-size:32px;font-weight:700;text-transform:uppercase;padding-bottom:20px">#Clientes</h3>
<!--           		<p><img src="images/clientes.png" alt="clientes" width="866" height="395" /></p> -->
          		<ul class="clientes">
				  <li class="nav-prev-btn"><a class="prev" style="color:#000"><img src="images/clientesleft.jpg" alt="Anterior"></a></li>
				  <li class="nav-next-btn right"><a class="next" style="color:#000"><img src="images/clientesright.jpg" alt="Próximo"></a></li>

          		  <li class="item"><img src="./images/clientes/nokia.jpg" alt="Nokia"></li>
          		  <li class="item"><img src="./images/clientes/lg.jpg" alt="LG"></li>
          		  <li class="item"><img src="./images/clientes/philips.jpg" alt="Philips"></li>
          		  <li class="item"><img src="./images/clientes/sansung.jpg" alt="Samsung"></li>
          		  <li class="item"><img src="./images/clientes/gradiente.jpg" alt="Gradiente"></li>
          		  <li class="item"><img src="./images/clientes/claro.jpg" alt="Claro"></li>
          		  <li class="item"><img src="./images/clientes/vivo.jpg" alt="Vivo"></li>
          		  <li class="item"><img src="./images/clientes/renner.jpg" alt="Renner"></li>
          		  <li class="item"><img src="./images/clientes/renault.jpg" alt="Renault"></li>
          		  <li class="item"><img src="./images/clientes/grendene.jpg" alt="Grendene"></li>
          		 <!--  <li class="item"><img src="./images/clientes/coza.jpg" alt="Coza"></li> -->
          		  <li class="item"><img src="./images/clientes/colombo.jpg" alt="Colombo"></li>
          		  <li class="item"><img src="./images/clientes/logo_mormaii.jpg" alt="Mormaii"></li>
          		  <li class="item"><img src="./images/clientes/gvd.jpg" alt="GVD"></li>
          		  <li class="item"><img src="./images/clientes/dumond.jpg" alt="Dumond"></li>
          		  <li class="item"><img src="./images/clientes/diadora.jpg" alt="Diadora"></li>
          		  <li class="item"><img src="./images/clientes/democrata.jpg" alt="Democrata"></li>
          		  <li class="item"><img src="./images/clientes/viauno.jpg" alt="Viauno"></li>
          		  <li class="item"><img src="./images/clientes/converse.jpg" alt="Converse"></li>
          		  <li class="item"><img src="./images/clientes/bottero.jpg" alt="Bottero"></li>
          		  <li class="item"><img src="./images/clientes/wescoast.jpg" alt="Wescoast"></li>
          		  <li class="item"><img src="./images/clientes/vizzano.jpg" alt="Vizzano"></li>
          		</ul>
          	</div>
          	<!--
<div class="right">
          		<iframe width="420" height="340" src="http://www.youtube.com/embed/SCx-eWANpOw?rel=0" frameborder="0" allowfullscreen></iframe>
          	</div>
-->
            <script type="text/javascript">
            $("ul.clientes").each(function(){
	            $(this).slideSet({
	              selectors : {
	    						item: ".item"
	    					},
	    					itemsPerSet: 8
	            })
            });
            </script>
            <div class="clear"></div>
          </div>
        </section>
        <div class="clear"></div>
<?php include "includes/footer.php"; ?>