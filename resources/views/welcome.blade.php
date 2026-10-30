
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevFlow | Inicio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <main class="container">

        <div class="logo">D</div>
        
        <span class="status" id="status">
            Aplicación funcionando
        </span>

        <h1>Bienvenido a <span>DevFlow</span></h1>

        <p>
            Aplicación Laravel desplegada en producción.
            Un proyecto para demostrar integración continua
            y despliegue continuo. bgenuuibnweshunisewhuniuinehgbv
        </p>

        <div class="version">
            <strong>Versión:</strong> 1.0.0
            <br><br>
            <strong>Framework:</strong> Laravel
        </div>

        <div class="buttons">
            <button id="statusButton">Pausar App</button>
            <a href="{{ route('info') }}" class="secondary-button">Más información</a>
        </div>



    </main>

</body>
</html>
