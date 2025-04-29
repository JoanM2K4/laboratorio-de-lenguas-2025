<!DOCTYPE html>
<html lang="es"> <!-- Idioma configurado en español -->
<head>
    <meta charset="UTF-8"> <!-- Configuración de codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Para diseño responsive -->
    
    <title>Administrador</title> <!-- Título de la página -->

    <!-- Inclusión de archivos CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_header.css"> <!-- Estilos personalizados del encabezado -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/PaginaAdmin.css"> <!-- Estilos específicos para la página de administrador -->
    <link rel="stylesheet" href="./CSS/CSSPaginas/Style_footer.css"> <!-- Estilos personalizados del pie de página -->
    <link rel="stylesheet" href="./CSS/fuentes.css"> <!-- Estilos de fuentes -->
</head>

<body>

    <!-- Inicio del contenedor del encabezado -->
    <div id="ContenedorEncabezado" class="container-fluid">
        <!-- Inclusión del encabezado desde archivo externo -->
        <?php include("Componentes/PaginaAdmin/HeaderAdmin.html"); ?>
    </div>
    <!-- Fin del contenedor del encabezado -->

    <!-- Inicio del contenedor del menú de navegación -->
    <div id="ContenedorMenu" class="container-fluid">
        <!-- Inclusión del menú desde archivo externo -->
        <?php include("./Componentes/PaginaAdmin/NavAdmin.html"); ?>
    </div>
    <!-- Fin del contenedor del menú de navegación -->

    <!-- Inicio del contenedor del contenido principal -->
    <div class="container contenido">
        <div class="row"> <!-- Inicio de la fila del contenido -->

            <!-- Inicio del panel de bienvenida -->
            <div class="col-xs-12">
                <!-- Inclusión del jumbotron de bienvenida desde archivo externo -->
                <?php include("./Componentes/PaginaAdmin/JumbotronAdmin.html"); ?>
            </div>
            <!-- Fin del panel de bienvenida -->

        </div> <!-- Fin de la fila del contenido -->
    </div>
    <!-- Fin del contenedor del contenido principal -->

    <!-- Inclusión del pie de página desde archivo externo -->
    <?php include("Footer.html"); ?>

</body>
</html>
