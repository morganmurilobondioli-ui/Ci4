<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENATI</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Bienvenido a SENATI</h1>
    <!-- ¿Cómo funciona la carpeta PUBLIC -->
    <!-- La carpeta PUBLIC es la raíz de nuestro sitio web, por lo que todas las rutas se basan en ella -->
    <img src="images/senati.jpg" alt="Logo de SENATI" width="200">
    <hr>

    <!-- Enlaces a las diferentes carreras -->
    <!-- Url Absolutas -->
    <a href="<?= base_url('programador')   ?>">Ingenieria de Software</a> |
    <a href="<?= base_url('creativo')   ?>">Diseño Gráfico Digital</a>
</body>
</html>