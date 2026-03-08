<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
	
	// Procesar el formulario cuando se envía
	$mensaje_enviado = false;
	$error_mensaje = false;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Recoger los datos del formulario
		$nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
		$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
		$asunto = isset($_POST['asunto']) ? htmlspecialchars(trim($_POST['asunto'])) : '';
		$mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : '';
		
		// Validar los datos
		if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
			$error_mensaje = "Por favor, complete todos los campos.";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error_mensaje = "Por favor, ingrese un email válido.";
		} else {
			// Configurar el correo
			$destinatario = "fusionsigma1@gmail.com";
			$asunto_email = "Contacto desde web: " . $asunto;
			
			// Construir el cuerpo del mensaje
			$cuerpo_mensaje = "Nombre: " . $nombre . "\n";
			$cuerpo_mensaje .= "Email: " . $email . "\n";
			$cuerpo_mensaje .= "Asunto: " . $asunto . "\n\n";
			$cuerpo_mensaje .= "Mensaje:\n" . $mensaje . "\n";
			
			// Cabeceras del correo
			$cabeceras = "From: " . $email . "\r\n";
			$cabeceras .= "Reply-To: " . $email . "\r\n";
			$cabeceras .= "X-Mailer: PHP/" . phpversion();
			
			// Enviar el correo
			if (mail($destinatario, $asunto_email, $cuerpo_mensaje, $cabeceras)) {
				$mensaje_enviado = true;
				
				// Registrar el contacto en la base de datos (opcional)
				if (isset($c) && $c) { // Verificar si existe la conexión a la base de datos
					$fecha_actual = date('Y-m-d H:i:s');
					$ip_usuario = $_SERVER['REMOTE_ADDR'];
					$sql = "INSERT INTO contactos (nombre, email, asunto, mensaje, fecha, ip) 
							VALUES ('$nombre', '$email', '$asunto', '$mensaje', '$fecha_actual', '$ip_usuario')";
					mysqli_query($c, $sql);
				}
			} else {
				$error_mensaje = "Hubo un problema al enviar el mensaje. Por favor, inténtelo de nuevo más tarde.";
			}
		}
	}
	// Fin del código PHP
?>
<nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)); background-position: top left; background-size: 100%; background-repeat: repeat;">
  <span class="navbar-text text-left text-dark"><hr><b>Contacto</b></span>
</nav>
<div class="py-5" style="background-color: #F8F8FF; background-position: top left; background-size: 100%; background-repeat: repeat; min-height: 700px;">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-12">
        <h1 class="text-center" style="color: #63367e; font-weight: 700; margin-bottom: 30px;">Contacta con FusionSigma</h1>
        <hr style="width: 50%; margin: 0 auto 40px; border-top: 3px solid #63367e;">
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 col-md-6 mb-4">
        <div class="card shadow-sm h-100" style="border-top: 4px solid #63367e; border-radius: 8px;">
          <div class="card-body">
            <h2 style="color: #63367e; font-weight: 600; margin-bottom: 20px;">Información de Contacto</h2>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-building mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">FusionSigma</h5>
                <p class="text-muted mb-0">Sociedad Limitada (S.L.) - CIF: F1234567X</p>
              </div>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-map-marker-alt mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Dirección</h5>
                <p class="text-muted mb-0">Avda. de la Innovación, 15<br>
                Autovía del Mediterráneo (A-7). Salida 460<br>
                CP 04131 Almería</p>
              </div>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-laptop-code mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Actividad</h5>
                <p class="text-muted mb-0">Desarrollo de Bases de Datos Personalizadas<br>y Gestión en la nube</p>
              </div>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-users mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Equipo</h5>
                <p class="text-muted mb-0">22 profesionales a tu servicio</p>
              </div>
            </div>
            
            <hr>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-phone-alt mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Teléfono</h5>
                <p class="mb-0"><a href="tel:+34613025813" style="color: #4a2861; text-decoration: none; font-weight: 500;">613 025 813</a></p>
              </div>
            </div>
            
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-envelope mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Email</h5>
                <p class="mb-0"><a href="mailto:fusionsigma1@gmail.com" style="color: #4a2861; text-decoration: none; font-weight: 500;">fusionsigma1@gmail.com</a></p>
              </div>
            </div>
            
            <div class="d-flex align-items-center">
              <i class="fas fa-globe mr-3" style="font-size: 1.5rem; color: #63367e; width: 30px;"></i>
              <div>
                <h5 class="mb-0">Web</h5>
                <p class="mb-0"><a href="https://www.fusionsigma.com" target="_blank" style="color: #4a2861; text-decoration: none; font-weight: 500;">www.FusionSigma.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6 mb-4">
        <div class="card shadow-sm h-100" style="border-top: 4px solid #63367e; border-radius: 8px;">
          <div class="card-body p-0">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.3636747254814!2d-2.4184833!3d36.8408138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9e4b06f3890f%3A0x5f0f6e9e4e39c6f3!2sAutov%C3%ADa%20del%20Mediterr%C3%A1neo%2C%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1651234567890!5m2!1ses!2ses" 
              width="100%" 
              height="450" 
              style="border:0; border-radius: 0 0 8px 8px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow-sm" style="border-top: 4px solid #63367e; border-radius: 8px;">
          <div class="card-body">
            <h2 style="color: #63367e; font-weight: 600; margin-bottom: 20px;">Envíanos un mensaje</h2>
            
            <?php if ($mensaje_enviado): ?>
              <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> ¡Gracias por contactarnos! Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo lo antes posible.
              </div>
            <?php elseif ($error_mensaje): ?>
              <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error_mensaje; ?>
              </div>
            <?php endif; ?>
            
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nombre" class="form-label">Nombre *</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
              </div>
              
              <div class="mb-3">
                <label for="asunto" class="form-label">Asunto *</label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto del mensaje" required value="<?php echo isset($_POST['asunto']) ? htmlspecialchars($_POST['asunto']) : ''; ?>">
              </div>
              
              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje *</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required><?php echo isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-lg" style="background-color: #63367e; color: white; padding: 10px 30px;">Enviar mensaje</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
	//Iniciamos código PHP
	//Cargar el marco inferior
	require_once('marcoinf.php');
	// Fin del código PHP
?>
