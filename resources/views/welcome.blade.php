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

    <link rel="icon" href="https://servicios.cecep.edu.co/Web_Spartacus/img/logo_vertical.svg" type="image/png">

    <link rel="stylesheet" href="../views/welcome.css">
    <style>
        body {
            background-image: url('https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExamw2cjA1ajdhZWI4ZzZ4d3hheHZmZmx6YWNkcXZheTc3eXE5cDJqMSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/LXxWO0pgGEma8W40A9/giphy.gif');
            background-size: cover;
            background-position: center;
            color: black; 
            padding: 10px; 
        }
        .texto-blanco {
            background-color: rgba(255, 255, 255, 0.8); /* Color blanco con opacidad */
            padding: 10px; /* Espaciado interno ajustado */
            border-radius: 5px; /* Bordes redondeados */
            display: inline-block; /* Elemento en línea */
            text-align: center; /* Centra el contenido del div */
        }
        .texto-blanco img {
            width: 30px; /* Tamaño del icono */
            margin-top: 10px; /* Espacio entre el icono y el texto */
        }
    </style>
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
            <div class="texto-blanco"> <!-- Envuelve el contenido de texto en un cuadro blanco -->
                <h1>Sebastián Rodríguez Camilo</h1>
                <h2>Información de contacto:</h2>
                <p><strong>Nombre:</strong> Sebastián Rodríguez Camilo</p>
                <p><strong>Grupo:</strong> Gurpro S5AN</p>
                <p><strong>Correo:</strong> segarodriguezcamilo@gmail.com</p>
                <p><strong>Tecnologías:</strong> Desarrollo de Software e Informática</p>
                <img src="https://servicios.cecep.edu.co/Web_Spartacus/img/logo_vertical.svg" alt="cecep.icon">
            </div>
        </div>
    </header>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
