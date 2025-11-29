<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	//echo "Hola mundo"; 
	require_once ("datos.php");
	//var_dump($hitos);
	require_once ("classPagina.php");
	
	$paginaWeb = new Pagina("Hitos de la informática");
	
	
	
	require_once ("htmls/header.php");	
	require_once ("htmls/nav.php");	
	require_once ("htmls/contenido_home.php");    
    require_once ("htmls/footer.php");    
    require_once ("htmls/javascripts.php");
		
