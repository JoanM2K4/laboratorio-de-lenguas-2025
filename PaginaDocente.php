<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css">
	<link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
	<link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css">
	<link rel="stylesheet" type="text/css" href="./CSS/CSSPaginas/PaginaDocente.css">
	<link rel="stylesheet" type="text/css" href="./CSS/fuentes.css">
</head>

<body>

	<div id="ContenedorEncabezado" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("./Componentes/PaginaDocente/HeaderDocente.html") ?><!--Encabezado-->

	</div><!--Fin contenedor encabezado-->

	<div id="ContenedorMenu" class="container-fluid"><!--Inicio contendor encabezado-->

		<?php include("./Componentes/PaginaDocente/NavDocente.html") ?><!--menu-->

	</div><!--Fin contenedor encabezado-->

	<div id="contendor" class="container"><!--Inicia contendor-->

    <?php include("./Componentes/PaginaDocente/InformacionCurso.html") ?><!--Inicia contenido de Informacion del curso-->
    <?php include("./Componentes/PaginaDocente/ListaCurso.html") ?> <!--Inicia contenido de la lista del curso-->
		
	</div><!--termina contendor-->

	<?php
	include 'Footer.html';  // Incluye el contenido de Footer.html
	?>



</body>

</html>