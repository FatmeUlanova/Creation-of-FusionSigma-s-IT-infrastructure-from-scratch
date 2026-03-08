<?php
// Iniciar sesión
session_start();

// Incluir archivo de conexión a la base de datos
require_once('gest/conexion.php');

// Obtener datos del formulario
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($c, $_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($c, $_POST['apellido']) : '';

// Verificar que los campos no estén vacíos
if (empty($nombre) || empty($apellido)) {
    header("Location: login.php?error=1");
    exit;
}

// Consulta para verificar si el usuario existe y está autorizado
// Solo permitimos a los 5 empleados específicos (IDs del 1 al 5)
$consulta = "SELECT * FROM empleado WHERE Nombre = '$nombre' AND Apellido = '$apellido' AND EmpleadoID BETWEEN 1 AND 5";
$resultado = mysqli_query($c, $consulta);

// Verificar si se encontró un usuario válido
if ($resultado && mysqli_num_rows($resultado) == 1) {
    // Obtener datos del usuario
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Crear variables de sesión
    $_SESSION['autenticado'] = true;
    $_SESSION['id'] = $usuario['EmpleadoID'];
    $_SESSION['nombre'] = $usuario['Nombre'];
    $_SESSION['apellido'] = $usuario['Apellido'];
    $_SESSION['email'] = $usuario['Email'];
    
    // Determinar el rol basado en el ID o cargo
    switch ($usuario['EmpleadoID']) {
        case 1:
            $_SESSION['rol'] = 'CEO';
            break;
        case 2:
            $_SESSION['rol'] = 'CTO';
            break;
        case 3:
            $_SESSION['rol'] = 'Desarrollador Web';
            break;
        case 4:
        case 5:
            $_SESSION['rol'] = 'Administrador de Bases de Datos';
            break;
        default:
            $_SESSION['rol'] = 'Usuario';
    }
    
    // Registrar el inicio de sesión exitoso
    $fecha_actual = date('Y-m-d H:i:s');
    $ip_usuario = $_SERVER['REMOTE_ADDR'];
    $registro_log = "INSERT INTO log_accesos (usuario_id, fecha_acceso, ip_acceso, estado) 
                    VALUES ('{$usuario['EmpleadoID']}', '$fecha_actual', '$ip_usuario', 'exitoso')";
    mysqli_query($c, $registro_log);
    
    // Redirigir al área restringida
    header("Location: area_restringida.php");
    exit;
} else {
    // Registrar el intento fallido
    $fecha_actual = date('Y-m-d H:i:s');
    $ip_usuario = $_SERVER['REMOTE_ADDR'];
    $usuario_intento = mysqli_real_escape_string($c, $nombre . ' ' . $apellido);
    $registro_log = "INSERT INTO log_accesos (usuario_intento, fecha_acceso, ip_acceso, estado) 
                    VALUES ('$usuario_intento', '$fecha_actual', '$ip_usuario', 'fallido')";
    mysqli_query($c, $registro_log);
    
    // Redirigir a la página de login con mensaje de error
    header("Location: login.php?error=1");
    exit;
}
?>
