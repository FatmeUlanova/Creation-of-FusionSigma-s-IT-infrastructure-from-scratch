<?php
// Iniciar sesión
session_start();

// Si ya está autenticado, redirigir al área restringida
if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
    header("Location: area_restringida.php");
    exit;
}

// Verificar si hay un mensaje de error
$mensaje_error = '';
if (isset($_GET['error'])) {
    $mensaje_error = 'Credenciales incorrectas. Por favor, inténtelo de nuevo.';
}

// Incluir el encabezado
include("marcosup.php");
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg" style="border-top: 4px solid var(--primary);">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-lock"></i> Acceso Restringido</h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($mensaje_error)): ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i> <?php echo $mensaje_error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <p class="text-center mb-4">Ingrese sus credenciales para acceder al sistema</p>
                    
                    <form action="verificar_login.php" method="POST">
                        <div class="form-group">
                            <label for="nombre"><i class="fas fa-user"></i> Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido"><i class="fas fa-user-tag"></i> Contraseña</label>
                            <input type="password" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="index.php" class="text-muted">
                        <i class="fas fa-arrow-left"></i> Volver a la página principal
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Incluir el pie de página
include("marcoinf.php");
?>