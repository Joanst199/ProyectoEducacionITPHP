<?php 
	$prdImagen = $_FILES ['prdImagen'];
/**
*Array con 5 elementos
*['name']
*['type']
*['tmp_name']
*['error']
*['size']
**/

echo '<pre>';
	print_r($prdImagen);
echo '</pre>';

### subida del archivo
	$ruta = 'productos/';
	$temp = $_FILES ['prdImagen']['tmp_name'];
	
	/*NOMBRE ORIGINAL DEL ARCHIVO
	
	$prdImagen = $_FILES ['prdImagen']['name'];
	
	*/

	## RENOMBRAR ARCHIVO
		#TIME().EXTENSION
	$path = pathinfo($_FILES ['prdImagen']['name']);
	$ext = $path['extension'];
	$prdImagen = time().'.'.$ext;
	
	##SUBIR PRODUCTO
	move_uploaded_file($temp, $ruta.$prdImagen );
	
 ?>
