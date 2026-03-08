<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome actualizado -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="estilos/ProyectoASIR.css">
  
  <!-- Favicon -->
  <link rel="icon" href="estilos/fusion.jpeg">
  
  <!-- Meta tags para SEO -->
  <meta name="description" content="FusionSigma - Desarrollo de Bases de Datos Personalizadas y Gestión en la nube">
  <meta name="keywords" content="bases de datos, desarrollo, cloud, gestión, almería">
  <title>FusionSigma - Expertos en Bases de Datos</title>
  
  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Variables para personalización de colores -->
  <style>
    :root {
      --primary: #63367e;
      --primary-dark: #4a2861;
      --primary-light: #8a5ca3;
      --secondary: #e6d7b9;
      --secondary-dark: #d1c3a7;
      --secondary-light: #f5ebd9;
      --accent: #4f70ce;
      --text-dark: #333;
      --text-light: #f3f3f3;
      --background: #F8F8FF;
    }
    
    body {
      padding-top: 70px; /* Espacio para la barra de navegación fija */
      min-height: 100vh;
      background-color: var(--background);
      color: var(--text-dark);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Estilos para la barra de navegación */
    .navbar {
      background: linear-gradient(to right, #000033, #000066) !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }
    
    /* Estilo para el logo y nombre de la empresa */
    .navbar-brand {
      font-size: 1.8rem !important;
      font-weight: 700 !important;
      color: #ffffff !important;
      text-shadow: 0 0 10px rgba(255,255,255,0.4);
      transition: all 0.3s ease;
    }
    
    .navbar-brand:hover {
      transform: translateY(-2px);
      text-shadow: 0 0 15px rgba(255,255,255,0.6);
    }
    
    .navbar-brand img {
      transition: all 0.3s ease;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(255,255,255,0.3);
    }
    
    .navbar-brand:hover img {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(255,255,255,0.5);
    }
    
    /* Estilo para las letras del menú */
    .navbar-nav .nav-link {
      color: #ffffff !important;
      font-size: 1.2rem !important;
      font-weight: 600 !important;
      text-shadow: 0 0 5px rgba(255,255,255,0.3);
      padding: 0.5rem 1rem !important;
      transition: all 0.3s ease;
      position: relative;
    }
    
    /* Efecto hover para los elementos del menú */
    .navbar-nav .nav-link:hover {
      color: #f8f9fa !important;
      transform: translateY(-2px);
      text-shadow: 0 0 8px rgba(255,255,255,0.5);
    }
    
    /* Efecto de subrayado en hover */
    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: #ffffff;
      transition: all 0.3s ease;
      transform: translateX(-50%);
      opacity: 0;
    }
    
    .navbar-nav .nav-link:hover::after {
      width: 70%;
      opacity: 1;
    }
    
    /* Estilo para el elemento activo del menú */
    .navbar-nav .active > .nav-link,
    .navbar-nav .nav-link.active {
      position: relative;
    }
    
    .navbar-nav .active > .nav-link::after,
    .navbar-nav .nav-link.active::after {
      content: '';
      position: absolute;
      width: 70%;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: #ffffff;
      transform: translateX(-50%);
      opacity: 1;
    }
    
    /* Ajuste de altura de la barra de navegación */
    .navbar {
      min-height: 70px;
      padding: 0.5rem 1rem;
    }
    
    /* Estilo para el botón del menú en móvil */
    .navbar-toggler {
      border: none;
      padding: 0.5rem;
      transition: all 0.3s ease;
    }
    
    .navbar-toggler:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(255,255,255,0.25);
    }
    
    .navbar-toggler-icon {
      transition: all 0.3s ease;
    }
    
    .navbar-toggler:hover .navbar-toggler-icon {
      transform: scale(1.1);
    }
    
    /* Ajustes para dispositivos móviles */
    @media (max-width: 992px) {
      .navbar-collapse {
        background-color: rgba(0, 0, 32, 0.95);
        padding: 1rem;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        max-height: calc(100vh - 70px);
        overflow-y: auto;
      }
      
      .navbar-nav .nav-link {
        padding: 0.75rem 1rem !important;
        border-bottom: 1px solid rgba(255,255,255,0.1);
      }
      
      .navbar-nav .nav-link:last-child {
        border-bottom: none;
      }
      
      .navbar-nav .nav-link::after {
        display: none;
      }
      
      .navbar-nav .active > .nav-link,
      .navbar-nav .nav-link.active {
        background-color: rgba(255,255,255,0.1);
        border-radius: 5px;
      }
    }
    
    /* Estilos para dropdown menus */
    .dropdown-menu {
      background-color: rgba(0, 0, 32, 0.95);
      border: none;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      padding: 0.5rem;
      margin-top: 0.5rem;
      border-top: 2px solid #ffffff;
    }
    
    .dropdown-item {
      color: #ffffff;
      padding: 0.75rem 1.25rem;
      font-weight: 500;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    
    .dropdown-item:hover, .dropdown-item:focus {
      background-color: rgba(255,255,255,0.1);
      color: #ffffff;
      transform: translateX(5px);
    }
    
    /* Animación para el menú desplegable */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .dropdown-menu.show {
      animation: fadeIn 0.3s ease forwards;
    }
    
    /* Estilos para el contenedor principal */
    .main-container {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
    
    /* Estilos para el usuario logueado */
    .user-avatar {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: rgba(255,255,255,0.2);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-right: 8px;
      font-size: 16px;
    }
    
    .user-menu {
      display: flex;
      align-items: center;
    }
    
    .user-role {
      display: inline-block;
      font-size: 0.8rem;
      background-color: rgba(255,255,255,0.2);
      padding: 2px 8px;
      border-radius: 10px;
      margin-left: 8px;
    }
  </style>
</head>

<body>
  <!-- Barra de navegación principal -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <!-- Logo y nombre de la empresa -->
      <a class="navbar-brand" href="index.php">
        <img src="estilos/fusion.jpeg" height="50" width="50" class="mr-2" alt="Logo de FusionSigma">
        <b>FusionSigma</b>
      </a>
      
      <!-- Botón para menú móvil -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Contenido del menú -->
      <div class="collapse navbar-collapse" id="navbarMain">
        <?php
          // Invocamos el archivo con la conexión a la base de datos
          require_once('gest/conexion.php');
          // Invocamos el archivo menu.inc con la función que contiene las opciones de menú
          require_once('gest/menu.inc');
          // Ejecutamos la función que incluye el menú
          principal();
          
          // Verificar si hay una sesión activa
          if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
            // Si hay sesión, mostrar información del usuario y botón de cerrar sesión
            echo '<ul class="navbar-nav ml-auto">';
            echo '<li class="nav-item dropdown">';
            echo '<a class="nav-link dropdown-toggle user-menu" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            echo '<div class="user-avatar"><i class="fas fa-user"></i></div>';
            echo $_SESSION['nombre'] . ' <span class="user-role">' . $_SESSION['rol'] . '</span>';
            echo '</a>';
            echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">';
            echo '<a class="dropdown-item" href="area_restringida.php"><i class="fas fa-tachometer-alt mr-2"></i> Panel de Control</a>';
            echo '<div class="dropdown-divider"></div>';
            echo '<a class="dropdown-item" href="cerrar_sesion.php"><i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión</a>';
            echo '</div>';
            echo '</li>';
            echo '</ul>';
          } else {
            // Si no hay sesión, mostrar botón de entrar
            echo '<ul class="navbar-nav ml-auto">';
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-1"></i> ENTRAR</a>';
            echo '</li>';
            echo '</ul>';
          }
        ?>
      </div>
    </div>
  </nav>
  
  <!-- Contenedor principal para el contenido de la página -->
  <div class="main-container">
    <!-- El contenido específico de cada página irá aquí -->