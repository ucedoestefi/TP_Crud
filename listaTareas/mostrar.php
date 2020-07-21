
<?php
//incluye la clase Tarea y CrudTarea
require_once('crud_tarea.php');
require_once('tarea.php');
$crud=new CrudTarea();
$tarea= new Tarea();
//obtiene todos las tareas con el método mostrar de la clase crud
$listaTareas=$crud->mostrar();
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Mostrar Tareas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="mostrar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class='col1'>
            <div id="titulo">
            IFTS N°16 DE 18                    
            </div>
            </div>
            <div id="titulo2">
            Equipo de trabajo N°6 Ucedo-Rivera-Paez
            </div>
            <div class="clear">
            </div>
        </header>
        <center>
            <p>Lista de Tareas</p>
	<table border=1>
		    <head>
			<td>Nombre de la Tarea</td>  
                        <td><a href="mostrar_integrantes.php">Integrante del equipo asignado</a></td>
			<td>Fecha de Asignacion</td> 
                        <td>Tiempo Asignado</td>   
			<td>Observaciones</td>   
                       	<td>Actualizar</td>
			<td>Eliminar</td>
		    </head>
		    <body>
			<?php foreach ($listaTareas as $tarea) {?>
			<tr id="prueba">
				<td><?php echo $tarea->getNombre() ?></td>
				<td><?php echo $tarea->getAutor() ?></td>
				<td><?php echo $tarea->getFecha_asig()?> </td>
                                <td><?php echo $tarea->getTiempo() ?></td>     
				<td><?php echo $tarea->getObservaciones() ?></td>  
				<td><a href="actualizar.php?id=<?php echo $tarea->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_tarea.php?id=<?php echo $tarea->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>  
                    </body> 
	</table>
            
        
	<a href="index.php">Volver</a>
        
        <button onclick="location.href='entregas.php'">Entregar Trabajos</button>
        
        </center>
        <footer>
        Materia: Desarrollo de Aplicaciones Web
        </footer>
    </body>
</html>


