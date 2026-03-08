<?php
	require_once('marcosup.php');
	
?>
	<nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
	  <span class="navbar-text text-left text-dark"><hr><b>Formulario de alta</b></span>
	</nav>
    <div class="py-3 bg-info" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: repeat; height: 600px;">
      <div class="container">	  
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
				<h1 class="text-center text-primary">Formulario Alta de datos de Empleados</h1>
		   </div>		
		</div>	
		
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="A-cliente_Visor.php">
					<!-- Dato 1-->
					Nombre:<br>
					<input type="text" name="d1" size="10" value=""><br>
					<!-- Dato 2-->
					Email:<br>
					<input type="text" name="d2" size="30" value=""><br>
					<!-- Dato 3-->
					Telefono:<br>
					<input type="text" name="d3" size="20" value=""><br>
                    <!-- Dato 4-->
					Direccion:<br>
					<input type="text" name="d4" size="30" value=""><br>
					<!-- Dato 5-->
					Pais:<br>
					<input type="text" name="d5" size="20" value=""><br>
					
					<!-- Dato n-->
					
					<!-- Botones del Formulario -->					
					<hr>
					<input type="submit" value="ENVIAR">
					- 
					<input type="reset" value="LIMPIAR">
				</form>
          </div>           
        </div>
      </div>
    </div>

<?php
	require_once('marcoinf.php');
?>	
