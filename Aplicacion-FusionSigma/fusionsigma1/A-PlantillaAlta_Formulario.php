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
				<h1 class="text-center text-primary">Formulario Alta de datos de --nombre de la Tabla--</h1>
		   </div>		
		</div>	
		
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="A-PlantillaAlta_Visor.php">
					<!-- Dato 1-->
					Dato 1:<br>
					<input type="text" name="d1" size="5" value=""><br>
					<!-- Dato 2-->
					Dato 2:<br>
					<input type="text" name="d2" size="20" value=""><br>
					<!-- Dato 3-->
					Dato 3:<br>
					<input type="text" name="d3" size="20" value=""><br>
					
					<br>
					<!-- Dato n-->
					Dato n:<br>
					<input type="text" name="dn" size="20" value=""><br>
					
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
