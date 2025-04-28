<!-- Inicio del documento HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración de caracteres y título de la página -->
    <meta charset="utf-8">
    <title>Inicio - Centro Especializado de Lenguas</title>

    <!-- Enlace a la librería Bootstrap 3 para estilos y diseño responsivo -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Enlace a las hojas de estilo personalizadas -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css">
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css">
    <link rel="stylesheet" href="./CSS/fuentes.css">

    <!-- Estilos CSS internos específicos de esta página -->
    <style>
        .card-icon {
            font-size: 50px;
            color: #2563eb;
        }

        .linea-divisora {
            border: none;
            height: 2px;
            background: #3b82f6;
            width: 100%;
            margin: 10px 0;
            border-radius: 5px;
        }

        .carousel-inner img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Encabezado principal del sitio -->
    <div id="ContenedorEncabezado" class="container-fluid">
        <?php include("Header.html"); ?>
    </div>

    <!-- Menú de navegación principal -->
    <?php include("./Componentes/index/Menu.html") ?>
    <!-- Carrusel de imágenes destacadas -->
    <?php include("./Componentes/index/Carrusel.html") ?>

    <!-- Sección principal de información sobre el centro -->
    <?php include("./Componentes/index/Informacion.html") ?>

    <!-- Inclusión de librerías JavaScript necesarias -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Pie de página del sitio -->
    <?php include 'Footer.html'; ?>

</body>

</html>
