<?php
	class Pagina {
		public
			$titulo,
			$anio;
			
		public function __construct($titulo){
			$this->titulo = $titulo;
			$this->anio = date("Y");
		}
	}
