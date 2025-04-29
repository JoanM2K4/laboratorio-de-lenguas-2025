<!DOCTYPE html>
	<html lang="es"> <!-- la pagina estara en español --> 

<head>
	<meta charset="utf-8">
	<title>Contacto</title> <!-- titulo de la pagina -->
	<link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css"> <!-- estilos de componentes Bootstrap -->
	<link rel="stylesheet" type="text/css" href="./CSS/CSSPaginas/PaginaContacto.css"> <!-- estilo de este documento -->
	<link rel="stylesheet" type="text/css" href="./CSS/fuentes.css"> <!-- estilo que aplica la fuentes tipograficas del sitio -->
	<link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css"> <!-- estilo del Encabezado -->
	<link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css"> <!-- estilo del Pie de pagina -->
</head>

<body>

	<div id="ContenedorEncabezado" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("Header.html") ?><!--Encabezado-->

	</div><!--Fin contenedor encabezado-->

	<div id="ContenedorMenu" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("./Componentes/PaginaInicio/NavInicio.html") ?><!--menu-->

	</div><!--Fin contenedor encabezado-->

	<div id="componentes" class="container"><!--Inicia contendor de componentes-->

		<!-- añadicion de componentes -->
		<?php include("Componentes\contacto\breadcrumb.html") ?> <!-- migas de pan (muestran donde estas)-->
		<?php include("Componentes\contacto\saludo.html") ?> <!--  jumbtron (cuadro grande con un titulo y frase)-->
		<?php include("Componentes\contacto\informacion.html") ?> <!-- cards con informaccion de contacto -->
		<?php include("Componentes\contacto\horario.html") ?> <!-- horarios de clases -->
		<?php include("Componentes\contacto\mapa.html") ?> <!-- ubicacion del centro de lenguas en un mapa -->

	</div><!--termina contendor-->

	<!-- ==== Añade scripts de bootstrap ==== -->
	<!--query-->
	<script src="./js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="./js/bootstrap.min.js"></script>

	<?php
	include 'Footer.html';  // Incluye el contenido de Footer.html
	?>



</body>

</html>