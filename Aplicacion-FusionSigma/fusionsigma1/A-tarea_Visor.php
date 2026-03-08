<?php
// Archivo: A-tarea_Visor.php
require_once('marcosup.php');
?>

<style>
/* Estilos para el visor de tareas */
.visor-container {
  background: linear-gradient(135deg, #63367e 0%, #8a5ca3 100%);
  border-radius: 15px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
  padding: 40px;
  color: white;
  margin-top: 20px;
  margin-bottom: 40px;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.visor-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.visor-container::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
  transform: rotate(45deg);
  pointer-events: none;
  z-index: 1;
}

.visor-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 30px;
  text-align: center;
  color: white;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  position: relative;
}

.visor-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 2px;
}

.data-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  margin: 30px 0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.data-table th,
.data-table td {
  padding: 15px 20px;
  text-align: left;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.data-table th {
  background-color: rgba(0, 0, 0, 0.2);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.9);
}

.data-table td {
  background-color: rgba(255, 255, 255, 0.1);
  font-size: 1.1rem;
}

.data-table tr:last-child td {
  border-bottom: none;
}

.data-table tr:hover td {
  background-color: rgba(255, 255, 255, 0.2);
}

.status-message {
  padding: 20px;
  border-radius: 10px;
  margin: 30px 0;
  font-size: 1.2rem;
  font-weight: 500;
  text-align: center;
  animation: pulse 2s infinite;
}

.status-success {
  background: linear-gradient(45deg, rgba(0, 128, 0, 0.7), rgba(0, 128, 0, 0.5));
  box-shadow: 0 5px 15px rgba(0, 128, 0, 0.3);
}

.status-error {
  background: linear-gradient(45deg, rgba(220, 53, 69, 0.7), rgba(220, 53, 69, 0.5));
  box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
}

.sql-code {
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 8px;
  padding: 15px;
  margin: 20px 0;
  font-family: 'Courier New', monospace;
  font-size: 0.9rem;
  color: #e6d7b9;
  overflow-x: auto;
  white-space: pre-wrap;
  word-wrap: break-word;
  box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
}

.back-button {
  display: inline-block;
  padding: 12px 30px;
  font-size: 1.1rem;
  font-weight: 600;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  background: linear-gradient(45deg, #4a2861, #63367e);
  color: white;
  text-decoration: none;
  text-align: center;
  margin-top: 20px;
}

.back-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

/* Animación para el visor */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.03); }
  100% { transform: scale(1); }
}

.animated {
  animation: fadeIn 0.8s ease forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }

/* Fondo de la página */
.page-background {
  background: linear-gradient(135deg, #f5f7fa 0%, #e0f7fa 100%);
  min-height: 100vh;
  padding: 40px 0;
}

/* Decoración */
.decoration {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  z-index: 0;
}

.decoration-1 {
  width: 100px;
  height: 100px;
  top: -30px;
  left: -30px;
}

.decoration-2 {
  width: 150px;
  height: 150px;
  bottom: -50px;
  right: -50px;
}

.decoration-3 {
  width: 60px;
  height: 60px;
  top: 40%;
  right: 10%;
}

/* Estilos para la descripción de la tarea */
.task-description {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  padding: 20px;
  margin: 20px 0;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  line-height: 1.6;
}

/* Estilos para las fechas */
.date-badge {
  display: inline-block;
  padding: 8px 16px;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  background: linear-gradient(45deg, #4a2861, #63367e);
  color: white;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
}

.task-duration {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 20px 0;
  gap: 15px;
}

.duration-arrow {
  font-size: 1.5rem;
  color: rgba(255, 255, 255, 0.8);
}

.task-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 25px;
  margin: 30px 0;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  border-left: 5px solid #e6d7b9;
}

.task-card-title {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 15px;
  color: rgba(255, 255, 255, 0.9);
}

.project-badge {
  display: inline-block;
  padding: 6px 12px;
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 600;
  background: linear-gradient(45deg, #e6d7b9, #f5ebd9);
  color: #4a2861;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
  margin-top: 10px;
}
</style>

<div class="page-background">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="visor-container">
          <div class="decoration decoration-1"></div>
          <div class="decoration decoration-2"></div>
          <div class="decoration decoration-3"></div>
          
          <h1 class="visor-title animated">Tarea Registrada</h1>
          
          <?php			
          // Todas las variables que ha enviado el Formulario
          $d1 = $_POST['d1'];    // Descripcion
          $d2 = $_POST['d2'];    // FechaInicio
          $d3 = $_POST['d3'];    // FechaFin
          $d4 = $_POST['d4'];    // PROYECTO_ProyectoID
          
          // Formatear las fechas para mejor visualización
          $fechaInicio = date('d/m/Y', strtotime($d2));
          $fechaFin = date('d/m/Y', strtotime($d3));
          
          // Calcular duración de la tarea en días
          $inicio = new DateTime($d2);
          $fin = new DateTime($d3);
          $duracion = $inicio->diff($fin)->days;
          
          // Obtener información del proyecto
          $info_proyecto = "Proyecto no encontrado";
          $consulta_proyecto = "SELECT p.Descripcion as ProyectoDesc, c.Nombre as ClienteNombre 
                               FROM proyecto p 
                               JOIN cliente c ON p.CLIENTE_ClienteID = c.ClienteID 
                               WHERE p.ProyectoID = $d4";
          $resultado_proyecto = mysqli_query($c, $consulta_proyecto);
          if ($resultado_proyecto && mysqli_num_rows($resultado_proyecto) > 0) {
            $proyecto = mysqli_fetch_assoc($resultado_proyecto);
            $info_proyecto = substr($proyecto['ProyectoDesc'], 0, 50) . 
                            (strlen($proyecto['ProyectoDesc']) > 50 ? '...' : '') . 
                            " (Cliente: " . $proyecto['ClienteNombre'] . ")";
          }

          // Muestra los datos de la tarea en un formato más visual
          echo '<div class="task-card animated delay-1">';
          echo '<div class="task-card-title">Detalles de la Tarea</div>';
          
          echo '<div class="task-description">';
          echo nl2br(htmlspecialchars($d1));
          echo '</div>';
          
          echo '<div class="task-duration">';
          echo '<span class="date-badge">' . $fechaInicio . '</span>';
          echo '<span class="duration-arrow"><i class="fas fa-arrow-right"></i></span>';
          echo '<span class="date-badge">' . $fechaFin . '</span>';
          echo '</div>';
          
          echo '<p class="text-center">Duración estimada: <strong>' . $duracion . ' días</strong></p>';
          echo '<p class="text-center">Proyecto: <span class="project-badge">' . $info_proyecto . '</span></p>';
          echo '</div>';
          
          // Muestra los datos recogidos en formato tabla
          echo '<div class="animated delay-1">';
          echo '<table class="data-table">';
          echo "<tr><th>Campo</th><th>Valor</th></tr>";
          echo "<tr><td>Descripción</td><td><b>" . substr($d1, 0, 50) . (strlen($d1) > 50 ? '...' : '') . "</b></td></tr>";
          echo "<tr><td>Fecha de Inicio</td><td><b>" . $fechaInicio . "</b></td></tr>";
          echo "<tr><td>Fecha de Finalización</td><td><b>" . $fechaFin . "</b></td></tr>";
          echo "<tr><td>ID de Proyecto</td><td><b>" . $d4 . "</b></td></tr>";
          echo "</table>";
          echo '</div>';
         
          // Indica la tabla sobre la que va a realizar la operación de alta
          $tabla = "tarea"; // Entre comillas indicamos el nombre de la tabla
          
          // Construye la sentencia de inserción de los datos
          $sentencia = "INSERT INTO $tabla (Descripcion, FechaInicio, FechaFin, PROYECTO_ProyectoID) VALUES ('$d1','$d2','$d3','$d4');";
          
          // Muestra la sentencia SQL
          echo '<div class="animated delay-2">';
          echo '<div class="sql-code">' . $sentencia . '</div>';
          echo '</div>';

          // A continuación ejecuta la sentencia
          echo '<div class="animated delay-3">';
          if (mysqli_query($c, $sentencia)) {			 
            echo '<div class="status-message status-success">';
            echo '<i class="fas fa-check-circle mr-2"></i> Tarea registrada correctamente';
            echo '</div>';
          } else {
            echo '<div class="status-message status-error">';
            echo '<i class="fas fa-exclamation-triangle mr-2"></i> Error al registrar la tarea: ' . mysqli_error($c);
            echo '</div>';
          }
          echo '</div>';
          
          ?>
          
          <div class="text-center animated delay-3">
            <a href="A-tarea_Formulario.php" class="back-button">
              <i class="fas fa-arrow-left mr-2"></i> Volver al formulario
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php							 
// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');		
?>