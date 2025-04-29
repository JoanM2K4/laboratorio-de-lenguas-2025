<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css">
    <link rel="stylesheet" type="text/css" href="./CSS/CSSPaginas/contacto.css">
    <link rel="stylesheet" type="text/css" href="./CSS/fuentes.css">

    
    <!-- Inclusión de archivos CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css"> <!-- Estilos personalizados del encabezado -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/PaginaAdmin.css"> <!-- Estilos específicos para la página de administrador -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css"> <!-- Estilos personalizados del pie de página -->
    <link rel="stylesheet" href="./CSS/fuentes.css"> <!-- Estilos de fuentes -->s
</head>

<body>

    <div id="ContenedorEncabezado" class="container-fluid"><!--Inicio contendor encabezado-->

        <?php include("Componentes/PaginaAdmin/HeaderAdmin.html") ?><!--Encabezado-->

    </div><!--Fin contenedor encabezado-->

    <div id="ContenedorMenu" class="container-fluid"><!--Inicio contendor encabezado-->

        <?php include("./Componentes/PaginaAdmin/NavAdmin.html") ?><!--menu-->

    </div><!--Fin contenedor encabezado-->

    <div id="contendor" class="container"><!--Inicia contendor-->

        <?php include("Componentes\Mensaje\breadcrumb_recibo.html") ?> <!-- migas de pan, muestran donde estas-->
        <?php include("Componentes\Mensaje\abonoFactura.html") ?> <!-- jumbotron con contenido -->

    </div><!--termina contendor-->

    <!--query-->
    <script src="./js/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <?php
    include 'Footer.html';  // Incluye el contenido de Footer.html
    ?>



</body>

</html>