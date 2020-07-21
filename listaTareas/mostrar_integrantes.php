
<?php

require_once('datos_integrantes.php');

$crud2=new CrudIntegrante();
$integrante= new Integrante();
//obtiene todos las tareas con el método mostrar de la clase crud
$listaIntegrantes=$crud2->mostrar2();
?>
    
<!DOCTYPE html>
<html>
    <head>
	<title>Mostrar Datos Integrantes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="mostrar_integrantes.css" rel="stylesheet" type="text/css"/>
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
            <p>Datos de los integrantes del equipo</p>
	<table border=1>
		    <head>
			<td>Nombre</td>  
			<td>Apellido</td>         
			<td>Email</td> 
                        <td>DNI</td>  
		    </head>
		    <body>
			<?php foreach ($listaIntegrantes as $integrante) {?>
			<tr id="prueba">
                                
				<td><?php echo $integrante->getNombre() ?></td>
				<td><?php echo $integrante->getApellido() ?></td>
				<td><?php echo $integrante->getEmail()?> </td>
                                <td><?php echo $integrante->getDni() ?></td>     
			</tr>
			<?php }?>  
                    </body> 
	</table>
	<a href="index.php">Volver</a>
        </center>
        <footer>
        Materia: Desarrollo de Aplicaciones Web
        </footer>
    </body>
</html>

