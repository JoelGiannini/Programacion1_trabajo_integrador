<?php 
	echo '
    <div class="container">
    	<hr class="featurette-divider">
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="'.$hitos[$_GET["noticia"]]["img"].'">
		        <h2 class="featurette-heading">'.$hitos[$_GET["noticia"]]["titulo"].'
		            <span class="text-muted">'.$hitos[$_GET["noticia"]]["anio"].'</span>
		        </h2>
		        <p class="lead">'.$hitos[$_GET["noticia"]]["contenido"].'</p>
		        
        </div>';
