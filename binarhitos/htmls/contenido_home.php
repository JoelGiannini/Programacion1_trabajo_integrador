<?php 
	echo '
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Hitos</h1>
                <h2>de la informática</h2>
            </div>
        </div>
    </header>
    <div class="container">';
    
    foreach($hitos as $indice=>$hito){
    	echo '<hr class="featurette-divider">
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive '.(($indice%2!=0)?'pull-right':'pull-left').'" src="'.$hito["img"].'">
		        <h2 class="featurette-heading">'.$hito["titulo"].'
		            <span class="text-muted">'.$hito["anio"].'</span>
		        </h2>
		        <p class="lead">'.substr($hito["contenido"], 0, 120).'...<a href="detalle.php?noticia='.$indice.'">Ver más</a></p>
		        
        </div>';
    }
