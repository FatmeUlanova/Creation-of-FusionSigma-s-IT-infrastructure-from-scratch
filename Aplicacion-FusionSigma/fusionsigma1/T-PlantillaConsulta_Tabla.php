<?php
	require_once('marcosup.php');
	
?>
<nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
  <span class="navbar-text text-left text-dark"><hr><b>Consulta modo tabla</b></span>
</nav>
   <div class="py-3 bg-info" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: repeat; height: 600px;">
      <div class="container">
        <div class="row text-center">
		      <div class="text-center mx-auto col-10">
               <h2> LISTADO DE TAREAS </h2>	
            </div>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-center mx-auto col-10">		
               <?php
               
               // Seleccionamos la tabla con la que vamos a trabajar
               $tabla="tarea";// Escribir entre comillas el nombre de la tabla a listar
               
               // Establecemos la sentencia SQL de la Consulta a realizar
               $sentencia="select * from $tabla";
               
               // Dibujamos una tabla HTML para mostrar los valores almacenados
               echo '<table class="table table-condensed">';
               
               // Recopilar los nombres de las columnas de la tabla seleccionada
               $cabeceras=mysqli_query($c,"SHOW FIELDS FROM $tabla");
               
               // Construye la fila de cabeceras
               echo "<tr bgcolor='#f0f000'>";
               while ($cab=mysqli_fetch_row($cabeceras)){
                  echo "<th>$cab[0]</th>";
               }
               echo "</tr>";
               
               // Recopilar las filas almacenadas en la tabla
               $resultado=mysqli_query($c,$sentencia);
               
               // Recorremos $resultado mostrando cada fila de la tabla
               while ($registro = mysqli_fetch_row($resultado)){
                  
                  // Iniciamos la fila
                  echo "<tr>";
                  
                  // Iniciar un contador de columnas
                  $i=0;
                  
                  // Recorremos y mostramos el valor de cada columna
                  foreach ($registro as $fila){
                     
                     // Mostramos el valor de cada celda
                     echo "<td> $registro[$i]</td>";
                     
                     // Incrementamos el contador de columnas
                     $i++;
                  }
                  
                  // Fin de la fila
                  echo "</tr>";				
               }
               
               // Fin de la tabla HTML
               echo "</table>";
               
               // Cerramos la conexión con la base de datos
               mysqli_close($c);
               
               ?>   	
		   </div>		
		</div>
   </div>

<?php
	require_once('marcoinf.php');
?>	
