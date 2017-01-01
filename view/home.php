<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/uikit.css">
	<script src="js/jquery.js"></script>
	<script src="js/angular.js"></script>
</head>
<body>
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached" data-uk-responsive data-uk-tab>
		<ul class="uk-navbar-nav uk-hidden-small">
			<li class="uk-parent"><a href=""><i class="uk-icon-user uk-icon-justify"></i> <?php echo $nombre; ?></a></li>
			<li class="uk-parent"><a href=""><i class="uk-icon-comments uk-icon-justify"></i> Chat</a></li>
			<div class="uk-navbar-content">
				<form class="uk-form uk-margin-remove uk-display-inline-block">
					<input type="text" placeholder="Busca a un amigo" id="buscar">
					<div class="uk-panel uk-panel-box busqueda" style="z-index:+1; height: 100px; overflow-y: auto; overflow-x: hidden;">
						
					</div>
				</form>
			</div>
		</ul>
		<a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
		<div class="uk-navbar-flip">
	        <ul class="uk-navbar-nav">
	            <li><a href=""><i class="uk-icon-external-link uk-icon-justify"></i> Salir</a></li>
	        </ul>
	    </div>
	</nav>
	
	<div id="tm-offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">...</div>
</div>
	<!-- Fin menú de navegación -->
	<div class="uk-container" data-uk-responsive>
			<div class="uk-grid">
				<div class="uk-width-1-4">
		    	<div class="uk-panel" style="border-right:1px solid #ccc; border-bottom: 1px solid #ccc;">
				    <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
					    <li class="uk-parent">
					        <a href="#">Amigos</a>
					        <ul class="uk-nav-sub" style="height: 150px; overflow-y: auto">
					            <?php
					            for($i=1;$i<=30; $i++){
					            ?>
					            <li><a href="">Amigo <?= $i; ?></a></li>
					            <?php
					        	}
					        	?>
					        </ul>
					    </li>
					</ul>	
				</div>
		    </div>
		    <div class="uk-width-1-4" style="margin: 10px 10px;">
		    	<div class="uk-panel uk-panel-box">
		    	    <div class="uk-panel-badge uk-badge"><?php echo $nombre; ?></div>
		    	    <div class="uk-panel-teaser">
				        <img src="img/geek.jpg" alt="">
				    </div>
		    	    <h3 class="uk-panel-title"><?php echo $nombre; ?>'s Geek</h3>
		    	    <p style="word-wrap:break-word;">
		    	    	aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  
		    	    </p>
		    	</div>
		    </div>
		</div>
	</div>
</body>
</html>
<script src="js/uikit.js"></script>
<script src="js/funciones.js"></script>