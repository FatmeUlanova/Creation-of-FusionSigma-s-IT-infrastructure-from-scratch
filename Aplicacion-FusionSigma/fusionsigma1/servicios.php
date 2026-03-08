<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
	// Fin del código PHP
?>

<style>
/* Estilos para la página de servicios */
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

.services-page {
  background-color: var(--background);
  min-height: 100vh;
  overflow: hidden;
  position: relative;
}

.services-page::before {
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

.services-header {
  background: linear-gradient(135deg, var(--primary), var(--primary-dark));
  color: var(--text-light);
  padding: 3rem 0;
  position: relative;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.services-header::before {
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

.services-title {
  font-size: 3.5rem;
  font-weight: 800;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  position: relative;
  display: inline-block;
}

.services-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 80px;
  height: 4px;
  background: var(--secondary);
  border-radius: 2px;
}

.services-subtitle {
  font-size: 1.5rem;
  font-weight: 300;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0.9;
}

/* Estilos para el carrusel mejorado */
.carousel-container {
  position: relative;
  margin-top: 3rem;
  margin-bottom: 3rem;
  z-index: 2;
}

.services-carousel {
  border-radius: 15px;
  overflow: hidden;
  box-shadow: var(--card-shadow);
}

.carousel-item {
  transition: transform 0.6s ease-in-out;
}

.carousel-image-container {
  background-color: #000;
  height: 700px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  position: relative;
}

.carousel-image {
  max-height: 100%;
  max-width: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.carousel-item:hover .carousel-image {
  transform: scale(1.03);
}

.carousel-caption {
  background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.4), transparent);
  border-radius: 0;
  padding: 2rem;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: left;
  transition: var(--transition);
}

.carousel-title {
  font-size: 2.8rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  color: var(--secondary);
}

.carousel-description {
  font-size: 1.5rem;
  font-weight: 400;
  max-width: 80%;
  line-height: 1.4;
  margin-bottom: 1rem;
}

.carousel-button {
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

.carousel-button:hover {
  background: transparent;
  border-color: var(--secondary);
  color: var(--secondary);
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  text-decoration: none;
}

/* Controles del carrusel */
.carousel-control-prev, .carousel-control-next {
  width: 5%;
  opacity: 0;
  transition: var(--transition);
}

.services-carousel:hover .carousel-control-prev,
.services-carousel:hover .carousel-control-next {
  opacity: 1;
}

.carousel-control-icon {
  background-color: var(--primary);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: var(--transition);
}

.carousel-control-prev:hover .carousel-control-icon,
.carousel-control-next:hover .carousel-control-icon {
  background-color: var(--primary-light);
  transform: scale(1.1);
}

/* Indicadores del carrusel */
.carousel-indicators {
  bottom: -50px;
}

.carousel-indicators li {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  margin: 0 5px;
  background-color: var(--primary);
  opacity: 0.5;
  transition: var(--transition);
}

.carousel-indicators li.active {
  background-color: var(--primary);
  opacity: 1;
  transform: scale(1.2);
}

/* Tarjetas de servicios */
.services-cards {
  padding: 4rem 0;
  position: relative;
  z-index: 2;
}

.service-card {
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

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.service-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(to right, var(--primary), var(--primary-light));
  z-index: 2;
}

.service-card-body {
  padding: 2rem;
}

.service-card-icon {
  font-size: 3rem;
  color: var(--primary);
  margin-bottom: 1.5rem;
  transition: var(--transition);
}

.service-card:hover .service-card-icon {
  transform: scale(1.1) rotate(5deg);
  color: var(--primary-light);
}

.service-card-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: var(--primary-dark);
  position: relative;
  padding-bottom: 0.5rem;
}

.service-card-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 3px;
  background: var(--secondary);
  border-radius: 2px;
}

.service-card-text {
  color: var(--text-dark);
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.service-card-link {
  display: inline-block;
  color: var(--primary);
  font-weight: 600;
  text-decoration: none;
  transition: var(--transition);
}

.service-card-link:hover {
  color: var(--primary-light);
  text-decoration: none;
  transform: translateX(5px);
}

.service-card-link i {
  margin-left: 5px;
  transition: var(--transition);
}

.service-card-link:hover i {
  transform: translateX(3px);
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
  .services-title {
    font-size: 2.8rem;
  }
  
  .services-subtitle {
    font-size: 1.3rem;
  }
  
  .carousel-title {
    font-size: 2.2rem;
  }
  
  .carousel-description {
    font-size: 1.2rem;
    max-width: 100%;
  }
  
  .carousel-image-container {
    height: 600px;
  }
}

@media (max-width: 768px) {
  .services-title {
    font-size: 2.2rem;
  }
  
  .services-subtitle {
    font-size: 1.1rem;
  }
  
  .carousel-title {
    font-size: 1.8rem;
  }
  
  .carousel-description {
    font-size: 1rem;
  }
  
  .carousel-image-container {
    height: 500px;
  }
  
  .carousel-button {
    padding: 0.6rem 1.2rem;
    font-size: 0.9rem;
  }
}

@media (max-width: 576px) {
  .carousel-image-container {
    height: 400px;
  }
  
  .carousel-caption {
    padding: 1.5rem;
  }
}
</style>

<div class="services-page">
  <!-- Encabezado de la página de servicios -->
  <div class="services-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto text-center">
          <h1 class="services-title animate-fadeInUp">Nuestros Servicios</h1>
          <p class="services-subtitle animate-fadeInUp delay-1">
            En FusionSigma ofrecemos soluciones integrales para la gestión, optimización y seguridad de sus bases de datos e infraestructuras tecnológicas.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Carrusel de servicios mejorado -->
  <div class="container carousel-container">
    <div id="servicesCarousel" class="carousel slide services-carousel animate-fadeInUp delay-2" data-ride="carousel" data-interval="5000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a1.jpg" alt="Diseño de arquitecturas de bases de datos">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Arquitecturas de Bases de Datos</h2>
            <p class="carousel-description">Diseñamos arquitecturas de bases de datos personalizadas que se adaptan perfectamente a las necesidades específicas de su negocio.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a2.jpg" alt="Optimización y tuning de bases de datos">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Optimización y Tuning</h2>
            <p class="carousel-description">Mejoramos el rendimiento de sus bases de datos mediante técnicas avanzadas de optimización y tuning.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a4.jpg" alt="Migración de bases de datos a la nube">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Migración a la Nube</h2>
            <p class="carousel-description">Facilitamos la transición de sus bases de datos a entornos cloud con mínimo impacto operativo.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a3.jpg" alt="Administración y mantenimiento de bases de datos">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Administración y Mantenimiento</h2>
            <p class="carousel-description">Gestionamos sus bases de datos para garantizar su disponibilidad, rendimiento y seguridad.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a5.jpg" alt="Gestión integral de infraestructuras en la nube">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Infraestructuras Cloud</h2>
            <p class="carousel-description">Ofrecemos soluciones integrales para la gestión de sus infraestructuras en entornos cloud.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a6.jpg" alt="Implementación de soluciones de seguridad para bases de datos">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Seguridad de Datos</h2>
            <p class="carousel-description">Implementamos soluciones robustas para proteger sus datos contra amenazas y vulnerabilidades.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="carousel-image-container">
            <img class="carousel-image" src="imagenes/a7.jpg" alt="Integración de bases de datos con aplicaciones empresariales">
          </div>
          <div class="carousel-caption">
            <h2 class="carousel-title">Integración de Sistemas</h2>
            <p class="carousel-description">Conectamos sus bases de datos con aplicaciones empresariales para un flujo de información óptimo.</p>
            <a href="#" class="carousel-button">Más información <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      
      <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
        <div class="carousel-control-icon">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
        <div class="carousel-control-icon">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Siguiente</span>
      </a>
      
      <ol class="carousel-indicators">
        <li data-target="#servicesCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#servicesCarousel" data-slide-to="1"></li>
        <li data-target="#servicesCarousel" data-slide-to="2"></li>
        <li data-target="#servicesCarousel" data-slide-to="3"></li>
        <li data-target="#servicesCarousel" data-slide-to="4"></li>
        <li data-target="#servicesCarousel" data-slide-to="5"></li>
        <li data-target="#servicesCarousel" data-slide-to="6"></li>
      </ol>
    </div>
  </div>

  <!-- Tarjetas de servicios destacados -->
  <div class="services-cards">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-1">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-database"></i>
              </div>
              <h3 class="service-card-title">Diseño de Bases de Datos</h3>
              <p class="service-card-text">
                Creamos arquitecturas de bases de datos eficientes y escalables que se adaptan a las necesidades específicas de su negocio, optimizando el rendimiento y la seguridad.
              </p>
              <a href="#" class="service-card-link">Explorar servicio <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-2">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-cloud-upload-alt"></i>
              </div>
              <h3 class="service-card-title">Migración a la Nube</h3>
              <p class="service-card-text">
                Facilitamos la transición de sus bases de datos a entornos cloud como AWS, Azure o Google Cloud, minimizando el tiempo de inactividad y los riesgos.
              </p>
              <a href="#" class="service-card-link">Explorar servicio <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-3">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3 class="service-card-title">Seguridad de Datos</h3>
              <p class="service-card-text">
                Implementamos soluciones de seguridad robustas para proteger sus datos contra amenazas, cumpliendo con normativas como GDPR, HIPAA o PCI DSS.
              </p>
              <a href="#" class="service-card-link">Explorar servicio <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-1">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              <h3 class="service-card-title">Optimización y Tuning</h3>
              <p class="service-card-text">
                Mejoramos el rendimiento de sus bases de datos mediante técnicas avanzadas de optimización, indexación y configuración de parámetros.
              </p>
              <a href="#" class="service-card-link">Explorar servicio <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-2">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-cogs"></i>
              </div>
              <h3 class="service-card-title">Administración y Mantenimiento</h3>
              <p class="service-card-text">
                Gestionamos sus bases de datos para garantizar su disponibilidad, rendimiento y seguridad, con monitorización 24/7 y respuesta rápida ante incidencias.
              </p>
              <a href="#" class="service-card-link">Explorar servicio <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-3">
          <div class="service-card">
            <div class="service-card-body">
              <div class="service-card-icon">
                <i class="fas fa-project-diagram"></i>
              </div>
              <h3 class="service-card-title">Integración de Sistemas</h3>
              <p class="service-card-text">
                Conectamos sus bases de datos con aplicaciones empresariales como CRM, ERP o sistemas de BI para un flujo de información óptimo y en tiempo real.
              </p>
              <a href="#" class="service-card-link">Expl