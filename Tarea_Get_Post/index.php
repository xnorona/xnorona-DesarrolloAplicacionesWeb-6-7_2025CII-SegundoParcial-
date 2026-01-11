<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea - Get-Post - PHP</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 20px; }
        nav { background: #f4f4f4; padding: 10px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: blue; }
        .resultado { background: #e7f3fe; padding: 10px; border-left: 5px solid #2196F3; margin-top: 20px; }
        form { border: 1px solid #ccc; padding: 15px; max-width: 300px; }
    </style>
</head>
<body>

    <h1>Portal Educativo UG</h1>

    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a>
        <a href="index.php?seccion=Unidades">Unidades</a>
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <section>
        <?php
        // Verificamos si existe una variable 'seccion' enviada por la URL (GET)
        if (isset($_GET['seccion'])) {
            $seccion = $_GET['seccion'];
            echo "<div class='resultado'>Usted ha seleccionado la sección: <strong>$seccion</strong></div>";
        } else {
            echo "<p>Bienvenido. Por favor, seleccione una opción del menú.</p>";
        }
        ?>
    </section>

    <hr>

    <h2>Registro</h2>
    <form action="index.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    // Verificamos si se han enviado datos a través del formulario (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];

        echo "<div class='resultado'>";
        echo "<h3>Datos Recibidos por POST:</h3>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Correo: " . htmlspecialchars($correo);
        echo "</div>";
    }
    ?>

</body>
</html>