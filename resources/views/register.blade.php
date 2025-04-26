<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Registro</h3>
                    </div>
                    <div class="card-body">
                        
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido:</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="document">Cédula:</label>
                                <input type="text" id="document" name="document" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="department">Departamento:</label>
                                <select id="department" name="department" class="form-control" required>
                                    <option value="">Selecciona un departamento</option>
                                    <!-- Opciones de departamentos -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad:</label>
                                <select id="city" name="city" class="form-control" required>
                                    <option value="">Selecciona una ciudad</option>
                                    <!-- Opciones de ciudades -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone">Celular:</label>
                                <input type="text" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="habeas_data">Autorizo el tratamiento de mis datos:</label>
                                <input type="checkbox" id="habeas_data" name="habeas_data" class="form-check-input" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>