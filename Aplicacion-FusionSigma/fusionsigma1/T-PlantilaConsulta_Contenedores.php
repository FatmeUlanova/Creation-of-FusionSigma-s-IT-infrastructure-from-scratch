<?php
    // Inserta el marco superior 
	require_once('marcosup.php');
?> 
<nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
  <span class="navbar-text text-left text-dark"><hr><b>Consulta modo contenedores</b></span>
</nav>     
 	<div class="py-3 bg-info" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));	background-position: top left;	background-size: 100%;	background-repeat: repeat; height: 600px;">
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center text-primary">Consulta de --NOMBRE DE LA TABLA--</h1>
				</div>	
			</div>		
			<div class="row">
				<?php
					// Seleccionamos la tabla con la que vamos a trabajar
					$tabla="";// Escribir entre comillas el nombre de la tabla a listar
					
					// Establecemos la sentencia SQL de la Consulta a realizar
					$sentencia="select * from $tabla";
					
					// Recopilar las filas almacenadas en la tabla
					$resultado=mysqli_query($c,$sentencia);
					
					// Recorremos $resultado mostrando cada fila de la tabla
					while ($registro = mysqli_fetch_row($resultado)){
						// Construimos la entrada para cada fila de la tabla
						echo '<div class="rounded py-3 mx-1 my-1 col-3 border border-primary">';
							echo '<p>Dato 1:'.$registro[1].'</p>';
							echo '<p>Dato 2:'.$registro[0].'</p>';
							echo '<p>Dato 3:'.$registro[2].'</p>';
						echo '</div>';					
					}
				// Cerramos la conexión con la base de datos
				mysqli_close($c);			
				?>
			</div>
        </div>
    </div>
<?php
    // Inserta el marco inferior 
	require_once('marcoinf.php');
?>
