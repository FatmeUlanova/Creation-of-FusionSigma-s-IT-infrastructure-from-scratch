<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome actualizado -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="estilos/ProyectoASIR.css">
  <link rel="icon" href="estilos/fusion.jpeg">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Meta tags para SEO -->
  <meta name="description" content="FusionSigma - Desarrollo de Bases de Datos Personalizadas y Gestión en la nube">
  <meta name="keywords" content="bases de datos, desarrollo, cloud, gestión, almería">
  <title>FusionSigma - Expertos en Bases de Datos</title>
  
  <!-- Estilos personalizados para el menú -->
  <style>
    /* Estilo para las letras del menú */
    .navbar-nav .nav-link {
      color: #ffffff !important; /* Blanco brillante */
      font-size: 1.2rem !important; /* Letras más grandes */
      font-weight: 600 !important; /* Letras más gruesas */
      text-shadow: 0 0 5px rgba(255,255,255,0.3); /* Efecto de brillo */
      padding: 0.5rem 1rem !important; /* Más espacio alrededor */
      transition: all 0.3s ease; /* Transición suave */
    }
    
    /* Efecto hover para los elementos del menú */
    .navbar-nav .nav-link:hover {
      color: #f8f9fa !important; /* Blanco más brillante al pasar el mouse */
      transform: translateY(-2px); /* Ligero movimiento hacia arriba */
      text-shadow: 0 0 8px rgba(255,255,255,0.5); /* Más brillo al pasar el mouse */
    }
    
    /* Estilo para el logo y nombre de la empresa */
    .navbar-brand {
      font-size: 1.8rem !important; /* Texto del logo más grande */
      font-weight: 700 !important; /* Más grueso */
      color: #ffffff !important; /* Blanco brillante */
      text-shadow: 0 0 10px rgba(255,255,255,0.4); /* Efecto de brillo */
    }
    
    /* Ajuste de altura de la barra de navegación */
    .navbar {
      min-height: 70px; /* Altura mínima aumentada */
      padding: 0.5rem 1rem; /* Padding ajustado */
    }
    
    /* Estilo para el elemento activo del menú */
    .navbar-nav .active > .nav-link {
      border-bottom: 2px solid #ffffff; /* Subrayado para el elemento activo */
    }
    
    /* Ajustes para dispositivos móviles */
    @media (max-width: 992px) {
      .navbar-collapse {
        background-color: rgba(0, 0, 32, 0.95); /* Fondo oscuro para el menú desplegable */
        padding: 1rem; /* Padding interno */
        border-radius: 0 0 10px 10px; /* Bordes redondeados */
      }
    }
  </style>
</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgb(0, 0, 0, 0.8)); background-position: top left; background-size: 100%; background-repeat: repeat;" id="1">
    <div class="container"> 
		<a class="navbar-brand text-white" href="https://www.fusionsigma.com" target="_blank">
			<i class="fa d-inline fa-lg">
				<img src="estilos/fusion.jpeg" height="60" width="60" class="mr-2" style="border-radius: 8px; box-shadow: 0 0 10px rgba(255,255,255,0.3);" title="Logo de FusionSigma">
			</i>
			<b>FusionSigma</b>
		</a> 
		<button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5" style="z-index: 1050;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar5">
<?php
	// Invocamos el archivo con la conexión a la base de datos
	require_once('gest/conexion.php');
	// Invocamos el archivo menu.inc con la función que contiene las opciones de menú
	require_once('gest/menu.inc');
	// Ejecutamos la función que incluye el menú
	principal();

?>
      </div>
    </div>
  </nav>
  <!-- ---------------------------- 
  <nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)); background-position: top left; background-size: 100%; background-repeat: repeat;">
    <span class="navbar-text text-left text-dark"><hr><b>Zona de Notificaciones</b></span>
  </nav>
  -->