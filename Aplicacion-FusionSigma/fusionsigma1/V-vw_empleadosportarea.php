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
               <h2> LISTADO DE PROYECTOS POR CLIENTES </h2>	
            </div>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-center mx-auto col-10">		
               <?php
               
               // Seleccionamos la tabla con la que vamos a trabajar
               $tabla="vw_proyectosporcliente";// Escribir entre comillas el nombre de la tabla a listar
               
            // --- --- --- Preparamos la paginación -- --- --- 
            // comprueba si viene número de página   
            if (isset($_GET['pagina'])) {
               $pagina = $_GET['pagina'];
           } else {
               $pagina = 1;  
           } 
           
           // Calcula cuál será el registro de inicio para construir la consulta
           $registrosPorPagina = 7;
           $inicio = ($pagina - 1) * $registrosPorPagina;
           
           // Primero obtenemos el total de registros para calcular la paginación
           $consultaTotal = "SELECT COUNT(*) as total FROM $tabla";
           $resultadoTotal = mysqli_query($c, $consultaTotal);
           
           // Verificamos si la consulta fue exitosa
           if (!$resultadoTotal) {
               die("Error en la consulta de conteo: " . mysqli_error($c));
           }
           
           $filaTotal = mysqli_fetch_assoc($resultadoTotal);
           $numreg = $filaTotal['total'];
           
           // Como vamos a usar 3 registros por página dividimos entre tres
           $numpag = ceil($numreg / $registrosPorPagina);
           
           // Construimos la consulta con límites para la paginación
           $sentencia = "SELECT * FROM $tabla LIMIT $inicio, $registrosPorPagina";
           $resultado = mysqli_query($c, $sentencia);
           
           // Verificamos si la consulta fue exitosa
           if (!$resultado) {
               die("Error en la consulta principal: " . mysqli_error($c));
           }
           
           // Dibujamos una tabla HTML para mostrar los valores almacenados
           echo '<table class="table table-condensed">';
           
           // Recopilar los nombres de las columnas de la tabla seleccionada
           $cabeceras = mysqli_query($c, "SHOW FIELDS FROM $tabla");
           
           // Verificamos si la consulta de cabeceras fue exitosa
           if (!$cabeceras) {
               die("Error al obtener las cabeceras: " . mysqli_error($c));
           }
           
           // Construye la fila de cabeceras
           echo "<tr bgcolor='#f0f000'>";
           while ($cab = mysqli_fetch_row($cabeceras)) {
               echo "<th>$cab[0]</th>";
           }
           echo "</tr>";
           
           // Recorremos $resultado mostrando cada fila de la tabla
           while ($registro = mysqli_fetch_row($resultado)) {
               // Iniciamos la fila
               echo "<tr>";
               
               // Iniciar un contador de columnas
               $i = 0;
               
               // Recorremos y mostramos el valor de cada columna
               foreach ($registro as $fila) {
                   // Mostramos el valor de cada celda
                   echo "<td>$registro[$i]</td>";
                   
                   // Incrementamos el contador de columnas
                   $i++;
               }
               
               // Fin de la fila
               echo "</tr>";				
           }
           
           // Fin de la tabla HTML
           echo "</table>";
           
           // Segunda parte. Paginador.
           // --- --- --- --- --- --- --- --- --- --- --- ---
           // --- Mostramos el paginador ---       
           // Calcula páginas anterior y siguiente
           if ($pagina == 1) {
               $anterior = 1;
           } else {
               $anterior = $pagina - 1;
           }
           
           if ($pagina == $numpag) {
               $siguiente = $pagina;
           } else {
               $siguiente = $pagina + 1;
           }
           
           echo "<div class='col-md-12 text-center'>"; // Inicio de la capa para paginación
           echo '<ul class="pagination justify-content-center ">';
           echo '	<li class="page-item ">';
           echo '	  <a class="page-link" href="V-vw_empleadosportarea.php?pagina='.$anterior.'">&laquo;</a>';
           echo '	</li>';
           
           for ($i = 1; $i <= $numpag; $i++) {
               if ($i == $pagina) {
                   echo '	<li class="page-item active">';
                   echo '	  <a class="page-link" href="V-vw_empleadosportarea.php?pagina='.$i.'">'.$i.'</a>';
                   echo '	</li>';						
               } else {
                   echo '	<li class="page-item"><a class="page-link" href="V-vw_empleadosportarea.php?pagina='.$i.'">'.$i.'</a></li>';
               }
           }
           
           echo '	<li class="page-item ">';
           echo '	  <a class="page-link" href="V-vw_empleadosportarea.php?pagina='.$siguiente.'">&raquo;</a>';
           echo '	</li>';
           echo '  </ul>';
           echo '</div>'; // Fin de la capa para paginación
           
           // Cerramos la conexión con la base de datos
           mysqli_close($c);
           ?>   	
       </div>		
   </div>
</div>

<?php
  require_once('marcoinf.php');
?>