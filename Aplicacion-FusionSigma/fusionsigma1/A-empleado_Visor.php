<?php
	require_once('marcosup.php');
?>

<style>
/* Estilos para el visor de empleados */
.visor-container {
  background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
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
  color: #4ade80;
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
  background: linear-gradient(45deg, #fc4a1a, #f7b733);
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
  background: linear-gradient(135deg, #f5f7fa 0%, #e4efe9 100%);
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

/* Estilos para la insignia de rol */
.role-badge {
  display: inline-block;
  padding: 6px 12px;
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: white;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
}

/* Colores específicos para cada rol */
.role-ceo {
  background: linear-gradient(45deg, #FF416C, #FF4B2B);
}

.role-cto {
  background: linear-gradient(45deg, #1A2980, #26D0CE);
}

.role-dev {
  background: linear-gradient(45deg, #4776E6, #8E54E9);
}

.role-dba {
  background: linear-gradient(45deg, #11998e, #38ef7d);
}

.role-security {
  background: linear-gradient(45deg, #2C3E50, #4CA1AF);
}

.role-marketing {
  background: linear-gradient(45deg, #FF8008, #FFC837);
}

.role-hr {
  background: linear-gradient(45deg, #834d9b, #d04ed6);
}

.role-accounting {
  background: linear-gradient(45deg, #5614B0, #DBD65C);
}

/* Estilos para la tarjeta de empleado */
.employee-card {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 25px;
  margin: 30px 0;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  border-left: 5px solid #f7b733;
  position: relative;
  overflow: hidden;
}

.employee-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,.05)' fill-rule='evenodd'/%3E%3C/svg%3E");
  opacity: 0.5;
  z-index: 0;
}

.employee-name {
  font-size: 1.8rem;
  font-weight: 700;
  margin-bottom: 5px;
  position: relative;
  z-index: 1;
}

.employee-email {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 15px;
  position: relative;
  z-index: 1;
}

.employee-role-container {
  margin-top: 15px;
  position: relative;
  z-index: 1;
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
          
          <h1 class="visor-title animated">Datos del Empleado Registrado</h1>
          
          <?php			
          // Todas las variables que ha enviado el Formulario
          $d1 = isset($_POST['d1']) ? htmlspecialchars($_POST['d1']) : '';    // Nombre
          $d2 = isset($_POST['d2']) ? htmlspecialchars($_POST['d2']) : '';    // Apellido
          $d3 = isset($_POST['d3']) ? htmlspecialchars($_POST['d3']) : '';    // Email
          $d4 = isset($_POST['d4']) ? htmlspecialchars($_POST['d4']) : '';    // Rol

          // Determinar la clase CSS para el rol
          $roleClass = '';
          switch ($d4) {
            case 'CEO':
              $roleClass = 'role-ceo';
              break;
            case 'CTO':
              $roleClass = 'role-cto';
              break;
            case 'Desarrollador Web':
              $roleClass = 'role-dev';
              break;
            case 'Administrador BD':
              $roleClass = 'role-dba';
              break;
            case 'Especialista Seguridad':
              $roleClass = 'role-security';
              break;
            case 'Marketing y Ventas':
              $roleClass = 'role-marketing';
              break;
            case 'Recursos Humanos':
              $roleClass = 'role-hr';
              break;
            case 'Contabilidad':
              $roleClass = 'role-accounting';
              break;
            default:
              $roleClass = 'role-badge';
          }

          // Mostrar tarjeta de empleado
          echo '<div class="employee-card animated delay-1">';
          echo '<div class="employee-name">' . $d1 . ' ' . $d2 . '</div>';
          echo '<div class="employee-email">' . $d3 . '</div>';
          echo '<div class="employee-role-container">';
          echo '<span class="role-badge ' . $roleClass . '">' . $d4 . '</span>';
          echo '</div>';
          echo '</div>';

          // Muestra los datos recogidos en formato tabla
          echo '<div class="animated delay-1">';
          echo '<table class="data-table">';
          echo "<tr><th>Campo</th><th>Valor</th></tr>";
          echo "<tr><td>Nombre</td><td><b>" . $d1 . "</b></td></tr>";
          echo "<tr><td>Apellido</td><td><b>" . $d2 . "</b></td></tr>";
          echo "<tr><td>Email</td><td><b>" . $d3 . "</b></td></tr>";
          echo "<tr><td>Rol</td><td><span class='role-badge " . $roleClass . "'>" . $d4 . "</span></td></tr>";
          echo "</table>";
          echo '</div>';
         
          // Indica la tabla sobre la que va a realizar la operación de alta
          $tabla = "empleado"; // Entre comillas indicamos el nombre de la tabla
          
          // Construye la sentencia de inserción de los datos
          $sentencia = "INSERT INTO $tabla (Nombre, Apellido, Email, Rol) VALUES ('$d1','$d2','$d3','$d4');";
          
          // Muestra la sentencia SQL
          echo '<div class="animated delay-2">';
          echo '<div class="sql-code">' . $sentencia . '</div>';
          echo '</div>';

          // A continuación ejecuta la sentencia
          echo '<div class="animated delay-3">';
          if (mysqli_query($c, $sentencia)) {			 
            echo '<div class="status-message status-success">';
            echo '<i class="fas fa-check-circle mr-2"></i> Empleado registrado correctamente';
            echo '</div>';
          } else {
            echo '<div class="status-message status-error">';
            echo '<i class="fas fa-exclamation-triangle mr-2"></i> Error al registrar el empleado: ' . mysqli_error($c);
            echo '</div>';
          }
          echo '</div>';
          ?>
          
          <div class="text-center animated delay-3">
            <a href="A-empleado_Formulario.php" class="back-button">
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