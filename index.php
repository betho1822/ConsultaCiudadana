<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Ciudadana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Consulta Ciudadana</h1>
        <p class="lead text-center">
            ¡Bienvenidos (as)! <br>
            ¡Tu participación es esencial en la Consulta Ciudadana diseñada para la formulación del Plan Municipal de Desarrollo de El Marqués, Querétaro 2024-2027! Este plan será fundamental para identificar los objetivos principales y las acciones que se llevarán a cabo durante el próximo periodo de gobierno municipal. Queremos escuchar tu voz para dar forma al plan rector de nuestro municipio en los próximos tres años. ¡Juntos podemos construir el Marqués que todos queremos!
        </p>

        <h2 class="mt-4">Datos Personales (Opcionales)</h2>
        <form id="consultaForm">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
            </div>
            </div>
            <div class="mb-3">
                <label for="ocupacion" class="form-label">Ocupación:</label>
                <input type="text" class="form-control" id="ocupacion">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select" id="sexo">
                    <option selected>Selecciona una opción</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="localidad" class="form-label">Localidad:</label>
                <input type="text" class="form-control" id="localidad">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono">
            </div>
            <h2 class="mt-4">Cuestionario</h2>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
