<?php
// Iniciar sesión
session_start();

// Guardar el nombre del usuario antes de destruir la sesión
$nombre_completo = isset($_SESSION['nombre_completo']) ? $_SESSION['nombre_completo'] : "Usuario";

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio con un mensaje
header("Location: index.php?logout=success&user=" . urlencode($nombre_completo));
exit;
?>