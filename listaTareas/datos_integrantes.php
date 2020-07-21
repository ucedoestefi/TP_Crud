<?php

	class Integrante{
		private $id;
		private $nombre;
		private $apellido;
		private $email;        
                private $dni;
		
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getEmail(){
		return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
                public function getDni(){
		return $this->dni;
		}
		public function setDni($dni){
			$this->dni = $dni;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}

// incluye la clase Db
require_once('conexion.php');

	class CrudIntegrante{
		
		// método para mostrar todos los integrante
		public function mostrar2(){
			$db=Db::conectar();
			$listaIntegrantes=[];    
			$select=$db->query('SELECT * FROM integrantes');

			foreach($select->fetchAll() as $integrante){
				$myIntegrante= new Integrante();
				$myIntegrante->setId($integrante['id']);
				$myIntegrante->setNombre($integrante['nombre']);
				$myIntegrante->setApellido($integrante['apellido']);
				$myIntegrante->setEmail($integrante['email']);
                                $myIntegrante->setDni($integrante['dni']);
				$listaIntegrantes[]=$myIntegrante;
			}
			return $listaIntegrantes;
		}
		
		
        }
?>

