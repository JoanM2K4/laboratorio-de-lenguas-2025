<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Centro de mensajes</title>
    <link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css">
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

        <?php include("Componentes\Mensaje\breadcrumb_m.html") ?> <!-- migas de pan, muestran donde estas-->
        <?php include("Componentes\Mensaje\cabeza_mensaje.html") ?> <!-- jumbotron -->
        <?php include("Componentes\Mensaje\listaMensajes.html") ?> <!-- lista de mensajes -->
        

    </div><!--termina contendor-->

    <!--query-->
    <script src="./js/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="./js/bootstrap.min.js"></script>
    <?php include 'Footer.html';  // Incluye el contenido de Footer.html?>

</body>
</html>