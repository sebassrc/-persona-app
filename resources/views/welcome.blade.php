<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">
    <header>
        <h1>Sebastián Rodríguez Camilo</h1>
    </header>
    <div class="container">
        <h2>Información de contacto:</h2>
        <p><strong>Nombre:</strong> Sebastián Rodríguez Camilo</p>
        <p><strong>Grupo:</strong> Gurpro S5AN</p>
        <p><strong>Correo:</strong> segarodriguezcamilo@gmail.com</p>
        <p><strong>Tecnologías:</strong> Desarrollo de Software e Informática</p>

        <img src="https://tse4.mm.bing.net/th?id=OIP.XdpZeJZ7X9b3a7wzIeLhcQHaHa&pid=Api&P=0&h=180" alt="Instituto">
    </div>
</body>
</html>
