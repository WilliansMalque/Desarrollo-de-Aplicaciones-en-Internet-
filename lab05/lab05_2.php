<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Compra de Gaseosas</title>
</head>

<body>
    <form action="http://localhost/Lab05/gaseosas.php" method="post">

        <label for="precioActual">Precio actual de la gaseosa:</label><br>
        <input type="number" id="precioActual" name="precioActual"><br>
        <label for="unidades">Cantidad de unidades adquiridas:</label><br>
        <input type="number" id="unidades" name="unidades"><br>
        <input type="submit" value="Calcular Compra">
    </form>
    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioActualGaseosa = $_POST["precioActual"];
        $cantidadGaseosas = $_POST["unidades"];
        $nuevoPrecioGaseosa = $precioActualGaseosa * (1 - 0.05);
        $importeCompraSinDescuento = $nuevoPrecioGaseosa * $cantidadGaseosas;
        $importeDescuento = $importeCompraSinDescuento * 0.07;
        $importeAPagar = $importeCompraSinDescuento - $importeDescuento;
        $caramelosObsequio = $cantidadGaseosas * 2;

        echo "Nuevo precio de la gaseosa: S/" . number_format($nuevoPrecioGaseosa, 2) . "<br>";
        echo "Importe de la compra (sin descuento): S/" . number_format($importeCompraSinDescuento, 2) . "<br>";
        echo "Importe del descuento: S/" . number_format($importeDescuento, 2) . "<br>";
        echo "Importe a pagar: S/" . number_format($importeAPagar, 2) . "<br>";
        echo "Obsequio: " . $caramelosObsequio . " caramelos<br>";
    }
    ?>
</body>

</html>