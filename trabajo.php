<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resumen de Compra</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar datos del formulario
        $nombre1 = $_POST['nombre1'];
        $precio1 = floatval($_POST['precio1']);
        $nombre2 = $_POST['nombre2'];
        $precio2 = floatval($_POST['precio2']);
        $nombre3 = $_POST['nombre3'];
        $precio3 = floatval($_POST['precio3']);

        // Calcular suma total
        $suma = $precio1 + $precio2 + $precio3;

        // Aplicar descuento del 0.16 (16%)
        $descuento = $suma * 0.16;
        $total_pagar = $suma - $descuento;

        // Mostrar resultados
        echo "<p>Producto 1: $nombre1 - Precio: $$precio1</p>";
        echo "<p>Producto 2: $nombre2 - Precio: $$precio2</p>";
        echo "<p>Producto 3: $nombre3 - Precio: $$precio3</p>";
        echo "<p>Suma total: $$suma</p>";
        echo "<p>Descuento (16%): $$descuento</p>";
        echo "<p>Total a pagar: $$total_pagar</p>";
    }
    ?>
</body>
</html>
