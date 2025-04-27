<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css">
	<link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
	<link rel="stylesheet" type="text/css" href="./CSS/CSSPaginas/contacto.css">
	<link rel="stylesheet" type="text/css" href="./CSS/fuentes.css">
</head>

<body>

	<div id="ContenedorEncabezado" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("Header.html") ?><!--Encabezado-->

	</div><!--Fin contenedor encabezado-->

	<div id="ContenedorMenu" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("./Componentes/PaginaInicio/NavInicio.html") ?><!--menu-->

	</div><!--Fin contenedor encabezado-->

	<div id="contendor" class="container"><!--Inicia contendor-->

		<?php include("Componentes\contacto\breadcrumb.html") ?> <!-- migas de pan, muestran donde estas-->
		<?php include("Componentes\contacto\saludo.html") ?> <!-- jumbotron -->
		<?php include("Componentes\contacto\informacion.html") ?> <!-- cards con informaccion de ontacto -->
		<?php include("Componentes\contacto\horario.html") ?> <!-- horarios de clases -->
		<?php include("Componentes\contacto\mapa.html") ?> <!-- ubicacion del centro de lenguas en un mapa -->

	</div><!--termina contendor-->

	<!--query-->
	<script src="./js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="./js/bootstrap.min.js"></script>

	<div id="footer" class="row">
		<?php
		include 'Footer.html';  // Incluye el contenido de Footer.html
		?>
	</div>


</body>

</html>