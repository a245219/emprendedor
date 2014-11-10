<?php 
/*
| 
| Página: Facultades
| 
| Esta página pide al usuario elegir la facultad a la que
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
$progress = 2;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Facultades"; ?>
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
				Facultad
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>Selecciona tu <span class='label label-info'>facultad</span></h3>
			<br>
			<div class="list-group user-lista-facultades">
				<a href="#" class="list-group-item">Artes</a>
				<a href="#" class="list-group-item">Ciencias agrarias</a>
				<a href="#" class="list-group-item">Ciencias agrotecnológicas (Chih.)</a>
				<a href="#" class="list-group-item">Ciencias agrotecnológicas (Cuauhtémoc)</a>
				<a href="#" class="list-group-item">Ciencias agrícolas y forestales (Delicias)</a>
				<a href="#" class="list-group-item">Ciencias políticas y sociales (Chih.)</a>
				<a href="#" class="list-group-item">Ciencias políticas y sociales (Juárez)</a>
				<a href="#" class="list-group-item">Ciencias químicas</a>
				<a href="#" class="list-group-item">Contaduría y administración</a>
				<a href="#" class="list-group-item">Derecho</a>
				<a href="#" class="list-group-item">Educación física</a>
				<a href="#" class="list-group-item">Enfermería y nutriología (Chih.)</a>
				<a href="#" class="list-group-item">Enfermería y nutriología (Parral)</a>
				<a href="#" class="list-group-item">Filosofía y letras</a>
				<a href="../carreras" class="list-group-item">Ingeniería</a>
				<a href="#" class="list-group-item">Medicina</a>
				<a href="#" class="list-group-item">Odontología</a>

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