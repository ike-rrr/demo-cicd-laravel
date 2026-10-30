
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevFlow | Información</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <main class="container">

        <div class="logo">D</div>

        <h1>Sobre <span>DevFlow</span></h1>

        <p>
            DevFlow es un proyecto desarrollado con Laravel
            para practicar los conceptos de integración continua
            y despliegue continuo.
        </p>

        <div class="version info-content">
            <h3>Tecnologías utilizadas</h3>

            <ul>
                <li>Laravel: framework PHP.</li>
                <li>HTML: estructura de la aplicación.</li>
                <li>CSS: diseño y estilos.</li>
                <li>JavaScript: interactividad.</li>
                <li>GitHub: control de versiones.</li>
                <li>Wasmer: alojamiento y despliegue.</li>
            </ul>
        </div>

        <a href="{{ route('home') }}" class="secondary-button">Volver al inicio</a>

    </main>

</body>
</html>
