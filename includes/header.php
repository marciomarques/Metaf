<?php 
/*
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
*/
?><!DOCTYPE html>
<html>
	<head>
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
		<![endif]-->
		<script src="js/html5.js" type="text/javascript"></script>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title><?=empty($title) ? '' : $title.' | ' ?>METAF</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/estilo.min.css">
		<!--[if IE]>
			<style type="text/css">
		    font-size:20px !important
			</style>
		<![endif]-->


		<?php if($proj){?>
		<link rel="stylesheet" type="text/css" href="css/jquery.horizontal.scroll.css" />
		<link href="css/lightbox.css" type="text/css" rel="stylesheet" media="screen,projection">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script src="js/jquery.horizontal.scroll.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/lightbox.js"></script>
				
		<script type="text/javascript">
      tamanhoInterna = 0;
			jQuery(document).ready(function($){
        $("#horiz_container li").each(function(){
          tamanhoInterna += $(this).innerWidth();
        });
        tamanhoInterna+=100;
        $("#horiz_container").css("width", tamanhoInterna+"px");
        console.log(tamanhoInterna);
				$('#horiz_container_outer').horizontalScroll();
			});
		
		</script>

<style type="text/css">
        #counter{
<?php 
switch($_GET['proj']){
	case 'comerciais':
		echo 'color: #73AFCC;';
		break;
	case 'corporativos':
		echo 'color: #7A5E8D;';
		break;
	case 'especiais':
		echo 'color: #D91A47;';
		break;
	case 'visual':
		echo 'color: #B3AB36;';
		break;
	default:
		echo 'color: #73AFCC;';
}
 ?>
/*
            color: #73AFCC;
            color: #7A5E8D;
            color: #D91A47;
*/
/*             color: #B3AB36; */
        }
        #btn-prev{
            background: url("images/sleftama.png") no-repeat;
        }
        #btn-next{
            background: url("images/srightama.png") no-repeat;
        }
        #FrogJS .tb{
        	max-height: 135px;
        	width: 180px
        }
        </style>

		<?php }else{ ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <?php if($slideSet){ ?>
		<script type="text/javascript" src="js/slideset.js"></script>
		<?php } ?>
    <?php } ?>
    
	</head>
	<body class="<?= $bodyClass; ?>">
		<?php if($proj){ ?>
		<div id="all">
		<?php } ?>
		<header id="header">
		  <div class="center">
	  		  <div class="left">
<?php if($logo){ ?>
	  		   <a href="index.php" style="width:380px;height:63px;display:block;margin:20px 0px"><h1><img src="images/logo.png" alt="Metaf/Suzuka"></h1></a>
<?php } ?>
	  		  </div>
	  		  <div class="right" style="font-size:20px;margin-top:40px;text-transform:uppercase;font-family:LeagueGothicRegular, Knockout, Arial">
	  		    <nav>
	  		      <ul>
<?= $menu ?>
	  		      </ul>
	  		    </nav>
	  		  </div>
	  		  <div class="clear"></div>
		  </div>
		</header>
