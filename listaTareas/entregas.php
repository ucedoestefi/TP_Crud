<!doctype html>
<html>
   <head>
      <title>Cargar Archivos de Tareas</title>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

      <link href="entregas.css" rel="stylesheet" type="text/css"/>
            
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
     

        <div class="container">
        <div class="row">
            <h4>Agregar Archivos de Tareas Finalizadas</h4>
            <hr style="margin-top:5px;margin-bottom: 5px;">
        <div class="content"> </div>
        <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Cargar Archivos</h3>
        </div>
        <div class="panel-body">
        <div class="col-lg-6">
            <form method="POST" action="cargar_entrega.php" enctype="multipart/form-data">
        <div class="form-group">
            <label class="btn btn-primary" for="my-file-selector">
            <input required="" type="file" name="file" id="exampleInputFile">
            </label>     
        </div>
          <button class="btn btn-primary" type="submit">Cargar Archivo</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
        </div>
        </div>
  
       <!--tabla-->
       <div class="panel panel-primary">
       <div class="panel-heading">
          <h3 class="panel-title">Descargas Disponibles</h3>
       </div>
       <div class="panel-body">
   
       <table class="table">
          <thead>
            <tr>
              <th width="7%">#</th>
              <th width="70%">Nombre del Archivo</th>
              <th width="13%">Descargar</th>
              <th width="10%">Eliminar</th>
            </tr>
          </thead>
          <tbody>
  
<?php
$archivos = scandir("entregasTrabajos");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="entregasTrabajos/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      <td><a title="Eliminar Archivo" href="eliminar_entrega.php?name=entregasTrabajos/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

          </tbody>
       </table>
       </div>
       </div>
       <!-- Fin tabla--> 
       </div>
       </div>
       <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

       <center>
       <a href="index.php">Volver</a>
       </center>

   </body>
</html>
