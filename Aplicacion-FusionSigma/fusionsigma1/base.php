<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
	// Fin del código PHP
?>

<style>
/* Estilos para la página base */
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

.base-header {
  background: linear-gradient(135deg, var(--primary), var(--primary-dark));
  color: var(--text-light);
  padding: 3rem 0;
  position: relative;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 3rem;
}

.base-header::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
  transform: rotate(30deg);
  z-index: 0;
}

.base-header-content {
  position: relative;
  z-index: 1;
}

.base-title {
  font-size: 3.5rem;
  font-weight: 800;
  margin-bottom: 1rem;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  position: relative;
  display: inline-block;
}

.base-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 80px;
  height: 4px;
  background: var(--secondary);
  border-radius: 2px;
}

.base-subtitle {
  font-size: 1.5rem;
  font-weight: 300;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0.9;
}

.base-content {
  padding: 3rem 0;
  background-color: var(--background);
  position: relative;
}

.base-content::before {
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

.base-section {
  margin-bottom: 4rem;
  position: relative;
  z-index: 1;
}

.base-section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  position: relative;
  padding-bottom: 0.5rem;
}

.base-section-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 3px;
  background: var(--secondary);
  border-radius: 2px;
}

.base-text {
  font-size: 1.1rem;
  line-height: 1.8;
  color: var(--text-dark);
  margin-bottom: 1.5rem;
}

.base-image-container {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  margin-bottom: 2rem;
  transition: all 0.5s ease;
}

.base-image-container:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.base-image {
  width: 100%;
  height: auto;
  transition: all 0.5s ease;
}

.base-image-container:hover .base-image {
  transform: scale(1.05);
}

.base-image-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
  padding: 2rem 1.5rem 1.5rem;
  color: white;
  transform: translateY(100%);
  transition: all 0.5s ease;
  opacity: 0;
}

.base-image-container:hover .base-image-overlay {
  transform: translateY(0);
  opacity: 1;
}

.base-image-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

.base-image-text {
  font-size: 0.9rem;
  opacity: 0.9;
}

.base-card {
  background: white;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  height: 100%;
  position: relative;
}

.base-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.base-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(to right, var(--primary), var(--primary-light));
  z-index: 1;
}

.base-card-icon {
  font-size: 3rem;
  color: var(--primary);
  margin-bottom: 1.5rem;
  transition: all 0.3s ease;
}

.base-card:hover .base-card-icon {
  transform: scale(1.1) rotate(5deg);
  color: var(--primary-light);
}

.base-card-body {
  padding: 2rem;
}

.base-card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1rem;
}

.base-card-text {
  color: var(--text-dark);
  margin-bottom: 1.5rem;
  line-height: 1.6;
}

.base-card-link {
  display: inline-block;
  padding: 0.8rem 1.5rem;
  background: linear-gradient(45deg, var(--primary), var(--primary-light));
  color: white;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.base-card-link:hover {
  background: transparent;
  border-color: var(--primary);
  color: var(--primary);
  text-decoration: none;
}

.base-stats {
  background: linear-gradient(135deg, var(--primary-dark), var(--primary));
  padding: 4rem 0;
  color: white;
  margin: 4rem 0;
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.base-stat-item {
  text-align: center;
  padding: 1.5rem;
}

.base-stat-number {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  background: linear-gradient(45deg, white, var(--secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.base-stat-text {
  font-size: 1.2rem;
  opacity: 0.9;
}

.base-cta {
  background: linear-gradient(135deg, var(--secondary-dark), var(--secondary));
  padding: 4rem 0;
  border-radius: 10px;
  margin: 4rem 0;
  position: relative;
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.base-cta::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
  transform: rotate(30deg);
  z-index: 0;
}

.base-cta-content {
  position: relative;
  z-index: 1;
  text-align: center;
}

.base-cta-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
}

.base-cta-text {
  font-size: 1.2rem;
  color: var(--text-dark);
  max-width: 800px;
  margin: 0 auto 2rem;
}

.base-cta-button {
  display: inline-block;
  padding: 1rem 2rem;
  background: linear-gradient(45deg, var(--primary), var(--primary-light));
  color: white;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1.2rem;
  text-decoration: none;
  transition: all 0.3s ease;
  border: 2px solid transparent;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.base-cta-button:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
  text-decoration: none;
  color: white;
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
  .base-title {
    font-size: 2.8rem;
  }
  
  .base-subtitle {
    font-size: 1.3rem;
  }
  
  .base-stat-number {
    font-size: 2.8rem;
  }
}

@media (max-width: 768px) {
  .base-title {
    font-size: 2.2rem;
  }
  
  .base-subtitle {
    font-size: 1.1rem;
  }
  
  .base-section-title {
    font-size: 1.8rem;
  }
  
  .base-stat-number {
    font-size: 2.2rem;
  }
  
  .base-stat-text {
    font-size: 1rem;
  }
  
  .base-cta-title {
    font-size: 2rem;
  }
}
</style>

<!-- Encabezado de la página -->
<div class="base-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 mx-auto text-center base-header-content">
        <h1 class="base-title animate-fadeInUp">FusionSigma S.L.</h1>
        <p class="base-subtitle animate-fadeInUp delay-1">
          Soluciones avanzadas de bases de datos y gestión en la nube para empresas innovadoras
        </p>
      </div>
    </div>
  </div>
</div>

<div class="base-content">
  <div class="container">
    <!-- Sección principal con imagen interactiva -->
    <div class="base-section">
      <div class="row align-items-center">
        <div class="col-lg-6 animate-fadeInUp">
          <h2 class="base-section-title">Bienvenido a nuestra plataforma interna</h2>
          <p class="base-text">
            FusionSigma es una empresa especializada en el desarrollo y gestión de bases de datos personalizadas, 
            análisis de información y soluciones de administración en la nube. Nuestra misión es transformar 
            los datos de su empresa en conocimiento accionable que impulse su crecimiento.
          </p>
          <p class="base-text">
            Esta aplicación interna está diseñada para facilitar la gestión integral de proyectos, 
            permitiendo a nuestro equipo consultar y actualizar información sobre clientes, 
            tareas, proyectos y los empleados asignados a cada uno de ellos.
          </p>
          <p class="base-text">
            Nuestro compromiso con la excelencia y la seguridad nos impulsa a proteger toda la información 
            crítica de nuestros clientes, implementando las mejores prácticas y tecnologías de vanguardia.
          </p>
        </div>
        <div class="col-lg-6 animate-fadeInUp delay-1">
          <div class="base-image-container">
            <img src="imagenes/Entrada.jpg" alt="Oficinas de FusionSigma" class="base-image">
            <div class="base-image-overlay">
              <h3 class="base-image-title">Nuestras instalaciones</h3>
              <p class="base-image-text">
                Contamos con instalaciones modernas equipadas con la última tecnología para ofrecer 
                soluciones de vanguardia a nuestros clientes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sección de servicios -->
    <div class="base-section">
      <h2 class="base-section-title">Nuestros servicios principales</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp">
          <div class="base-card">
            <div class="base-card-body">
              <div class="base-card-icon">
                <i class="fas fa-database"></i>
              </div>
              <h3 class="base-card-title">Desarrollo de bases de datos</h3>
              <p class="base-card-text">
                Diseñamos y desarrollamos bases de datos personalizadas que se adaptan 
                perfectamente a las necesidades específicas de su empresa, optimizando 
                el rendimiento y la seguridad.
              </p>
              <a href="servicios.php#databases" class="base-card-link">Más información</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-1">
          <div class="base-card">
            <div class="base-card-body">
              <div class="base-card-icon">
                <i class="fas fa-cloud"></i>
              </div>
              <h3 class="base-card-title">Soluciones en la nube</h3>
              <p class="base-card-text">
                Ofrecemos servicios de migración, administración y optimización de bases de datos 
                en la nube, garantizando accesibilidad, escalabilidad y seguridad.
              </p>
              <a href="servicios.php#cloud" class="base-card-link">Más información</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 animate-fadeInUp delay-2">
          <div class="base-card">
            <div class="base-card-body">
              <div class="base-card-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <h3 class="base-card-title">Análisis de datos</h3>
              <p class="base-card-text">
                Transformamos sus datos en información valiosa mediante análisis avanzados, 
                visualizaciones interactivas e informes personalizados que facilitan la toma de decisiones.
              </p>
              <a href="servicios.php#analytics" class="base-card-link">Más información</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sección de estadísticas -->
    <div class="base-stats animate-fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="base-stat-item">
              <div class="base-stat-number" id="stat-clients">0</div>
              <div class="base-stat-text">Clientes satisfechos</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="base-stat-item">
              <div class="base-stat-number" id="stat-projects">0</div>
              <div class="base-stat-text">Proyectos completados</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="base-stat-item">
              <div class="base-stat-number" id="stat-employees">0</div>
              <div class="base-stat-text">Profesionales</div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="base-stat-item">
              <div class="base-stat-number" id="stat-years">0</div>
              <div class="base-stat-text">Años de experiencia</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sección de características de la aplicación -->
    <div class="base-section">
      <h2 class="base-section-title">Características de nuestra aplicación interna</h2>
      <div class="row">
        <div class="col-md-6 animate-fadeInUp">
          <ul class="base-text">
            <li><strong>Gestión integral de clientes:</strong> Registro completo de información de clientes, historial de proyectos y comunicaciones.</li>
            <li><strong>Administración de proyectos:</strong> Seguimiento detallado del estado, plazos, recursos y presupuestos de cada proyecto.</li>
            <li><strong>Asignación de tareas:</strong> Sistema avanzado para asignar y monitorizar tareas específicas a cada miembro del equipo.</li>
            <li><strong>Gestión de recursos humanos:</strong> Control de la disponibilidad, habilidades y carga de trabajo de cada empleado.</li>
          </ul>
        </div>
        <div class="col-md-6 animate-fadeInUp delay-1">
          <ul class="base-text">
            <li><strong>Informes y estadísticas:</strong> Generación automática de informes detallados sobre el rendimiento de proyectos y equipos.</li>
            <li><strong>Calendario integrado:</strong> Visualización clara de plazos, reuniones y eventos importantes.</li>
            <li><strong>Sistema de notificaciones:</strong> Alertas automáticas sobre fechas límite, cambios en proyectos y nuevas asignaciones.</li>
            <li><strong>Seguridad avanzada:</strong> Protección de datos mediante encriptación, control de accesos y copias de seguridad automáticas.</li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Sección de llamada a la acción -->
    <div class="base-cta animate-fadeInUp">
      <div class="base-cta-content">
        <h2 class="base-cta-title">¿Listo para empezar a trabajar?</h2>
        <p class="base-cta-text">
          Accede a nuestra plataforma para gestionar proyectos, clientes y tareas de manera eficiente.
          Si necesitas ayuda, consulta nuestra sección de ayuda o contacta con el administrador del sistema.
        </p>
        <a href="ayuda.php" class="base-cta-button mr-3">Ver guía de uso</a>
        <a href="contacto.php" class="base-cta-button">Contactar soporte</a>
      </div>
    </div>
  </div>
</div>

<!-- Script para animaciones y contadores -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animación de contadores
  function animateCounter(elementId, finalValue, duration) {
    const element = document.getElementById(elementId);
    let startTime = null;
    const startValue = 0;
    
    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      const progress = Math.min((timestamp - startTime) / duration, 1);
      const currentValue = Math.floor(progress * (finalValue - startValue) + startValue);
      element.textContent = currentValue;
      
      if (progress < 1) {
        window.requestAnimationFrame(step);
      } else {
        element.textContent = finalValue;
      }
    }
    
    window.requestAnimationFrame(step);
  }
  
  // Función para verificar si un elemento está visible en la ventana
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Iniciar animación cuando el elemento sea visible
  function handleScroll() {
    const statsSection = document.querySelector('.base-stats');
    if (isElementInViewport(statsSection) && !statsSection.classList.contains('animated')) {
      statsSection.classList.add('animated');
      animateCounter('stat-clients', 150, 2000);
      animateCounter('stat-projects', 320, 2000);
      animateCounter('stat-employees', 22, 2000);
      animateCounter('stat-years', 12, 2000);
    }
  }
  
  // Verificar al cargar y al hacer scroll
  handleScroll();
  window.addEventListener('scroll', handleScroll);
  
  // Efecto de zoom en imagen al hacer hover en móviles
  const imageContainers = document.querySelectorAll('.base-image-container');
  
  if ('ontouchstart' in window) {
    imageContainers.forEach(container => {
      container.addEventListener('touchstart', function() {
        this.classList.toggle('touch-active');
        
        const overlay = this.querySelector('.base-image-overlay');
        if (this.classList.contains('touch-active')) {
          overlay.style.transform = 'translateY(0)';
          overlay.style.opacity = '1';
        } else {
          overlay.style.transform = 'translateY(100%)';
          overlay.style.opacity = '0';
        }
      });
    });
  }
});
</script>

<?php
	//Iniciamos código PHP
	//Cargar el marco inferior
	require_once('marcoinf.php');
	// Fin del código PHP
?>