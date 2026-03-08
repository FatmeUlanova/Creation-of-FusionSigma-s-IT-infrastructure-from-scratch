<?php
	require_once('marcosup.php');
?>
<style>
/* Estilos para el formulario */
.form-container {
  background: linear-gradient(135deg,rgb(163, 0, 22) 0%,rgb(251, 255, 7) 100%);
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
  box-shadow: 0 20px 40px rgba(52, 170, 224, 0.4);
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
  font-size: 1.2rem;
  font-weight: 700;
  color: #FFFFFF;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
  transition: all 0.3s ease;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

.form-control {
  width: 100%;
  padding: 15px 20px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.15);
  color: #FFFFFF;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
  background-color: rgba(3, 3, 3, 0.25);
  color:white;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  outline: none;
}

.form-control::placeholder {
  color: rgba(255, 255, 255, 0.5);
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
  background: linear-gradient(45deg,rgb(2, 88, 2),rgb(83, 255, 91));
  color: white;
}

.btn-reset {
  background: linear-gradient(45deg,rgb(214, 4, 4),rgb(255, 54, 39));
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
.delay-6 { animation-delay: 1.2s; }

/* Fondo de la página */
.page-background {
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  min-height: 100vh;
  padding: 40px 0;
}

/* Decoración */
.decoration {
  position: absolute;
  border-radius: 50%;
  background: rgba(230, 39, 230, 0.1);
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
</style>

<div class="page-background">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="form-container">
          <div class="decoration decoration-1"></div>
          <div class="decoration decoration-2"></div>
          <div class="decoration decoration-3"></div>
          
          <h1 class="form-title animated">Registro de Clientes</h1>
          <p class="text-center text-white mb-4 animated delay-1">Complete el formulario para registrar un nuevo cliente en FusionSigma</p>
          
          <form method="POST" action="A-cliente_Visor.php">
            <div class="form-group animated delay-1">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="d1" placeholder="Ingrese el nombre completo" required>
            </div>
            
            <div class="form-group animated delay-2">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="d2" placeholder="ejemplo@fusionsigma.com" required>
            </div>
            
            <div class="form-group animated delay-3">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="d3" placeholder="Ej: +34 612 345 678" required>
            </div>
            
            <div class="form-group animated delay-4">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" id="direccion" name="d4" placeholder="Calle, número, código postal, ciudad" required>
            </div>
            
            <div class="form-group animated delay-5">
              <label for="pais">País</label>
              <input type="text" class="form-control" id="pais" name="d5" placeholder="Ej: España" required>
            </div>
            
            <div class="btn-container animated delay-6">
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
