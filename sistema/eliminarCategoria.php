<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
        $chequeo = eliminarCategoria();
    include 'includes/header.html';  
    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una categoria</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar la categoria.';
        if( $chequeo ){
            $clase = 'success';
            $mensaje = 'Categoria eliminada correctamente.';
        }
?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
        </div>


    </main>

<?php  include 'includes/footer.php';  ?>