<?php
	require_once('marcosup.php');
?>
<style>
/* Estilos mejorados para la tabla */
.table-container {
  background-color: #F8F8FF;
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 30px;
}

.table-header {
  margin-bottom: 25px;
}

.table-header h2 {
  color: #63367e;
  font-size: 2.2rem;
  font-weight: 700;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
  margin-bottom: 10px;
}

.table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background-color: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.table tr:nth-child(even) {
  background-color: rgba(99, 54, 126, 0.03);
}

.table tr:hover {
  background-color: rgba(99, 54, 126, 0.07);
}

.table th {
  background: linear-gradient(to right, #63367e, #8a5ca3);
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  padding: 15px 10px;
  font-size: 0.9rem;
  letter-spacing: 0.5px;
  border: none;
  text-align: left;
}

.table td {
  padding: 12px 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  color: #333;
  font-size: 0.95rem;
}

.table tr:last-child td {
  border-bottom: none;
}

/* Estilos para la paginación */
.pagination {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 20px 0 0;
  justify-content: center;
  border-radius: 50px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  background-color: white;
}

.page-item {
  margin: 0;
}

.page-link {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 40px;
  height: 40px;
  padding: 5px 10px;
  color: #63367e;
  background-color: white;
  border: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.page-item:first-child .page-link {
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
}

.page-item:last-child .page-link {
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
}

.page-item.active .page-link {
  background: linear-gradient(45deg, #63367e, #8a5ca3);
  color: white;
  box-shadow: 0 3px 8px rgba(99, 54, 126, 0.3);
}

.page-link:hover {
  background-color: rgba(99, 54, 126, 0.1);
  color: #4a2861;
}

.page-item.active .page-link:hover {
  background: linear-gradient(45deg, #63367e, #8a5ca3);
  color: white;
}

/* Estilos para el contenedor principal */
.py-3.bg-info {
  background: linear-gradient(135deg, #F8F8FF, #f0f0ff) !important;
  min-height: 600px;
  padding: 30px 0 !important;
  background-image: none !important;
}

/* Estilos para la barra de navegación */
.navbar.py-2.navbar-light {
  background: linear-gradient(to right, #63367e, #8a5ca3) !important;
  border-radius: 8px 8px 0 0;
  padding: 15px 20px !important;
  margin-bottom: 0;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  background-image: none !important;
}

.navbar-text {
  color: white !important;
  font-size: 1.2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.navbar-text hr {
  display: none;
}

.navbar-text b {
  font-weight: 600;
}

/* Ajustes responsivos */
@media (max-width: 768px) {
  .table-container {
    padding: 15px 10px;
  }
  
  .table-header h2 {
    font-size: 1.8rem;
  }
  
  .table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
  }
  
  .table th, .table td {
    padding: 10px 8px;
    font-size: 0.9rem;
  }
  
  .page-link {
    min-width: 35px;
    height: 35px;
    padding: 5px;
    font-size: 0.9rem;
  }
}
</style>

<nav class="navbar py-2 navbar-light text-left bg-warning" id="2">
  <span class="navbar-text text-left text-dark"><b>Consulta modo tabla</b></span>
</nav>
<div class="py-3 bg-info">
    <div class="container">
        <div class="table-container">
            <div class="table-header text-center">
                <h2>LISTADO DE TAREAS</h2>
            </div>
            <div class="table-content">		
                <?php
                // Seleccionamos la tabla con la que vamos a trabajar
                $tabla = "tarea"; // Escribir entre comillas el nombre de la tabla a listar
                
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
                echo '<table class="table">';
                
                // Recopilar los nombres de las columnas de la tabla seleccionada
                $cabeceras = mysqli_query($c, "SHOW FIELDS FROM $tabla");
                
                // Verificamos si la consulta de cabeceras fue exitosa
                if (!$cabeceras) {
                    die("Error al obtener las cabeceras: " . mysqli_error($c));
                }
                
                // Construye la fila de cabeceras
                echo "<tr>";
                while ($cab = mysqli_fetch_row($cabeceras)) {
                    echo "<th>" . ucfirst($cab[0]) . "</th>";
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
                echo '	  <a class="page-link" href="T-tarea.php?pagina='.$anterior.'">&laquo;</a>';
                echo '	</li>';
                
                for ($i = 1; $i <= $numpag; $i++) {
                    if ($i == $pagina) {
                        echo '	<li class="page-item active">';
                        echo '	  <a class="page-link" href="T-tarea.php?pagina='.$i.'">'.$i.'</a>';
                        echo '	</li>';						
                    } else {
                        echo '	<li class="page-item"><a class="page-link" href="T-tarea.php?pagina='.$i.'">'.$i.'</a></li>';
                    }
                }
                
                echo '	<li class="page-item ">';
                echo '	  <a class="page-link" href="T-tarea.php?pagina='.$siguiente.'">&raquo;</a>';
                echo '	</li>';
                echo '  </ul>';
                echo '</div>'; // Fin de la capa para paginación
                
                // Cerramos la conexión con la base de datos
                mysqli_close($c);
                ?>   	
            </div>
        </div>		
    </div>
</div>

<?php
  require_once('marcoinf.php');
?>