<?php 
/*
| 
| Página: Restricciones.
| 
| Pide al usuario elegir las últimas restricciones deseadas:
|	- Grupos/profesores que desea evitar.
| 	- Min. y máx. de materias a cursar (pendiente)
| 
*/
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
$progress = 6;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Restricciones"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>

	<div class="container">
		<div class="jumbotron">
			<h1>
				Restricciones
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>¡Casi listos! Selecciona las restricciones que desees.</h3>
			<br>	

			<table class="table table-bordered table-striped">
				<tr>
					<th>Evitar</th>
					<th>Docente</th>
					<th>Materia(s)</th>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>RAUL ACOSTA CHAVEZ</td>
					<td>CLINICA DE REQUERIMIENTOS</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>MARIO CUEVAS</td>
					<td>OP. TOPICOS DE ADMINISTRACION DE SISTEMAS</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>YESSICA RUIZ</td>
					<td>DISENO DE SOFTWARE DE BAJO NIVEL</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>SAUL DE LIRA</td>
					<td>BASES DE DATOS II</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>NAHIM JOSAFAT PONCE LUCERO</td>
					<td>EJERCICIO PROFESIONAL DE LA ING. DEL SOFTWARE</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>RICARDO BLANCO VEGA</td>
					<td>GRAFICACION <br>MINERIA DE DATOS</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>CECILIA LOPEZ RIOS</td>
					<td>TALLER EMPRENDEDOR</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>JOSE LINO CARRILLO</td>
					<td>REDES I</td>
				</tr>
			</table>


			<br><br><p class="text-muted"><small><em>(Falta pedir min. y máx. de materias)</em></small></p>
			<p class="text-right"><a href="finished.php" class="btn btn-success btn-lg">¡Ver horarios!</a></p>


		</div>
	</div>


	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>


	
	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>
	
</body>
</html>