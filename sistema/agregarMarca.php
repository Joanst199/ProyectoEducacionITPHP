<?php  
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
    include 'includes/header.html';  
    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
       	<?php 
       		if ($chequeo){ 
       	?>
       		<div class="alert alert-succes">
       		Marca agregada correctamente
       		</div>

       	<?php
       		} else{ 
       	?>
       		<div class="alert alert-danger">
       		No se pudo agregar la marca
       		</div>

       	<?php 
       	} 
       	?>
        	
        

    </main>

<?php  include 'includes/footer.php'; 