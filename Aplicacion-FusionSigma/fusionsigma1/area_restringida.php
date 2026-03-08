<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: login.php");
    exit;
}

// Verificar si el usuario es uno de los 5 empleados autorizados (IDs del 1 al 5)
if (!isset($_SESSION['id']) || $_SESSION['id'] < 1 || $_SESSION['id'] > 5) {
    // Cerrar sesión si el usuario no está autorizado
    session_unset();
    session_destroy();
    header("Location: login.php?error=2");
    exit;
}

// Incluir el encabezado
include("marcosup.php");
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <h4><i class="fas fa-check-circle"></i> Acceso Exitoso</h4>
                <p>Bienvenido/a, <?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?> (<?php echo $_SESSION['rol']; ?>)</p>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-user"></i> Información de Usuario</h5>
                </div>
                <div class="card-body">
                    <p><strong>ID:</strong> <?php echo $_SESSION['id']; ?></p>
                    <p><strong>Nombre:</strong> <?php echo $_SESSION['nombre']; ?></p>
                    <p><strong>Apellido:</strong> <?php echo $_SESSION['apellido']; ?></p>
                    <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
                    <p><strong>Rol:</strong> <?php echo $_SESSION['rol']; ?></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-cogs"></i> Panel de Control</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <a href="T-cliente.php" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-users"></i> Gestión de Clientes
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="T-proyecto.php" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-project-diagram"></i> Gestión de Proyectos
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="T-tarea.php" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-tasks"></i> Gestión de Tareas
                            </a>
                        </div>
                        
                        <?php if ($_SESSION['rol'] == 'CEO' || $_SESSION['rol'] == 'CTO'): ?>
                        <div class="col-md-4 mb-3">
                            <a href="T-empleado.php" class="btn btn-outline-danger btn-block">
                                <i class="fas fa-user-tie"></i> Gestión de Empleados
                            </a>
                        </div>
                        <?php endif; ?>
                        
                        <div class="col-md-4 mb-3">
                            <a href="reportes.php" class="btn btn-outline-success btn-block">
                                <i class="fas fa-chart-bar"></i> Reportes
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="cerrar_sesion.php" class="btn btn-outline-dark btn-block">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Incluir el pie de página
include("marcoinf.php");
?>
