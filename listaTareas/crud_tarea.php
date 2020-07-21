<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudTarea{
		// constructor de la clase
		public function __construct(){}
		// método para insertar, recibe como parámetro un objeto de tipo tarea
		public function insertar($tarea){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO registros values(NULL,:nombre,:autor,:fecha_asig,:tiempo,:observaciones)');
			$insert->bindValue('nombre',$tarea->getNombre());
			$insert->bindValue('autor',$tarea->getAutor());
			$insert->bindValue('fecha_asig',$tarea->getFecha_asig());
                        $insert->bindValue('tiempo',$tarea->getTiempo());   
			$insert->bindValue('observaciones',$tarea->getObservaciones());
                    
			$insert->execute();
		}
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaTareas=[];    
			$select=$db->query('SELECT * FROM registros');

			foreach($select->fetchAll() as $tarea){
				$myTarea= new Tarea();
				$myTarea->setId($tarea['id']);
				$myTarea->setNombre($tarea['nombre']);
				$myTarea->setAutor($tarea['autor']);
				$myTarea->setFecha_asig($tarea['fecha_asig']);
                                $myTarea->setTiempo($tarea['tiempo']);
				$myTarea->setObservaciones($tarea['observaciones']);
				$listaTareas[]=$myTarea;
			}
			return $listaTareas;
		}
		// método para eliminar una tarea, recibe como parámetro el id de la tarea
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM registros WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
		// método para buscar una tarea, recibe como parámetro el id de la tarea
		public function obtenerTarea($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM registros WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tarea=$select->fetch();
			$myTarea= new Tarea();
			$myTarea->setId($tarea['id']);
			$myTarea->setNombre($tarea['nombre']);
			$myTarea->setAutor($tarea['autor']);
			$myTarea->setFecha_asig($tarea['fecha_asig']);
                        $myTarea->setTiempo($tarea['tiempo']);
			$myTarea->setObservaciones($tarea['observaciones']);
                        
			return $myTarea;
		}
		// método para actualizar una tarea, recibe como parámetro la tarea
		public function actualizar($tarea){
			$db=Db::conectar();
                        
			$actualizar=$db->prepare('UPDATE registros SET nombre=:nombre, autor=:autor,fecha_asig=:fecha_asig, tiempo=:tiempo, observaciones=:observaciones WHERE ID=:id');
			$actualizar->bindValue('id',$tarea->getId());
			$actualizar->bindValue('nombre',$tarea->getNombre());
			$actualizar->bindValue('autor',$tarea->getAutor());
			$actualizar->bindValue('fecha_asig',$tarea->getFecha_asig());
                        $actualizar->bindValue('tiempo',$tarea->getTiempo());
			$actualizar->bindValue('observaciones',$tarea->getObservaciones());
                        
			$actualizar->execute();
		}
	}
?>

