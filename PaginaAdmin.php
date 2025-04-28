<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/PaginaAdmin.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css">
    <link rel="stylesheet" href="./CSS/fuentes.css">
</head>
<body>
	<div id="ContenedorEncabezado" class="container-fluid"><!--Inicio contendor encabezado-->
			
			<?php include("Componentes/PaginaAdmin/HeaderAdmin.html") ?><!--Encabezado-->

	</div><!--Fin contenedor encabezado-->

	<div id="ContenedorMenu" class="container-fluid"><!--Inicio contendor encabezado-->
			
			<?php include("./Componentes/PaginaAdmin/NavAdmin.html") ?><!--menu-->

	</div><!--Fin contenedor encabezado-->

	

	<div class="container contenido"><!-- Inicio contenido principal -->
    <div class="row"><!-- Inicio fila contenido -->

      <!-- Panel de bienvenida -->
      <div class="col-xs-12">
      	
      	<?php include("./Componentes/PaginaAdmin/JumbotronAdmin.html") ?>
        
      </div>

    </div><!-- Fin fila contenido -->
  </div><!-- Fin contenido principal -->

  <?php include("Footer.html") ?>

</body>
</html>