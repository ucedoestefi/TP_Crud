
<?php
//incluye la clase Tarea y CrudTarea
	require_once('crud_tarea.php');
	require_once('tarea.php');
	$crud= new CrudTarea();
	$tarea=new Tarea();  
	//busca la tarea utilizando el id, que es enviado por GET desde la vista mostrar.php
	$tarea=$crud->obtenerTarea($_GET['id']);
?>
<html>
    <head>
	<title>Actualizar Libro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="actualizar.css" rel="stylesheet" type="text/css"/>
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
            <p>Actualizacion</p>
        <form action='administrar_tarea.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $tarea->getId()?>'>
			<td>Nombre de la Tarea</td>
			<td> <input type='text' name='nombre' value='<?php echo $tarea->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Integrante del Equipo Asignado</td>
			<td><input type='text' name='autor' value='<?php echo $tarea->getAutor()?>' ></td>
		</tr>
		<tr>
			<td>Fecha de Asignacion</td>
			<td><input type='text' name='fecha_asig' value='<?php echo $tarea->getFecha_asig() ?>'></td>
		</tr>
                <tr>
			<td>Tiempo Asignado</td>
			<td> <input type='text' name='tiempo' value='<?php echo $tarea->getTiempo()?>'></td>
		</tr>
		<tr>
			<td>Observaciones</td>
			<td><input type='text' name='observaciones' value='<?php echo $tarea->getObservaciones()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
        </form>
        </center>
</body>
</html>
