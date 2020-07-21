
<?php
//incluye la clase Tarea y CrudTarea
require_once('crud_tarea.php');
require_once('tarea.php');
 
$crud= new CrudTarea();
$tarea= new Tarea();
	// si el elemento insertar no viene nulo llama al crud e inserta una tarea
	if (isset($_POST['insertar'])) {
		$tarea->setNombre($_POST['nombre']);
		$tarea->setAutor($_POST['autor']);
		$tarea->setFecha_asig($_POST['fecha_asig']);
                $tarea->setTiempo($_POST['tiempo']);
		$tarea->setObservaciones($_POST['observaciones']);
                //llama a la función insertar definida en el crud
		$crud->insertar($tarea);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la tarea
	}elseif(isset($_POST['actualizar'])){
		$tarea->setId($_POST['id']);
		$tarea->setNombre($_POST['nombre']);
		$tarea->setAutor($_POST['autor']);
		$tarea->setFecha_asig($_POST['fecha_asig']);
                $tarea->setTiempo($_POST['tiempo']);
		$tarea->setObservaciones($_POST['observaciones']);
          
		$crud->actualizar($tarea);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina una tarea
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>