<?php  
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
    include 'includes/header.html';  
    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoria</h1>
       	<?php 
       		if ($chequeo){ 
       	?>
       		<div class="alert alert-succes">
       		Categoria agregada correctamente
       		</div>

       	<?php
       		} else{ 
       	?>
       		<div class="alert alert-danger">
       		No se pudo agregar la categoría
       		</div>

       	<?php 
       	} 
       	?>
        	
        

    </main>

<?php  include 'includes/footer.php'; 
//agregar enlace agregar a Marcas y a usuarios ?>