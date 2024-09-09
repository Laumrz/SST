<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accidente de Trabajo - FURAT</title>
    <link rel="stylesheet" href="styles/stylesform.css">
</head>
<body>
<header>
        <h1>Registro de Accidente de Trabajo</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="furatForm.php">Generar FURAT</a></li>
        </ul>   
    </nav>
    <section>
        <form action="generar_furat.php" method="post">
        <p>Por favor, llene la información necesaria para generar el FURAT.</p>
            <label for="nombre_trabajador">Nombre del Trabajador:</label>
            <input type="text" id="nombre_trabajador" name="nombre_trabajador" required><br>

            <label for="documento_trabajador">Documento del Trabajador:</label>
            <input type="text" id="documento_trabajador" name="documento_trabajador" required><br>

            <label for="tipo_identificacion">Tipo de Identificación:</label>
            <select id="tipo_identificacion" name="tipo_identificacion" required>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="CE">Cédula de Extranjería</option>
            </select><br>

            <label for="fecha_accidente">Fecha del Accidente:</label>
            <input type="date" id="fecha_accidente" name="fecha_accidente" required><br>

            <label for="hora_accidente">Hora del Accidente:</label>
            <input type="time" id="hora_accidente" name="hora_accidente" required><br>

            <label for="cargo_trabajador">Cargo del Trabajador:</label>
            <input type="text" id="cargo_trabajador" name="cargo_trabajador" required><br>

            <label for="eps_trabajador">EPS:</label>
            <input type="text" id="eps_trabajador" name="eps_trabajador" required><br>

            <label for="arl_trabajador">ARL:</label>
            <input type="text" id="arl_trabajador" name="arl_trabajador" required><br>

            <label for="tipo_vinculo_laboral">Tipo de Vínculo Laboral:</label>
            <select id="tipo_vinculo_laboral" name="tipo_vinculo_laboral" required>
                <option value="Contrato a Término Fijo">Contrato a Término Fijo</option>
                <option value="Contrato a Término Indefinido">Contrato a Término Indefinido</option>
                <option value="Prestación de Servicios">Prestación de Servicios</option>
            </select><br>

            <label for="empresa_nombre">Nombre de la Empresa:</label>
            <input type="text" id="empresa_nombre" name="empresa_nombre" required><br>

            <label for="empresa_nit">NIT de la Empresa:</label>
            <input type="text" id="empresa_nit" name="empresa_nit" required><br>

            <label for="lugar_accidente">Lugar donde ocurrió el accidente:</label>
            <select id="lugar_accidente" name="lugar_accidente" required>
                <option value="Dentro de la Empresa">Dentro de la Empresa</option>
                <option value="Fuera de la Empresa">Fuera de la Empresa</option>
                <option value="Trabajo en Casa">Trabajo en Casa</option>
            </select><br>

            <label for="tipo_lesion">Tipo de Lesión:</label>
            <select id="tipo_lesion" name="tipo_lesion" required>
                <option value="Fractura">Fractura</option>
                <option value="Corte">Corte</option>
                <option value="Quemadura">Quemadura</option>
                <option value="Contusión">Contusión</option>
                <option value="Esguince">Esguince</option>
                <option value="Luxación">Luxación</option>
            </select><br>

            <label for="parte_cuerpo_afectada">Parte del cuerpo afectada:</label>
            <select id="parte_cuerpo_afectada" name="parte_cuerpo_afectada" required>
                <option value="Cabeza">Cabeza</option>
                <option value="Brazos">Brazos</option>
                <option value="Piernas">Piernas</option>
                <option value="Espalda">Espalda</option>
                <option value="Manos">Manos</option>
                <option value="Pies">Pies</option>
            </select><br>

            <label for="descripcion_accidente">Descripción del Accidente:</label>
            <textarea id="descripcion_accidente" name="descripcion_accidente" required></textarea><br>

            <input type="submit" value="Generar FURAT">
        </form>
    </section>
</body>
</html>
    