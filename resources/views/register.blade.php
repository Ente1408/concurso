<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="lastname">Apellido:</label>
        <input type="text" id="lastname" name="lastname" required>
        <br>
        <label for="document">Cédula:</label>
        <input type="text" id="document" name="document" required>
        <br>
        <label for="department">Departamento:</label>
        <select id="department" name="department" required>
            <!-- Opciones de departamentos -->
        </select>
        <br>
        <label for="city">Ciudad:</label>
        <select id="city" name="city" required>
            <!-- Opciones de ciudades -->
        </select>
        <br>
        <label for="phone">Celular:</label>
        <input type="text" id="phone" name="phone" required>
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="habeas_data">Autorizo el tratamiento de mis datos:</label>
        <input type="checkbox" id="habeas_data" name="habeas_data" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
