
<!DOCTYPE html>
<html>
    <head>
            <title>Administrar Tareas</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="ingresar.css" rel="stylesheet" type="text/css"/>
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
            <p>Agregar tarea</p>
            <form action='administrar_tarea.php' method='post'>
	    <table>
		<tr>
	           <td>Nombre de la tarea</td>
	           <td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
	           <td>Integrante del equipo asignado</td>
		   <td><input type='text' name='autor' ></td>
		</tr>
		<tr>
		   <td>Fecha de asignacion</td>
	           <td><input type='text' name='fecha_asig' ></td>
		</tr>
                <tr>
	           <td>Tiempo asignado</td>
		   <td><input type='text' name='tiempo' ></td>
		</tr>
		<tr>
		   <td>Observaciones</td>
	           <td><input type='text' name='observaciones' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	    </table>
	    <input class='boton' type='submit' value='Guardar'>   
	    <a href="index.php">Volver</a>
            </form>      
        </center>
        <footer>
        Materia: Desarrollo de Aplicaciones Web
        </footer>
    </body>
</html>