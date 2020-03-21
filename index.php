<!DOCTYPE html>
<html>
<head>
	<title>Jardineria Lago Azul</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/site.css">
	<script src="/librerias/jquery/jquery-3.4.1.js"></script>
	<script src="/librerias/bootstrap/js/bootstrap.js"></script>
	<script src="/js/sitio.js"></script>
</head>
<body>
	<div class="container-fluid" id="contenedor">
		<div class="row">
			<div class="col" id="navbar-container">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Jardineria Lago Azul</a>
				 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse" id="navbarNav">
				    	<ul class="navbar-nav">
				      		<li class="nav-item active">
				        		<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				      		</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="#">Servicios</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="#">Contacto</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					      	</li>
				    	</ul>
				  	</div>
				</nav>
			</div>
		</div>
		<div class="row" id="seccion_1">
			<div class="velo">
				<div class="row align-items-center">
					<div class="col">
						<h1 class="titulo-principal">Jardineria Lago Azul</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="seccion_2">
			<div class="container">
				<?php include('inclusiones/quienes_somos.php'); ?>
			</div>
		</div>
		<div class="row" id="seccion_3">
			<div class="velo">
				<div class="container">
					<?php include('inclusiones/servicios.php'); ?>
				</div>
			</div>
		</div>
		<div class="row" id="seccion_4">
			<div class="container">
				<?php include('inclusiones/info-contacto.php'); ?>
			</div>
		</div>
		<div class="row" id="pie">
			<div class="container">
				<?php include('inclusiones/formulario-contacto.php'); ?>
			</div>
		</div>
		<div class="row" id="pie_2">
		</div>
	</div>
</body>
</html>