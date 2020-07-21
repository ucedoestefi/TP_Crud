
<?php
	class Tarea{
		private $id;
		private $nombre;
		private $autor;
		private $fecha_asig;        
                private $tiempo;
		private $observaciones;
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setAutor($autor){
			$this->autor = $autor;
		}
		public function getFecha_asig(){
		return $this->fecha_asig;
		}
		public function setFecha_asig($fecha_asig){
			$this->fecha_asig = $fecha_asig;
		}
                public function getTiempo(){
		return $this->tiempo;
		}
		public function setTiempo($tiempo){
			$this->tiempo = $tiempo;
		}
                public function getObservaciones(){
		return $this->observaciones;
		}
		public function setObservaciones($observaciones){
			$this->observaciones = $observaciones;
		}
                
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>