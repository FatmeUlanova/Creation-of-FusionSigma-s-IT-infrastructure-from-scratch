<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
	// Fin del código PHP
?>

<style>
/* Estilos para el sistema de ayuda */
:root {
  --primary: #63367e;
  --primary-dark: #4a2861;
  --primary-light: #8a5ca3;
  --secondary: #e6d7b9;
  --accent: #4f70ce;
  --text-light: #f3f3f3;
  --text-dark: #333;
  --background: #F8F8FF;
  --card-bg: rgba(255, 255, 255, 0.9);
  --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  --transition: all 0.3s ease;
}

.help-page {
  background-color: var(--background);
  min-height: 100vh;
  position: relative;
}

.help-page::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('imagenes/pattern-bg.jpg');
  background-size: cover;
  background-position: center;
  opacity: 0.05;
  z-index: 0;
}

.help-header {
  background: linear-gradient(135deg, var(--primary), var(--primary-dark));
  color: var(--text-light);
  padding: 3rem 0;
  position: relative;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  z-index: 1;
  margin-bottom: 3rem;
}

.help-header::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
  transform: rotate(30deg);
  z-index: -1;
}

.help-title {
  font-size: 3.5rem;
  font-weight: 800;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  position: relative;
  display: inline-block;
}

.help-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 80px;
  height: 4px;
  background: var(--secondary);
  border-radius: 2px;
}

.help-subtitle {
  font-size: 1.5rem;
  font-weight: 300;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0.9;
}

/* Estilos para las tarjetas de ayuda */
.help-card {
  background: var(--card-bg);
  border-radius: 15px;
  overflow: hidden;
  box-shadow: var(--card-shadow);
  transition: var(--transition);
  margin-bottom: 30px;
  position: relative;
  z-index: 1;
  height: 100%;
}

.help-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.help-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(to right, var(--primary), var(--primary-light));
  z-index: 2;
}

.help-card-body {
  padding: 2rem;
}

.help-card-icon {
  font-size: 3rem;
  color: var(--primary);
  margin-bottom: 1.5rem;
  transition: var(--transition);
}

.help-card:hover .help-card-icon {
  transform: scale(1.1) rotate(5deg);
  color: var(--primary-light);
}

.help-card-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: var(--primary-dark);
  position: relative;
  padding-bottom: 0.5rem;
}

.help-card-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 3px;
  background: var(--secondary);
  border-radius: 2px;
}

.help-card-text {
  color: var(--text-dark);
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.help-card-link {
  display: inline-block;
  padding: 0.8rem 1.5rem;
  background: linear-gradient(45deg, var(--primary), var(--primary-light));
  color: var(--text-light);
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: var(--transition);
  border: 2px solid transparent;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.help-card-link:hover {
  background: transparent;
  border-color: var(--primary);
  color: var(--primary);
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  text-decoration: none;
}

/* Estilos para la barra lateral de navegación */
.help-sidebar {
  background: var(--card-bg);
  border-radius: 15px;
  padding: 2rem;
  box-shadow: var(--card-shadow);
  position: sticky;
  top: 2rem;
  z-index: 10;
}

.help-sidebar-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  padding-bottom: 0.5rem;
  border-bottom: 3px solid var(--secondary);
}

.help-nav {
  list-style: none;
  padding: 0;
  margin: 0;
}

.help-nav-item {
  margin-bottom: 0.5rem;
}

.help-nav-link {
  display: block;
  padding: 0.8rem 1rem;
  color: var(--text-dark);
  text-decoration: none;
  border-radius: 8px;
  transition: var(--transition);
  font-weight: 500;
}

.help-nav-link:hover, .help-nav-link.active {
  background-color: rgba(99, 54, 126, 0.1);
  color: var(--primary);
  padding-left: 1.5rem;
}

.help-nav-link i {
  margin-right: 10px;
  color: var(--primary);
}

/* Estilos para las secciones de contenido */
.help-content {
  background: var(--card-bg);
  border-radius: 15px;
  padding: 2.5rem;
  box-shadow: var(--card-shadow);
  margin-bottom: 2rem;
}

.help-section {
  margin-bottom: 3rem;
}

.help-section:last-child {
  margin-bottom: 0;
}

.help-section-title {
  font-size: 2rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  padding-bottom: 0.5rem;
  border-bottom: 3px solid var(--secondary);
}

.help-section-subtitle {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--primary);
  margin: 2rem 0 1rem;
}

.help-text {
  color: var(--text-dark);
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 1.5rem;
}

.help-image {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  margin: 1.5rem 0;
}

.help-tip {
  background-color: rgba(79, 112, 206, 0.1);
  border-left: 4px solid var(--accent);
  padding: 1.5rem;
  border-radius: 0 10px 10px 0;
  margin: 1.5rem 0;
}

.help-tip-title {
  font-weight: 700;
  color: var(--accent);
  margin-bottom: 0.5rem;
  display: flex;
  align-items: center;
}

.help-tip-title i {
  margin-right: 10px;
}

.help-warning {
  background-color: rgba(255, 193, 7, 0.1);
  border-left: 4px solid #ffc107;
  padding: 1.5rem;
  border-radius: 0 10px 10px 0;
  margin: 1.5rem 0;
}

.help-warning-title {
  font-weight: 700;
  color: #e6a800;
  margin-bottom: 0.5rem;
  display: flex;
  align-items: center;
}

.help-warning-title i {
  margin-right: 10px;
}

/* Estilos para las preguntas frecuentes */
.faq-item {
  margin-bottom: 1.5rem;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 1.5rem;
}

.faq-question {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--primary-dark);
  margin-bottom: 0.8rem;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.faq-question i {
  transition: var(--transition);
}

.faq-question.active i {
  transform: rotate(180deg);
}

.faq-answer {
  display: none;
  padding-left: 1rem;
  border-left: 3px solid var(--secondary);
}

.faq-answer.show {
  display: block;
}

/* Estilos para los recursos descargables */
.resource-item {
  display: flex;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.5);
  padding: 1.5rem;
  border-radius: 10px;
  margin-bottom: 1.5rem;
  transition: var(--transition);
}

.resource-item:hover {
  background-color: rgba(255, 255, 255, 0.8);
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.resource-icon {
  font-size: 2.5rem;
  color: var(--primary);
  margin-right: 1.5rem;
}

.resource-info {
  flex: 1;
}

.resource-title {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--primary-dark);
  margin-bottom: 0.3rem;
}

.resource-description {
  color: var(--text-dark);
  font-size: 0.9rem;
  margin-bottom: 0.5rem;
}

.resource-meta {
  font-size: 0.8rem;
  color: rgba(0, 0, 0, 0.5);
}

.resource-download {
  padding: 0.5rem 1rem;
  background: linear-gradient(45deg, var(--primary), var(--primary-light));
  color: var(--text-light);
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: var(--transition);
  border: 2px solid transparent;
  font-size: 0.9rem;
}

.resource-download:hover {
  background: transparent;
  border-color: var(--primary);
  color: var(--primary);
  text-decoration: none;
}

/* Estilos para la búsqueda */
.help-search {
  position: relative;
  margin-bottom: 2rem;
}

.help-search-input {
  width: 100%;
  padding: 1rem 1.5rem;
  padding-right: 3rem;
  border: none;
  border-radius: 50px;
  background-color: white;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  font-size: 1rem;
  transition: var(--transition);
}

.help-search-input:focus {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
  outline: none;
}

.help-search-button {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: var(--primary);
  font-size: 1.2rem;
  cursor: pointer;
  transition: var(--transition);
}

.help-search-button:hover {
  color: var(--primary-light);
}

/* Estilos para los videos tutoriales */
.video-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  margin: 2rem 0;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Animaciones */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fadeInUp {
  animation: fadeInUp 0.8s ease forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }

/* Responsive */
@media (max-width: 992px) {
  .help-title {
    font-size: 2.8rem;
  }
  
  .help-subtitle {
    font-size: 1.3rem;
  }
  
  .help-sidebar {
    position: static;
    margin-bottom: 2rem;
  }
}

@media (max-width: 768px) {
  .help-title {
    font-size: 2.2rem;
  }
  
  .help-subtitle {
    font-size: 1.1rem;
  }
  
  .help-content {
    padding: 1.5rem;
  }
  
  .help-section-title {
    font-size: 1.8rem;
  }
  
  .help-section-subtitle {
    font-size: 1.3rem;
  }
  
  .help-text {
    font-size: 1rem;
  }
}
</style>

<div class="help-page">
  <!-- Encabezado de la página de ayuda -->
  <div class="help-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto text-center">
          <h1 class="help-title animate-fadeInUp">Centro de Ayuda</h1>
          <p class="help-subtitle animate-fadeInUp delay-1">
            Bienvenido al centro de ayuda de FusionSigma. Aquí encontrará toda la información necesaria para utilizar nuestra aplicación de gestión de bases de datos en la nube.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Barra de búsqueda -->
      <div class="col-lg-8 col-md-10 mx-auto mb-4">
        <div class="help-search animate-fadeInUp">
          <input type="text" class="help-search-input" placeholder="Buscar en la ayuda...">
          <button class="help-search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Tarjetas de acceso rápido -->
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-1">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-book"></i>
            </div>
            <h3 class="help-card-title">Guías de Usuario</h3>
            <p class="help-card-text">
              Manuales detallados sobre cómo utilizar todas las funciones de FusionSigma, desde la configuración inicial hasta operaciones avanzadas.
            </p>
            <a href="#guias" class="help-card-link">Ver guías</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-2">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-video"></i>
            </div>
            <h3 class="help-card-title">Tutoriales en Video</h3>
            <p class="help-card-text">
              Aprenda visualmente con nuestros tutoriales paso a paso que muestran cómo realizar tareas específicas en la plataforma.
            </p>
            <a href="#videos" class="help-card-link">Ver tutoriales</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-3">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-question-circle"></i>
            </div>
            <h3 class="help-card-title">Preguntas Frecuentes</h3>
            <p class="help-card-text">
              Encuentre respuestas a las preguntas más comunes sobre la plataforma, funcionalidades y solución de problemas.
            </p>
            <a href="#faq" class="help-card-link">Ver FAQ</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-1">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-download"></i>
            </div>
            <h3 class="help-card-title">Recursos Descargables</h3>
            <p class="help-card-text">
              Descargue manuales en PDF, plantillas y otros recursos útiles para optimizar su experiencia con FusionSigma.
            </p>
            <a href="#recursos" class="help-card-link">Ver recursos</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-2">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-tools"></i>
            </div>
            <h3 class="help-card-title">Solución de Problemas</h3>
            <p class="help-card-text">
              Guías para resolver los problemas más comunes que pueden surgir durante el uso de la plataforma.
            </p>
            <a href="#problemas" class="help-card-link">Ver soluciones</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-3">
        <div class="help-card">
          <div class="help-card-body">
            <div class="help-card-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h3 class="help-card-title">Soporte Técnico</h3>
            <p class="help-card-text">
              ¿Necesita ayuda adicional? Contacte con nuestro equipo de soporte técnico para resolver cualquier incidencia.
            </p>
            <a href="#soporte" class="help-card-link">Contactar soporte</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <!-- Barra lateral de navegación -->
      <div class="col-lg-3 mb-4">
        <div class="help-sidebar">
          <h3 class="help-sidebar-title">Contenido</h3>
          <ul class="help-nav">
            <li class="help-nav-item">
              <a href="#inicio" class="help-nav-link active">
                <i class="fas fa-home"></i> Inicio
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#guias" class="help-nav-link">
                <i class="fas fa-book"></i> Guías de Usuario
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#videos" class="help-nav-link">
                <i class="fas fa-video"></i> Tutoriales en Video
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#faq" class="help-nav-link">
                <i class="fas fa-question-circle"></i> Preguntas Frecuentes
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#recursos" class="help-nav-link">
                <i class="fas fa-download"></i> Recursos Descargables
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#problemas" class="help-nav-link">
                <i class="fas fa-tools"></i> Solución de Problemas
              </a>
            </li>
            <li class="help-nav-item">
              <a href="#soporte" class="help-nav-link">
                <i class="fas fa-headset"></i> Soporte Técnico
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Contenido principal -->
      <div class="col-lg-9">
        <div class="help-content" id="inicio">
          <div class="help-section">
            <h2 class="help-section-title">Introducción a FusionSigma</h2>
            <p class="help-text">
              FusionSigma es una plataforma integral para la gestión de proyectos de bases de datos en la nube. Nuestra aplicación permite a los equipos de trabajo diseñar, implementar, optimizar y mantener bases de datos de manera eficiente y segura.
            </p>
            <p class="help-text">
              Con FusionSigma, puede gestionar clientes, empleados, proyectos y tareas relacionadas con sus servicios de bases de datos, todo desde una interfaz intuitiva y moderna.
            </p>
            
            <h3 class="help-section-subtitle">Características principales</h3>
            <ul class="help-text">
              <li><strong>Gestión de clientes:</strong> Registre y administre la información de sus clientes.</li>
              <li><strong>Gestión de empleados:</strong> Mantenga un registro de su equipo y asigne responsabilidades.</li>
              <li><strong>Gestión de proyectos:</strong> Cree y supervise proyectos de bases de datos.</li>
              <li><strong>Gestión de tareas:</strong> Divida los proyectos en tareas específicas y realice un seguimiento de su progreso.</li>
              <li><strong>Informes y estadísticas:</strong> Obtenga información valiosa sobre el rendimiento de sus proyectos.</li>
            </ul>
            
            <div class="help-tip">
              <div class="help-tip-title">
                <i class="fas fa-lightbulb"></i> Consejo
              </div>
              <p>
                Para aprovechar al máximo FusionSigma, recomendamos comenzar por configurar la información de su empresa y luego añadir clientes, empleados y proyectos en ese orden.
              </p>
            </div>
          </div>
        </div>

        <div class="help-content" id="guias">
          <div class="help-section">
            <h2 class="help-section-title">Guías de Usuario</h2>
            
            <h3 class="help-section-subtitle">Primeros pasos</h3>
            <p class="help-text">
              Para comenzar a utilizar FusionSigma, siga estos pasos iniciales:
            </p>
            <ol class="help-text">
              <li>Inicie sesión con sus credenciales proporcionadas por el administrador.</li>
              <li>Familiarícese con la interfaz de usuario y el menú de navegación.</li>
              <li>Configure la información de su empresa en la sección "Base".</li>
              <li>Comience a añadir clientes, empleados y proyectos según sea necesario.</li>
            </ol>
            
            <h3 class="help-section-subtitle">Gestión de Clientes</h3>
            <p class="help-text">
              La sección de clientes le permite registrar y administrar toda la información relacionada con sus clientes:
            </p>
            <ul class="help-text">
              <li>Para añadir un nuevo cliente, vaya a "ALTAS > Cliente" y complete el formulario.</li>
              <li>Puede ver todos los clientes registrados en "Tablas > cliente".</li>
              <li>Para editar o eliminar un cliente, utilice las opciones disponibles en la vista de tabla.</li>
            </ul>
            
            <div class="help-warning">
              <div class="help-warning-title">
                <i class="fas fa-exclamation-triangle"></i> Advertencia
              </div>
              <p>
                La eliminación de un cliente también eliminará todos los proyectos asociados a ese cliente. Asegúrese de que esta acción es necesaria antes de proceder.
              </p>
            </div>
            
            <h3 class="help-section-subtitle">Gestión de Empleados</h3>
            <p class="help-text">
              La sección de empleados le permite gestionar su equipo de trabajo:
            </p>
            <ul class="help-text">
              <li>Para añadir un nuevo empleado, vaya a "ALTAS > Empleado" y complete el formulario.</li>
              <li>Puede ver todos los empleados registrados en "Tablas > empleado".</li>
              <li>Para editar o eliminar un empleado, utilice las opciones disponibles en la vista de tabla.</li>
            </ul>
            
            <h3 class="help-section-subtitle">Gestión de Proyectos</h3>
            <p class="help-text">
              La sección de proyectos le permite crear y gestionar proyectos de bases de datos:
            </p>
            <ul class="help-text">
              <li>Para añadir un nuevo proyecto, vaya a "ALTAS > Proyecto" y complete el formulario.</li>
              <li>Asegúrese de seleccionar el cliente asociado al proyecto.</li>
              <li>Puede ver todos los proyectos registrados en "Tablas > proyecto".</li>
              <li>Para editar o eliminar un proyecto, utilice las opciones disponibles en la vista de tabla.</li>
            </ul>
            
            <h3 class="help-section-subtitle">Gestión de Tareas</h3>
            <p class="help-text">
              La sección de tareas le permite dividir los proyectos en tareas específicas:
            </p>
            <ul class="help-text">
              <li>Para añadir una nueva tarea, vaya a "ALTAS > Tarea" y complete el formulario.</li>
              <li>Seleccione el proyecto y el empleado responsable de la tarea.</li>
              <li>Puede ver todas las tareas registradas en "Tablas > tarea".</li>
              <li>Para editar o eliminar una tarea, utilice las opciones disponibles en la vista de tabla.</li>
            </ul>
            
            <div class="help-tip">
              <div class="help-tip-title">
                <i class="fas fa-lightbulb"></i> Consejo
              </div>
              <p>
                Utilice los estados de las tareas (Pendiente, En Progreso, Completada, Pausada) para mantener un seguimiento efectivo del progreso de sus proyectos.
              </p>
            </div>
          </div>
        </div>

        <div class="help-content" id="videos">
          <div class="help-section">
            <h2 class="help-section-title">Tutoriales en Video</h2>
            <p class="help-text">
              Aprenda visualmente con nuestros tutoriales paso a paso que muestran cómo utilizar las principales funciones de FusionSigma.
            </p>
            
            <h3 class="help-section-subtitle">Introducción a FusionSigma</h3>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/example1" title="Introducción a FusionSigma" allowfullscreen></iframe>
            </div>
            
            <h3 class="help-section-subtitle">Cómo gestionar clientes</h3>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/example2" title="Cómo gestionar clientes" allowfullscreen></iframe>
            </div>
            
            <h3 class="help-section-subtitle">Cómo crear y gestionar proyectos</h3>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/example3" title="Cómo crear y gestionar proyectos" allowfullscreen></iframe>
            </div>
            
            <h3 class="help-section-subtitle">Gestión de tareas y seguimiento</h3>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/example4" title="Gestión de tareas y seguimiento" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="help-content" id="faq">
          <div class="help-section">
            <h2 class="help-section-title">Preguntas Frecuentes</h2>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Cómo puedo cambiar mi contraseña? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                Para cambiar su contraseña, vaya a su perfil de usuario haciendo clic en su nombre en la esquina superior derecha. Luego seleccione "Cambiar contraseña" y siga las instrucciones.
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Puedo exportar los datos de mis proyectos? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                Sí, puede exportar los datos de sus proyectos en formato CSV o PDF. Para hacerlo, vaya a la vista de tabla del proyecto y haga clic en el botón "Exportar" en la parte superior de la tabla.
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Cómo puedo asignar múltiples empleados a una tarea? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                Actualmente, cada tarea solo puede tener un empleado responsable principal. Sin embargo, puede crear múltiples tareas relacionadas y asignarlas a diferentes empleados dentro del mismo proyecto.
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Es posible establecer recordatorios para las fechas límite de las tareas? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                Sí, puede configurar recordatorios para las fechas límite de las tareas. Vaya a la vista de detalle de la tarea y haga clic en "Configurar recordatorio". Puede elegir recibir notificaciones por correo electrónico o en la aplicación.
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Cómo puedo ver solo los proyectos activos? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                En la vista de tabla de proyectos, puede utilizar el filtro en la parte superior para mostrar solo los proyectos con estado "Activo". También puede crear vistas personalizadas desde el menú "Vistas".
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                ¿Puedo personalizar los campos de los formularios? <i class="fas fa-chevron-down"></i>
              </div>
              <div class="faq-answer">
                La personalización de campos está disponible para usuarios con permisos de administrador. Vaya a "Configuración > Personalización de campos" para añadir, editar o eliminar campos en los diferentes formularios.
              </div>
            </div>
          </div>
        </div>

        <div class="help-content" id="recursos">
          <div class="help-section">
            <h2 class="help-section-title">Recursos Descargables</h2>
            <p class="help-text">
              Descargue manuales, plantillas y otros recursos útiles para optimizar su experiencia con FusionSigma.
            </p>
            
            <div class="resource-item">
              <div class="resource-icon">
                <i class="fas fa-file-pdf"></i>
              </div>
              <div class="resource-info">
                <h4 class="resource-title">Manual de Usuario Completo</h4>
                <p class="resource-description">
                  Guía completa con todas las funcionalidades de FusionSigma explicadas en detalle.
                </p>
                <p class="resource-meta">PDF | 5.2 MB | Actualizado: 01/04/2025</p>
              </div>
              <a href="documentos/manual_usuario.pdf" class="resource-download">
                <i class="fas fa-download"></i> Descargar
              </a>
            </div>
            
            <div class="resource-item">
              <div class="resource-icon">
                <i class="fas fa-file-excel"></i>
              </div>
              <div class="resource-info">
                <h4 class="resource-title">Plantilla de Planificación de Proyectos</h4>
                <p class="resource-description">
                  Plantilla Excel para planificar proyectos antes de ingresarlos en el sistema.
                </p>
                <p class="resource-meta">XLSX | 1.8 MB | Actualizado: 15/03/2025</p>
              </div>
              <a href="documentos/plantilla_proyectos.xlsx" class="resource-download">
                <i class="fas fa-download"></i> Descargar
              </a>
            </div>
            
            <div class="resource-item">
              <div class="resource-icon">
                <i class="fas fa-file-word"></i>
              </div>
              <div class="resource-info">
                <h4 class="resource-title">Plantilla de Informe de Proyecto</h4>
                <p class="resource-description">
                  Documento Word para crear informes profesionales de proyectos completados.
                </p>
                <p class="resource-meta">DOCX | 2.3 MB | Actualizado: 20/03/2025</p>
              </div>
              <a href="documentos/plantilla_informe.docx" class="resource-download">
                <i class="fas fa-download"></i> Descargar
              </a>
            </div>
            
            <div class="resource-item">
              <div class="resource-icon">
                <i class="fas fa-file-pdf"></i>
              </div>
              <div class="resource-info">
                <h4 class="resource-title">Guía de Mejores Prácticas</h4>
                <p class="resource-description">
                  Recomendaciones y mejores prácticas para la gestión eficiente de proyectos de bases de datos.
                </p>
                <p class="resource-meta">PDF | 3.7 MB | Actualizado: 10/04/2025</p>
              </div>
              <a href="documentos/mejores_practicas.pdf" class="resource-download">
                <i class="fas fa-download"></i> Descargar
              </a>
            </div>
            
            <div class="resource-item">
              <div class="resource-icon">
                <i class="fas fa-file-powerpoint"></i>
              </div>
              <div class="resource-info">
                <h4 class="resource-title">Presentación de FusionSigma</h4>
                <p class="resource-description">
                  Presentación para explicar las capacidades de FusionSigma a nuevos usuarios o clientes.
                </p>
                <p class="resource-meta">PPTX | 8.5 MB | Actualizado: 05/04/2025</p>
              </div>
              <a href="documentos/presentacion.pptx" class="resource-download">
                <i class="fas fa-download"></i> Descargar
              </a>
            </div>
          </div>
        </div>

        <div class="help-content" id="problemas">
          <div class="help-section">
            <h2 class="help-section-title">Solución de Problemas</h2>
            <p class="help-text">
              Encuentre soluciones a los problemas más comunes que pueden surgir durante el uso de FusionSigma.
            </p>
            
            <h3 class="help-section-subtitle">Problemas de inicio de sesión</h3>
            <p class="help-text">
              Si tiene problemas para iniciar sesión en FusionSigma, intente lo siguiente:
            </p>
            <ul class="help-text">
              <li>Verifique que está introduciendo correctamente su nombre de usuario y contraseña.</li>
              <li>Compruebe que las mayúsculas y minúsculas son correctas.</li>
              <li>Borre la caché y las cookies de su navegador.</li>
              <li>Intente acceder desde otro navegador o dispositivo.</li>
              <li>Si ha olvidado su contraseña, utilice la opción "¿Olvidó su contraseña?" en la pantalla de inicio de sesión.</li>
            </ul>
            
            <h3 class="help-section-subtitle">Problemas al crear o editar registros</h3>
            <p class="help-text">
              Si experimenta problemas al crear o editar registros:
            </p>
            <ul class="help-text">
              <li>Asegúrese de que todos los campos obligatorios están completados.</li>
              <li>Verifique que los formatos de fecha son correctos (DD/MM/AAAA).</li>
              <li>Compruebe que no está utilizando caracteres especiales no permitidos.</li>
              <li>Si está editando un registro, asegúrese de que tiene los permisos necesarios.</li>
              <li>Intente refrescar la página y volver a intentarlo.</li>
            </ul>
            
            <h3 class="help-section-subtitle">Problemas de visualización</h3>
            <p class="help-text">
              Si tiene problemas con la visualización de la interfaz:
            </p>
            <ul class="help-text">
              <li>Asegúrese de que está utilizando un navegador compatible (Chrome, Firefox, Edge o Safari en sus versiones más recientes).</li>
              <li>Verifique que JavaScript está habilitado en su navegador.</li>
              <li>Intente ajustar el zoom de su navegador (Ctrl + o Ctrl -).</li>
              <li>Pruebe a acceder desde otro dispositivo para descartar problemas de hardware.</li>
            </ul>
            
            <div class="help-warning">
              <div class="help-warning-title">
                <i class="fas fa-exclamation-triangle"></i> Advertencia
              </div>
              <p>
                Si encuentra un error persistente que no puede resolver con estas sugerencias, contacte con nuestro equipo de soporte técnico proporcionando detalles sobre el problema y capturas de pantalla si es posible.
              </p>
            </div>
          </div>
        </div>

        <div class="help-content" id="soporte">
          <div class="help-section">
            <h2 class="help-section-title">Soporte Técnico</h2>
            <p class="help-text">
              Si necesita ayuda adicional, nuestro equipo de soporte técnico está disponible para asistirle.
            </p>
            
            <h3 class="help-section-subtitle">Contacto de soporte</h3>
            <p class="help-text">
              Puede contactar con nuestro equipo de soporte técnico a través de los siguientes medios:
            </p>
            <ul class="help-text">
              <li><strong>Correo electrónico:</strong> soporte@fusionsigma.com</li>
              <li><strong>Teléfono:</strong> +34 900 123 456 (Lunes a Viernes, 9:00 - 18:00)</li>
              <li><strong>Chat en vivo:</strong> Disponible en la esquina inferior derecha de la aplicación</li>
            </ul>
            
            <h3 class="help-section-subtitle">Horario de atención</h3>
            <p class="help-text">
              Nuestro equipo de soporte está disponible en el siguiente horario:
            </p>
            <ul class="help-text">
              <li><strong>Lunes a Viernes:</strong> 9:00 - 18:00 (CET)</li>
              <li><strong>Sábados:</strong> 10:00 - 14:00 (CET)</li>
              <li><strong>Domingos y festivos:</strong> Cerrado</li>
            </ul>
            
            <h3 class="help-section-subtitle">Tiempos de respuesta</h3>
            <p class="help-text">
              Nos comprometemos a responder a sus consultas en los siguientes plazos:
            </p>
            <ul class="help-text">
              <li><strong>Chat en vivo:</strong> Respuesta inmediata durante el horario de atención</li>
              <li><strong>Correo electrónico:</strong> Respuesta en un máximo de 24 horas laborables</li>
              <li><strong>Teléfono:</strong> Tiempo de espera máximo de 10 minutos</li>
            </ul>
            
            <div class="help-tip">
              <div class="help-tip-title">
                <i class="fas fa-lightbulb"></i> Consejo
              </div>
              <p>
                Para una resolución más rápida de su incidencia, proporcione la mayor cantidad de detalles posible, incluyendo capturas de pantalla, mensajes de error y los pasos para reproducir el problema.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script para la interactividad -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Funcionalidad para las preguntas frecuentes
  const faqQuestions = document.querySelectorAll('.faq-question');
  
  faqQuestions.forEach(question => {
    question.addEventListener('click', function() {
      const answer = this.nextElementSibling;
      const isActive = this.classList.contains('active');
      
      // Cerrar todas las respuestas abiertas
      document.querySelectorAll('.faq-answer').forEach(item => {
        item.classList.remove('show');
      });
      
      document.querySelectorAll('.faq-question').forEach(item => {
        item.classList.remove('active');
      });
      
      // Abrir la respuesta actual si no estaba abierta
      if (!isActive) {
        answer.classList.add('show');
        this.classList.add('active');
      }
    });
  });
  
  // Funcionalidad para la navegación
  const navLinks = document.querySelectorAll('.help-nav-link');
  
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      // Quitar la clase active de todos los enlaces
      navLinks.forEach(item => {
        item.classList.remove('active');
      });
      
      // Añadir la clase active al enlace actual
      this.classList.add('active');
      
      // Obtener el ID de la sección a la que se quiere navegar
      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
      
      // Desplazarse a la sección
      window.scrollTo({
        top: targetSection.offsetTop - 20,
        behavior: 'smooth'
      });
    });
  });
  
  // Funcionalidad para la búsqueda
  const searchInput = document.querySelector('.help-search-input');
  const searchButton = document.querySelector('.help-search-button');
  
  searchButton.addEventListener('click', function() {
    performSearch(searchInput.value);
  });
  
  searchInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      performSearch(searchInput.value);
    }
  });
  
  function performSearch(query) {
    if (query.trim() === '') return;
    
    alert('Función de búsqueda: Buscando "' + query + '"\n\nEsta funcionalidad se implementará en una futura actualización.');
    
    // Aquí iría la lógica real de búsqueda
    // Por ahora solo mostramos una alerta
  }
});
</script>

<?php
	//Iniciamos código PHP
	//Cargar el marco inferior
	require_once('marcoinf.php');
	// Fin del código PHP
?>