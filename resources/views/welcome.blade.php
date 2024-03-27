<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Personas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/comunas">Comunas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/municipios">Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/departamentos">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/paises">Paises</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-center">
        <div class="container">
            <h1>Sebastián Rodríguez Camilo</h1>
        </div>
    </header>

    <div class="container text-center">
        <h2>Información de contacto:</h2>
        <p><strong>Nombre:</strong> Sebastián Rodríguez Camilo</p>
        <p><strong>Grupo:</strong> Gurpro S5AN</p>
        <p><strong>Correo:</strong> segarodriguezcamilo@gmail.com</p>
        <p><strong>Tecnologías:</strong> Desarrollo de Software e Informática</p>

        <img src="https://tse4.mm.bing.net/th?id=OIP.XdpZeJZ7X9b3a7wzIeLhcQHaHa&pid=Api&P=0&h=180" alt="Instituto">
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
