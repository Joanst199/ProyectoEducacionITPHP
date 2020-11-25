<?php  
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = agregarUsuario();
    include 'includes/header.html';  
    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo usuario</h1>
       	<?php 
       		if ($chequeo){ 
       	?>
       		<div class="alert alert-succes">
       		Usuario agregado correctamente
       		</div>

       	<?php
       		} else{ 
       	?>
       		<div class="alert alert-danger">
       		No se pudo agregar al usuario
       		</div>

       	<?php 
       	} 
       	?>
        	
        

    </main>

<?php  include 'includes/footer.php'; 