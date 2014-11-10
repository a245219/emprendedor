<?php 
/*
| 
| El documento default/settings.php contiene información básica del
| sitio como:
| 
| 	- $site_url: URL del sitio
| 	- $brand_name: Nombre de la empresa
| 	- $product_name: Nombre del producto
| 
*/
require '../default/settings.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Resultado"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>
	
	<!-- Contenido principal -->
	<div class="container">
		<div class="jumbotron">
			<h1>
				<span class='glyphicon glyphicon-ok text-success'></span>
				¡Listo!
			</h1>			
			<h3>Obtuvimos 2 horarios perfectos para ti.</h3>
			<br>
			<?php require 'result.php'; ?>

			<p class="text-muted"><em><small>&lt;Falta mostrar grupos / salones / profesores&gt;</small></em></p>

			<p class="text-right"><a href="#" class="btn btn-primary btn-lg">Exportar</a></p>

		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>

	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>
	
</body>
</html>