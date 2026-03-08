<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
		  <li class="nav-item text-white"> <a class="nav-link" href="base.php">Base</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="T-cliente.php">Clientes</a>
              <a class="dropdown-item" href="T-empleado.php">Empleados</a>
              <a class="dropdown-item" href="T-proyecto.php">Proyectos</a>
              <a class="dropdown-item" href="T-tarea.php">Tareas</a>
            </div>
          </li>
          
  

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="V-vw_empleadosportarea.php">vw_empleadosportarea</a>
              <a class="dropdown-item" href="V-vw_proyectosactivos.php">vw_proyectosactivos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="V-vw_proyectosporcliente.php">vw_proyectosporcliente</a>
              <a class="dropdown-item" href="V-vw_resumenproyectostareas.php">vw_resumenproyectostareas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="V-vw_tareaspendientesporempleado.php">vw_tareaspendientesporempleado</a>
              <a class="dropdown-item" href="V-vw_tareasporproyecto.php">vw_tareasporproyecto</a>
            </div>
          </li>

<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				ALTAS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="A-cliente_Formulario.php">Alta_Clientes</a>
              <a class="dropdown-item" href="A-empleado_Formulario.php">Alta_Empleados</a>
              <a class="dropdown-item" href="A-proyecto_Formulario.php">Alta_Proyectos</a>
              <a class="dropdown-item" href="A-tarea_Formulario.php">Alta_Tareas</a>
            
            </div>
          </li>






          <li class="nav-item"> <a class="nav-link" href="servicios.php">Servicios</a> </li>
          <li class="nav-item"> <a class="nav-link" href="contacto.php">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php">Ayuda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
         
        </ul>
          ';
		 
}
################################################
?>
