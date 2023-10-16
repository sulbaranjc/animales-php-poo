<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "./Animal.php";
require_once "./Gato.php";
require_once "./Perro.php";
require_once "./Pajaro.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de PHP</title>
    <!-- Inclusión del CDN de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Practica de PHP</h2>
        <h3 class="text-center">Programación de animales con herencia en PHP</h3>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sonido</th>
                    <th>Acción específica</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Instancias
                $animales = [
                    new Gato("garfield", 3.5),
                    new Perro("Firulais", 5),
                    new Pajaro("Plumita", 1.2)
                ];

                foreach ($animales as $animal) {
                    $animal->imprimirFila();
                }
                ?>
            </tbody>
        </table>
        <div class="">
            <h4 class="text-center">By Juan Carlos Sulbaran</h4>
        </div>
    </div>

    <!-- Opcional: Bootstrap JS, Popper.js, y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
