<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo</title>
</head>
<body>
<h1>Calculadora de Sueldo para Vendedores</h1>
    <form method="post" action="">
    Importe Total Vendido del Mes (S/.): <br> <input type="number" name="importe"> <br>
    Número de Hijos en Edad Escolar: <br> <input type="number" name="hijos"> <br> <br>
    Resultado: <br>
        <input type="submit" name="Calular"   value="Calcular" /><br>
        <?php
        $importe = $_POST["importe"];
        $hijos = $_POST["hijos"];
        $bonificacion = $hijos * 50;
        $comision = $venta * 0.075;
        $sueldo_basico = 600;
        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
        $descuento = $sueldo_bruto * 0.11;
        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<p>Bonificación por hijos en edad escolar: S/. $bonificacion</p>";
        echo "<p>Comisión por ventas: S/. $comision</p>";
        echo "<p>Sueldo bruto: S/. $sueldo_bruto</p>";
        echo "<p>Descuento del 11%: S/. $descuento</p>";
        echo "<p>Sueldo neto: S/. $sueldo_neto</p>";
        ?>
</body>
</html>