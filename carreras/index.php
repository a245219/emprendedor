<?php 
/*
| 
| Página: Carreras
| 
| Esta página pide al usuario elegir la carrera a la que
| pertenece.
| 
*/
/*
| 
| El archivo default/settings.php contiene información básica del
| sitio como:
| 
|   - $site_url: URL del sitio
|   - $brand_name: Nombre de la empresa
|   - $product_name: Nombre del producto
| 
*/
require '../default/settings.php';
// Para la barra de progreso
$progress = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Carreras"; ?>
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
				Carrera
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>Selecciona tu <span class='label label-warning'>carrera</span></h3>
			<br>
			<div class="list-group user-lista-facultades">
				<a href="#" class="list-group-item">Ing. Aeroespacial</a>
				<a href="#" class="list-group-item">Ing. Civil</a>
				<a href="#" class="list-group-item">Ing. de Hardware</a>
				<a href="#" class="list-group-item">Ing. de Minas y Metalurgia</a>
				<a href="../materias" class="list-group-item">Ing. de Software</a>
				<a href="#" class="list-group-item">Ing. Física</a>
				<a href="#" class="list-group-item">Ing. Geológica</a>
				<a href="#" class="list-group-item">Ing. Matemática</a>
				<a href="#" class="list-group-item">Ing. Sistemas Topográficos</a>
				<a href="#" class="list-group-item">Ing. Tecnología de Procesos</a>
			</div>
		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>


	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>



</body>
</html>