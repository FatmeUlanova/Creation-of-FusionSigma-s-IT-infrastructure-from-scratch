<?php
	require_once('marcosup.php');
?>
<style>
/* Estilos para el formulario de empleados */
.form-container {
  background: linear-gradient(135deg, #8e2de2 0%, #4a00e0 100%);
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

.form-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.form-container::before {
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

.form-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 30px;
  text-align: center;
  color: white;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  position: relative;
}

.form-title::after {
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

.form-group {
  margin-bottom: 25px;
  position: relative;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-size: 1.1rem;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.9);
  transition: all 0.3s ease;
}

.form-control {
  width: 100%;
  padding: 15px 20px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.15);

  color: white;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
  background-color: rgba(255, 255, 255, 0.25);
  color: #FFFFFF;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  outline: none;
}

.form-control::placeholder {
  color: rgba(255, 255, 255, 0.6);
}

.btn-container {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 40px;
}

.btn {
  padding: 12px 30px;
  font-size: 1.1rem;
  font-weight: 600;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
}

.btn-submit {
  background: linear-gradient(45deg,rgb(0, 99, 5),rgb(51, 247, 67));
  color: white;
}

.btn-reset {
  background: linear-gradient(45deg,rgb(190, 13, 13),rgb(211, 61, 61));
  color: white;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.btn:active {
  transform: translateY(0);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}

.btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: all 0.6s ease;
}

.btn:hover::before {
  left: 100%;
}

/* Animación para el formulario */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animated {
  animation: fadeIn 0.8s ease forwards;
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }
.delay-4 { animation-delay: 0.8s; }
.delay-5 { animation-delay: 1s; }

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

/* Estilos para el selector de rol */
.select-wrapper {
  position: relative;
  width: 100%;
}

.select-wrapper::after {
  content: "\f107";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, 0.7);
  pointer-events: none;
}

.select-control {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 100%;
  padding: 15px 20px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.15);
  color: white;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.select-control:focus {
  background-color: rgba(255, 255, 255, 0.25);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  outline: none;
}

.select-control option {
  background-color: #4a00e0;
  color: white;
}

/* Estilos para la sección de información */
.info-section {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 15px;
  margin-bottom: 30px;
  border-left: 4px solid #f7b733;
}

.info-section p {
  margin: 0;
  font-size: 0.95rem;
}

.info-title {
  font-weight: 600;
  margin-bottom: 5px;
  color: #f7b733;
}

.role-info {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 10px;
}

.role-chip {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 5px 12px;
  font-size: 0.85rem;
  display: inline-flex;
  align-items: center;
}

.role-chip-count {
  background-color: #f7b733;
  color: #4a00e0;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 0.75rem;
  margin-left: 8px;
}
</style>

<div class="page-background">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="form-container">
          <div class="decoration decoration-1"></div>
          <div class="decoration decoration-2"></div>
          <div class="decoration decoration-3"></div>
          
          <h1 class="form-title animated">Registro de Empleados</h1>
          <p class="text-center text-white mb-4 animated delay-1">Complete el formulario para registrar un nuevo empleado en FusionSigma</p>
          
          <div class="info-section animated delay-1">
            <div class="info-title">Equipo Actual</div>
            <p>La empresa cuenta con un equipo de 22 profesionales distribuidos en las siguientes áreas:</p>
            <div class="role-info">
              <span class="role-chip">CEO <span class="role-chip-count">1</span></span>
              <span class="role-chip">CTO <span class="role-chip-count">1</span></span>
              <span class="role-chip">Desarrollador Web <span class="role-chip-count">1</span></span>
              <span class="role-chip">Admin. BD <span class="role-chip-count">15</span></span>
              <span class="role-chip">Seguridad <span class="role-chip-count">1</span></span>
              <span class="role-chip">Marketing <span class="role-chip-count">1</span></span>
              <span class="role-chip">RRHH <span class="role-chip-count">1</span></span>
              <span class="role-chip">Contabilidad <span class="role-chip-count">1</span></span>
            </div>
          </div>
          
          <form method="POST" action="A-empleado_Visor.php">
            <div class="form-group animated delay-1">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="d1" placeholder="Ingrese el nombre" required maxlength="50">
            </div>
            
            <div class="form-group animated delay-2">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="d2" placeholder="Ingrese el apellido" required maxlength="50">
            </div>
            
            <div class="form-group animated delay-3">
              <label for="email">Email Corporativo</label>
              <input type="email" class="form-control" id="email" name="d3" placeholder="nombre.apellido@fusionsigma.com" required maxlength="100">
            </div>
            
            <div class="form-group animated delay-4">
              <label for="rol">Rol</label>
              <div class="select-wrapper">
                <select class="select-control" id="rol" name="d4" required>
                  <option value="" disabled selected>Seleccione un rol</option>
                  <option value="CEO">CEO</option>
                  <option value="CTO">CTO (Director de Tecnología)</option>
                  <option value="Desarrollador Web">Desarrollador Web</option>
                  <option value="Administrador BD">Administrador de Bases de Datos</option>
                  <option value="Especialista Seguridad">Especialista en Seguridad Informática</option>
                  <option value="Marketing y Ventas">Responsable de Marketing y Ventas</option>
                  <option value="Recursos Humanos">Encargado de Recursos Humanos (HR)</option>
                  <option value="Contabilidad">Miembro de Contabilidad</option>
                </select>
              </div>
            </div>
            
            <div class="btn-container animated delay-5">
              <button type="submit" class="btn btn-submit">REGISTRAR</button>
              <button type="reset" class="btn btn-reset">LIMPIAR</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
	require_once('marcoinf.php');
?>