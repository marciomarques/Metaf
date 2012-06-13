<?php
$logo = true;
$proj = true;
$bodyClass = "carousel";
$title = "Projetos";
$menu = '<li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="sobre.php">Sobre nós</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="clientes.php">Clientes</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline;margin-right: 3px;padding-right:6px;border-right:2px solid #fff"><a href="premios.php">Prêmios</a></li>
                  <!--<li style="display:inline" class="separator"></li>-->
                  <li style="display:inline"><a href="contato.php">Fale conosco</a></li>';
include("includes/header.php");
?>
        <section id="content">
          <div class="center">
            <div>
              <ul id="menu-col" style="z-index:10">
                <li><a href="?proj=comerciais" id="lkcom">Ambientes Comerciais</a></li>
                <li><a href="?proj=corporativo" id="lkcor">Ambientes Corporativo</a></li>
                <li><a href="?proj=visual" id="lkvis">Comunicação visual</a></li>
                <li><a href="?proj=especiais" id="lkesp">Projetos Especiais</a></li>
              </ul>
            </div>
            <!--
<div id="counter">
              <p><span class="current-count">0</span>/<span class="total-count">0</span></p>
            </div>
-->
            <!-- <div id="FrogJS"> -->
<?php

switch($_GET['proj']){
	case 'comerciais':
		include('comerciais.php');
		break;
	case 'corporativos':
		include('corporativos.php');
		break;
	case 'especiais':
		include('especiais.php');
		break;
	case 'visual':
		include('visual.php');
		break;
	default:
		include('comerciais.php');
}

?>
                  
<!-- </div> -->
          </div>
        </section>
        <div class="clear"></div>
<?php include "includes/footer.php"; ?>